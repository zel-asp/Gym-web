<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

// make sure only logged in admin can access
if (
    !isset($_SESSION['admin']) ||
    !isset($_SESSION['admin']['logged_in']) ||
    $_SESSION['admin']['role'] !== 'admin'
) {
    abort(401);
    header('Location: /login?error=Unauthorized+access');
    exit();
}

//Ensure it is a POST request with a valid ID
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $userId = (int) $_POST['id'];

    // Delete user
    $db->query("DELETE FROM users WHERE id = ?", [$userId]);

    $_SESSION['success'] = 'User deleted successfully.';
    header('Location: /adminDashboard?tab=members');
    exit();
} else {
    header('Location: /adminDashboard?tab=members');
    exit();
}

