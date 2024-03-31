<?php 

session_start();

if(empty($_POST['text'])){
    header('Location: /../task_10.php');
    exit;
}

$text = htmlspecialchars($_POST['text']);

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");
$sql = "INSERT INTO task_10 (text) VALUE (:text)";

$stmt = $pdo->prepare($sql);
$stmt->execute(['text' => $text]);

header('Location: /../task_10.php');
