<?php

use Core\Database;
session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

$errors = [];

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];



    if (empty($email) || empty($password)) {
        $errors[] = 'Please fill in all fields.';
    }


    if (empty($errors)) {
        try {
            $stmt = $db->query('SELECT * FROM users WHERE email = :email', [':email' => $email]);
            $user = $stmt->fetch_one();

            if ($user && password_verify($password, $user['password'])) {

                $sessionToken = bin2hex(random_bytes(32));

                $db->query('UPDATE users SET session_token = ? WHERE id = ?', [
                    $sessionToken,
                    $user['id']
                ]);



                if ($user['id'] === 1 && $user['email'] === 'admin_padogskie@gmail.com') {
                    $_SESSION['admin'] = [
                        'logged_in' => true,
                        'role' => 'admin',
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'token' => $sessionToken
                    ];
                    header('Location: /adminDashboard');
                } else {
                    $_SESSION['user'] = [
                        'logged_in' => true,
                        'role' => 'user',
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'token' => $sessionToken
                    ];

                    header('Location: /userdashboard');
                }

                exit();

            } else {
                $errors[] = 'Invalid email or password.';
            }
        } catch (Throwable $th) {
            $errors[] = 'Database error: ' . $th->getMessage();
        }


    }

    // store errors and redirect back
    $_SESSION['errors'] = $errors;
    header('Location: /login');
    exit();
}
