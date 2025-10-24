<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);


// make sure only logged in admin can access

if (!isset($_SESSION['admin'])) {
    abort(401);
    header('Location: /login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $paymentId = (int) $_POST['id'];

    // Delete user
    $db->query("DELETE FROM payments WHERE id = ?", [$paymentId]);

    $_SESSION['success'] = 'User deleted successfully.';
    header('Location: /adminDashboard?tab=payments');
    exit();
} else {
    header('Location: /adminDashboard?tab=payments');
    exit();
}

