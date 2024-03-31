<?php 

session_start();

if(empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['error'] = 'Заполните пожолюста все поля!';
    header('Location: /../task_12.php');
    exit;
}

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");

$sql = "SELECT * FROM users_task_12 WHERE email=:email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($user)) {
    $_SESSION['error'] = 'Это емаил уже зарегистрирован!';
    header('Location: /../task_12.php');
    exit;
}

$sql = "INSERT INTO users_task_12 (email, password) VALUES (:email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT)]);

$_SESSION['messenger'] = 'Вы успешно зарегистрировалис!';
header('Location: /../task_12.php');

