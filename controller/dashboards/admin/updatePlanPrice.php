<?php

use Core\Database;

session_start();
$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['admin'])) {
    header('Location: /login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plan = $_POST['plan_name'] ?? '';
    $price = $_POST['price'] ?? '';

    $allowedPlans = ['Basic', 'Regular', 'Premium'];

    if (in_array($plan, $allowedPlans) && is_numeric($price) && $price >= 0) {
        try {
            $db->query("UPDATE membershipplans SET `$plan` = ? WHERE id = 1", [floatval($price)]);
            $_SESSION['success'] = "{$plan} plan price updated successfully!";
        } catch (Exception $e) {
            $_SESSION['error'] = "Failed to update plan: " . $e->getMessage();
        }
    } else {
        $_SESSION['error'] = "Invalid plan name or price value.";
    }

    header("Location: /adminDashboard?tab=settings");
    exit();
}
