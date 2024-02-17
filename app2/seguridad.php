<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$roll = isset($_SESSION['roll']) ? $_SESSION['roll'] : '';

if ($user == "admin"){
    echo "Bienvenido $user";
    echo "<br>Eres un $roll";
} else {
    header("Location: login.php");
}