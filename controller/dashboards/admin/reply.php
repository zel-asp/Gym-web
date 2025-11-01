<?php

use Core\Database;



$config = require base_path('config/config.php');
$db = new Database($config['database']);


if (!isset($_SESSION['admin'])) {
    abort(401);
    header('Location: /login');
    exit();
}

$feedbackId = $_POST['feedbackId'];
$reply = $_POST['reply_message'];

$deleteError = [];
$feedbackDeleted = [];

try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($_SESSION['admin']) {
            $db->query('UPDATE feedback SET admin_reply = ? WHERE id=?', [
                $reply,
                $feedbackId,
            ]);

            $success[] = 'Replied Successfully';

            $_SESSION['$feedbackDeleted'] = $feedbackDeleted;

            header('Location: /adminDashboard?tab=feedback');
        }

        $deleteError[] = 'Error: Try again';

        $_SESSION['deleteError'] = $deleteError;

    }

} catch (\Throwable $th) {
    echo "Error: " . htmlspecialchars($th->getMessage()) . " (Line " . $th->getLine() . ")";
}

