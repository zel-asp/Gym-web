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
$paymentId = $_SESSION['paymentId'];

try {
    if (isset($_POST['cancel'])) {
        if ($userId) {
            $db->query('DELETE FROM payments WHERE id = ? AND user_id = ?', [$paymentId, $userId]);

            header('Location: /userdashboard?tab=payment');
            exit();
        } else {
            echo "No payment ID provided.";
        }
    }

} catch (\Throwable $th) {
    //throw $th;
}

