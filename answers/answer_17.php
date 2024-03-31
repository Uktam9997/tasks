<?php

session_start();

//тут файль добавляется на бд из 17 и 18 задании!!!


if(empty($_FILES['image'])) {
    $_SESSION['error'] = 'Пожалуйста выберите файль';
    header('Location: /../task_17.php');
    exit;
}
if($_GET['page']) {
    $page = $_GET['page'];
}

function upload_file($file) {
    $result = pathinfo($file['name']);
    $file_name = uniqid() . "." . $result['extension'];
    $upload_path = 'uploads/' . $file_name;

    if (move_uploaded_file($file['tmp_name'], $upload_path)) {
        return $upload_path;
    } else {
        return false;
        
        exit;
    }
}

$path = upload_file($_FILES['image']);

if(!$path) {
    switch($page) {
        case 'task_17':
            $_SESSION['error'] = "Ошибка при перемещении файла.";
            header('Location: /../task_17.php');
            break;
        case 'task_18':
            $_SESSION['error'] = "Ошибка при перемещении файла.";
            header('Location: /../task_18.php');
    }
    exit;
}

$pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");
$sql = "INSERT INTO img_task_17 (path) VALUES (:path)";
$stmt = $pdo->prepare($sql);

if ($stmt->execute(['path' => $path])) {
    switch($page) {
        case 'task_17':
            $_SESSION['messenger'] =  "Файл успешно загружен";
            header('Location: /../task_17.php');
            break;
        case 'task_18':
            $_SESSION['messenger'] =  "Файл успешно загружен";
            header('Location: /../task_18.php');
    }
}

