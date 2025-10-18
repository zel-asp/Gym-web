<?php
// return [
//     '/' => 'controller/home/index.controller.php',
//     '/login' => 'controller/auth/initAuth.controller.php',
// ];

$router->get('/', 'controller/home/index.controller.php');
$router->post('/login', 'controller/auth/initAuth.php');
$router->get('/Team', 'controller/home/team.controller.php');
$router->get('/gallery', 'controller/home/fullGallery.controller.php');
$router->get('/userdashboard', 'controller/dashboards/user.php');