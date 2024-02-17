<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$roll = isset($_SESSION['roll']) ? $_SESSION['roll'] : '';

if ($roll != "admin"){
    header("Location: login.php");
}