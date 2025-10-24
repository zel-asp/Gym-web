<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $title = trim($_POST['title']);
        $details = trim($_POST['details']);

        $db->query('INSERT INTO announcements (title, details) VALUES (?, ?)', [
            $title,
            $details
        ]);


        header('Location: /adminDashboard?tab=announcement');
        exit();
    } catch (\Throwable $th) {
        echo "Error: " . htmlspecialchars($th->getMessage()) . " (Line " . $th->getLine() . ")";
    }
}

