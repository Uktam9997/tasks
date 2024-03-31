<?php

session_start();

if(empty($_POST['text'])) {
    $_SESSION['error'] = 'Пожалуйста ведите техт!';
    header("Location: /../task_13.php");
    exit;
}

$text = htmlspecialchars($_POST['text']);

$_SESSION['messenger'] = $text;
header("Location: /../task_13.php");
