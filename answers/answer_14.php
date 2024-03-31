<?php

session_start();

$_SESSION['number'] = (int) $_SESSION['number'] + 1;

header('Location: /../task_14.php');