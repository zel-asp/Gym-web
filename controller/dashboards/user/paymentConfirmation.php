<?php
use Core\Database;

session_start();

$config = require base_path('config/config.php');

$db = new Database($config['database']);

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}

$paymentId = $_SESSION['paymentId'];

$paymentInfo = $db->query('SELECT * FROM payments WHERE id = ?', [$paymentId])->fetch_one();

view_path('dashboards/user', 'paymentConfirmation.php', [
    'paymentInfo' => $paymentInfo
]);