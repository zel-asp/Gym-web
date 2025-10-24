<?php

use Core\Database;

session_start();
$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['admin'])) {
    header('Location: /login');
    exit();
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteFeedback'])) {
        $id = $_POST['id'] ?? null;

        if ($id) {
            $db->query('DELETE FROM feedback WHERE id = ?', [$id]);

            $_SESSION['feedbackDeleted'] = ['Feedback deleted successfully.'];
        } else {
            $_SESSION['deleteError'] = ['Invalid feedback ID.'];
        }

        header('Location: /adminDashboard?tab=feedback');
        exit();
    }
} catch (\Throwable $th) {
    $_SESSION['deleteError'] = ['Error: ' . $th->getMessage()];
    header('Location: /adminDashboard?tab=feedback');
    exit();
}
