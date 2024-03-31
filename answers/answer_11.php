<?php

session_start();

if(empty($_POST['text'])){
    $_SESSION['messenger'] = 'Пожолюста ведите техт!';
    header('Location: /../task_11.php');
    exit;
}
$text = htmlspecialchars($_POST['text']);

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");

$sql = "SELECT * FROM task_10 WHERE text=:text";
$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $text]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($result)){
    $_SESSION['danger'] = 'Веденная техт уже сушевствует! Пожолюста ведите другой техт.';
    header('Location: /../task_11.php');
    exit;
}
$sql = "INSERT INTO task_10 (text) VALUES (:text)";

$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $text]);

$_SESSION['success'] = 'Техт успешно отправленно!';
header('Location: /../task_11.php');

