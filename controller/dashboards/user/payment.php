<?php
use Core\Database;
session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = trim($_POST['fullname']);
        $plan = trim($_POST['plan']); // Example: "15 Days(Basic) - 350"
        $payment_method = trim($_POST['payment_method']);
        $userId = $_SESSION['user']['id'];
        $email = $_SESSION['user']['email'];
        $paymentError = [];

        // Validate required fields
        if (empty($fullname) || empty($plan) || empty($payment_method)) {
            $paymentError[] = "All fields are required.";
        }

        // Split plan string → "15 Days(Basic) - 350"
        $parts = explode('-', $plan);
        $plan_name = trim($parts[0] ?? '');
        $amount = isset($parts[1]) ? (float) trim($parts[1]) : 0;

        if ($amount <= 0) {
            $paymentError[] = "Invalid plan amount.";
        }

        // Check if user already has a payment
        $existingPayment = $db->query("SELECT id FROM payments WHERE user_id = ?", [$userId])->find();

        if ($existingPayment) {
            $paymentError[] = "You already have a payment record. Please contact the admin to update or change your plan.";
        }

        // If there are validation or duplicate errors
        if (!empty($paymentError)) {
            $_SESSION['paymentError'] = $paymentError;
            header("Location: /userdashboard?tab=payment");
            exit();
        }

        $db->query(
            "INSERT INTO payments (user_id, name,email, plan, amount, payment_method, status) 
             VALUES (?,?, ?, ?, ?, ?, 'Pending')",
            [$userId, $fullname, $email, $plan_name, $amount, $payment_method]
        );


        $_SESSION['paymentId'] = $db->lastInsertId();

        header("Location: /payment_success");
        exit();

    } else {
        echo "Invalid request method.";
    }

} catch (\Throwable $th) {
    echo "Error: " . htmlspecialchars($th->getMessage()) . " (Line " . $th->getLine() . ")";
}
