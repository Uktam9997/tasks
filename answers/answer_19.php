<?php

session_start();



if(isset($_FILES['image'])) {
    $count_img = count($_FILES['image']['name']);
    
    for($i = 0; $i < $count_img; $i++) {
        $img_extension = pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
        $fileTmpName = $_FILES['image']['tmp_name'][$i];
        $name_img = uniqid() . "." . $img_extension;
        $path_img = 'uploads/' . $name_img;

        if(move_uploaded_file($fileTmpName, $path_img)) {
            $pdo = new PDO("mysql:host=localhost;dbname=task;", "root", "");
            $sql = "INSERT INTO img_task_19 (path) VALUES (:path)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['path' => $path_img]);

            $_SESSION['messenger'] = "Файл  успешно загружен.";
            header('Location: /../task_19.php');
        } else {
            $_SESSION['error'] = "Ошибка при загрузке файла .";
            header('Location: /../task_19.php');
        }
    }
} else {
    $_SESSION['error'] = "Ни один файл не был загружен.";
    header('Location: /../task_19.php');
}


