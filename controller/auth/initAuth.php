<?php

use Core\Database;

$config = require base_path('config/config.php');

$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    view_path('home', 'index.php');
    die();
}

view_path('auth', 'login-signup.php');