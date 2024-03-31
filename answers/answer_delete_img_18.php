<?php

session_start();


$id = $_GET['id'];

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");

$sql = "SELECT * FROM img_task_17 WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$info_img = $stmt->fetch(PDO::FETCH_ASSOC);

$id_img = $info_img['id'];
$path_img = 'C:/xampp/htdocs/tasks/answers/' . $info_img['path'];

if (file_exists($path_img)) {
    unlink($path_img);
        $sql = "DELETE FROM img_task_17 WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id_img]);
    $_SESSION['messenger'] = "Файл успешно удален.";
    header("Location: /../task_18.php");
    exit;
} else {
    $_SESSION['error'] = "Файл не найден.";
    header("Location: /../task_18.php");
    exit;
}


