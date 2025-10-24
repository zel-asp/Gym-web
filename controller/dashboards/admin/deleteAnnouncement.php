<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $id = $_POST['id'];

        $db->query('DELETE FROM announcements WHERE id = ?', [$id]);

        header('Location: /adminDashboard?tab=announcement');
        exit();
    } catch (\Throwable $th) {
        echo "Error: " . htmlspecialchars($th->getMessage()) . " (Line " . $th->getLine() . ")";
    }
}
