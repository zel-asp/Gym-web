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
    header('Location: /login?error=Unauthorized+access');
    exit();
}

//Ensure it is a POST request with a valid ID
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete']) && !empty($_POST['id'])) {

    $paymentId = (int) $_POST['id'];

    // Double check that the payment exists before deleting
    $paymentExists = $db->query("SELECT id FROM payments WHERE id = ?", [$paymentId])->find();

    if ($paymentExists) {
        $db->query("DELETE FROM payments WHERE id = ?", [$paymentId]);
        $_SESSION['success'] = 'Payment deleted successfully.';
    } else {
        $_SESSION['error'] = 'Payment not found.';
    }

    header('Location: /adminDashboard');
    exit();

} else {
    header('Location: /adminDashboard?error=Invalid+request');
    exit();
}

