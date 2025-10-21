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
    $payment_id = $_POST['payment_id'] ?? null;
    $status = $_POST['status'] ?? null;

    if ($payment_id && $status) {
        // Determine membership_status based on status
        if ($status === 'Pending') {
            $membership_status = 'Pending';
        } elseif ($status === 'Expired') {
            $membership_status = 'Expired';
        } else {
            $membership_status = 'Active';
        }

        try {
            $db->query("
                UPDATE payments
                SET status = ?, membership_status = ?
                WHERE id = ?
            ", [$status, $membership_status, $payment_id]);

            // Redirect back to the admin dashboard (keep the same tab)
            header('Location: /adminDashboard?tab=members');
            exit();
        } catch (\Throwable $th) {
            echo "Error: " . $th->getMessage();
        }
    } else {
        echo "Invalid request data.";
    }
}
