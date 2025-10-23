<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);


if (!isset($_SESSION['admin'])) {
    abort(401);
    header('Location: /login');
    exit();
}

$feedbackId = $_POST['feedbackId'];
$reply = $_POST['reply_message'];

$errors = [];
$success = [];

try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($_SESSION['admin']) {
            $db->query('UPDATE feedback SET admin_reply = ? WHERE id=?', [
                $reply,
                $feedbackId,
            ]);

            $success[] = 'Replied Successfully';

            $_SESSION['success'] = $success;

            header('Location: /adminDashboard?tab=feedback');
        }

        $errors[] = 'Error: Try again';

        $_SESSION['success'] = $errors;

    }

} catch (\Throwable $th) {
    echo "Error: " . htmlspecialchars($th->getMessage()) . " (Line " . $th->getLine() . ")";
}

