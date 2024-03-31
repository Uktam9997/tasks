<?php

session_start();

unset($_SESSION['number']);
$_SESSION['number'] = (int) $_SESSION['number'] + 0;
header('Location: /../task_14.php');
