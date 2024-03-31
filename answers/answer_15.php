<?php

session_start();

// 15 и 16 задания присойденил!!!

if(empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['error'] = 'Пожалуйста заполните все поля!';
    header('Location: /../task_15.php');
    exit;
}

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");

$sql = "SELECT * FROM users_task_12 WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(empty($user)) {
    $_SESSION['error'] = 'Не правилно логин или пароль';
    header("Location: /../task_15.php");
    exit;
}

if(!password_verify($password, $user['password'])) {
    $_SESSION['error'] = 'Не правилно логин или пароль';
    header("Location: /../task_15.php");
    exit;
}

$_SESSION['user'] = ['id' => $user['id'],'email' => $user['email']];
header("Location: /../task_16.php");
exit;

