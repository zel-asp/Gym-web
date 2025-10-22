<?php
use Core\Database;
session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}


$userId = $_SESSION['user']['id'];

if (isset($_POST['feedback'])) {

    dd($_SESSION['expiration_date']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback_text = trim($_POST['feedback_text']);
    $rating = intval($_POST['rating']);

    $errors = [];
    $success = [];

    // Check how many feedbacks the user has in the last 24 hours
    $recentFeedbackCount = $db->query(
        "SELECT COUNT(*) AS count FROM feedback WHERE user_id = ? AND created_at >= NOW() - INTERVAL 1 DAY",
        [$userId]
    )->fetch_one()['count'];

    if ($recentFeedbackCount >= 3) {
        $errors[] = "You have already submitted  feedback entries in the last 24 hours. Please wait before submitting again.";
    }
    if (empty($feedback_text)) {
        $errors[] = "Feedback is required before submitting";
    } elseif (strlen($feedback_text) > 100) {
        $errors[] = "Only less than 100 characters allowed";
    }
    if ($rating < 1 || $rating > 5) {
        $errors[] = "Please provide a valid rating between 1 and 5";
    }
    if (empty($errors)) {
        $db->query(
            "INSERT INTO feedback (user_id, name, email, feedback_text, rating) VALUES (?, ?, ?, ?, ?)",
            [$userId, $name, $email, $feedback_text, $rating]
        );
        $_SESSION['success'] = ["Thank you for your feedback!"];
    } else {
        $_SESSION['errors'] = $errors;
    }

    header('Location: /userdashboard');
    exit();
}

