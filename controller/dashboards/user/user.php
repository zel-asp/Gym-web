<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');

$db = new Database($config['database']);


if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}

$username = $_SESSION['user']['username'];
$userId = $_SESSION['user']['id'];
$token = $_SESSION['user']['token'];

$stmt = $db->query('SELECT session_token FROM users WHERE id = ?', [$userId]);
$dbUser = $stmt->fetch_one();

if (!$dbUser || $dbUser['session_token'] !== $token) {
    session_destroy();
    echo json_encode(['status' => 'invalid']);
    header('Location: /login');
    exit();
}

//dashboard
$membership_status = $db->query(
    'SELECT plan_name, status, DATE_FORMAT(last_payment, "%M %d, %Y") AS last_payment FROM memberships WHERE user_id = ?',
    [$userId]
)->fetch_one();


//feedback
$feedback = $db->query('SELECT name, feedback_text, rating FROM feedback ORDER BY created_at DESC LIMIT 15')->find();


//membership
$info = $db->query('SELECT * FROM user_profiles WHERE user_id = ?', [
    $userId
])->fetch_one();

//payment
$paymentId = $_SESSION['paymentId'] ?? '';

$paymentInfo = $db->query('SELECT * FROM payments WHERE id = ? AND user_id = ?', [$paymentId, $userId])->fetch_one();

$paymentInfo = $db->query('SELECT * FROM payments WHERE user_id = ?', [$userId])->fetch_one();

if ($paymentInfo) {
    $paymentDate = new DateTime($paymentInfo['payment_date']);
    $now = new DateTime();

    $daysValid = match ($paymentInfo['plan']) {
        'Basic' => 15,
        'Regular' => 30,
        'Premium' => 90,
        default => 0
    };

    $expiryDate = clone $paymentDate;
    $expiryDate->modify("+{$daysValid} days");

    if ($now > $expiryDate && $paymentInfo['status'] !== 'Expired') {
        $db->query("UPDATE payments SET status = 'Expired' WHERE id = ?", [$paymentInfo['id']]);
        $paymentInfo['status'] = 'Expired'; // reflect immediately
    }
}

view_path('dashboards/user', 'index.php', [
    'username' => $username,
    'membership_status' => $membership_status,
    'feedback' => $feedback,
    'info' => $info,
    'paymentInfo' => $paymentInfo
]);

