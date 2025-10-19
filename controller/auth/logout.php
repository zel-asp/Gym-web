<?php
session_start();
use Core\Database;

$config = require base_path('config/config.php');

$db = new Database($config['database']);

if (isset($_SESSION['user'])) {

    $db->query('UPDATE users SET session_token = NULL WHERE id = ?', [$_SESSION['user']['id']]);

    session_unset();

    session_destroy();

}

// Optional: remove the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

header('Location: /login');
exit;
