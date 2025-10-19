<?php

use Core\Database;
session_start();

$config = require base_path('config/config.php');

$db = new Database($config['database']);

$errors = [];

if (isset($_POST['register'])) {

    //values from form
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['password_confirm'];
    $terms = isset($_POST['terms']) ? 1 : 0;
    $sessionToken = bin2hex(random_bytes(32));

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error[] = 'Please complete all the input field';
    }

    //validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Invalid Email';
    }

    if ($password !== $confirm_password) {
        $error[] = 'Password do t=not match';
    }

    //if they check the terms
    if (!$terms) {
        $error[] = 'You must accept the Terms and Conditions.';
    }

    if (empty($error)) {
        try {

            $stmt = $db->query('SELECT id FROM users WHERE email = :email OR username = :username', [
                ':email' => $email,
                'username' => $username
            ]);

            //check if the user is alrwady existed
            if ($stmt->count() > 0) {
                $errors[] = 'Username or email already exists.';
            } else {
                $hash_password = password_hash($password, PASSWORD_BCRYPT);

                $stmt = $db->query('INSERT INTO users (username, email, password, terms_accepted) VALUES (?, ?, ?, ?)', [
                    $username,
                    $email,
                    $hash_password,
                    $terms,
                ]);

                header('Location: /login');
                exit();

            }

            $_SESSION['errors'] = $errors;
            header('Location: /signup');
            exit();

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

}