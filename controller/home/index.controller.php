<?php

use Core\Database;

$config = require base_path('config/config.php');

$db = new Database($config['database']);

//infos
$info = $db->query('SELECT * FROM admininfo WHERE id = ?', [1])->fetch_one();

//plan
$plan = $db->query('SELECT * FROM membershipplans WHERE id = ?', [1])->fetch_one();


view_path('home', 'index.php', [
    'info' => $info,
    'plan' => $plan
]);
