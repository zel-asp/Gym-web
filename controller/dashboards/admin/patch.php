<?php

use Core\Database;



$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['admin'])) {
    abort(401);
    header('Location: /login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_id = $_POST['payment_id'] ?? null;
    $status = $_POST['status'] ?? null;

    if ($payment_id && $status) {
        // Determine membership_status based on status
        if ($status === 'Pending') {
            $membership_status = 'Pending';
            $daysValid = 15; // optional: set Pending validity
        } elseif ($status === 'Expired') {
            $membership_status = 'Expired';
            $daysValid = 0;
        } else {
            $membership_status = 'Active';
            $daysValid = match ($status) {
                'Basic' => 15,
                'Regular' => 30,
                'Premium' => 90,
                default => 0
            };
        }

        try {
            // Fetch the original payment_date
            $paymentInfo = $db->query("SELECT payment_date FROM payments WHERE id = ?", [$payment_id])->fetch_one();

            $expiration_date = null;
            if ($paymentInfo && $daysValid > 0) {
                $paymentDate = new DateTime($paymentInfo['payment_date']);
                $expiration_date = $paymentDate->modify("+{$daysValid} days")->format('Y-m-d');
            }

            // Update payments table
            $db->query("
                UPDATE payments
                SET status = ?, membership_status = ?, expiration_date = ?
                WHERE id = ?
            ", [$status, $membership_status, $expiration_date, $payment_id]);

            // Redirect back to the admin dashboard (keep the same tab)
            header('Location: /adminDashboard?tab=payments');
            exit();
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    } else {
        echo "Invalid request data.";
    }
}
