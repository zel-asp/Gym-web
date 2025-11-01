<?php

use Core\Database;



$config = require base_path('config/config.php');

$db = new Database($config['database']);

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit();
}

try {

    if (isset($_POST['update'])) {
        $errors = [];

        $fullname = trim($_POST['fullname']);
        $age = (int) $_POST['age'];
        $gender = trim($_POST['gender']);
        $contact = trim($_POST['contact']);
        $address = trim($_POST['address']);
        $email = trim($_POST['email']);
        $height = (int) $_POST['height'];
        $weight = (int) $_POST['weight'];
        $medical_conditions = trim($_POST['medical_conditions']);
        $userId = $_SESSION['user']['id'];

        if (!$userId) {
            $errors[] = "Invalid user session.";
        }

        if (empty($fullname))
            $errors[] = "Full Name is required.";
        if ($age < 18 || $age > 100)
            $errors[] = "Age must be between 18 and 100.";
        if ($gender !== 'Male' && $gender !== 'Female')
            $errors[] = "Please select a valid gender.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = "Invalid email address.";
        if ($height < 50 || $height > 250)
            $errors[] = "Height must be between 50cm and 250cm.";
        if ($weight < 20 || $weight > 300)
            $errors[] = "Weight must be between 20kg and 300kg.";

        if (!empty($errors)) {
            $_SESSION['error'] = $errors;
            header('Location: /userdashboard?tab=membership');
            exit();
        }

        $db->query("UPDATE user_profiles
        SET fullname = ?, age = ?, gender = ?, contact = ?, address = ?, email = ?, height = ?, weight = ?, medical_conditions = ?
        WHERE user_id = ?", [
            $fullname,
            $age,
            $gender,
            $contact,
            $address,
            $email,
            $height,
            $weight,
            $medical_conditions,
            $userId
        ]);

        $_SESSION['successful'] = ["Profile successfully updated!"];
        header('Location: /userdashboard?tab=membership');
        exit();
    }


} catch (\Throwable $th) {
    echo $th->getMessage() . ' ' . $th->getLine() . ' ' . $th->getFile();
}