<?php
// return [
//     '/' => 'controller/home/index.controller.php',
//     '/login' => 'controller/auth/initAuth.controller.php',
// ];

$router->get('/', 'controller/home/index.controller.php');
$router->get('/login', 'controller/auth/initAuth.controller.php');
$router->get('/Team', 'controller/home/team.controller.php');
$router->get('/gallery', 'controller/home/fullGallery.controller.php');