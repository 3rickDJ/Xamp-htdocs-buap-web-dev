<?php
session_start();
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
// echo "Usuario: $user <br>";
// echo "Password: $pass <br>";
if($user == 'root' && $pass == 'root'){
    echo "Bienvenido $user";
    $_SESSION['user'] = $user;
    $_SESSION['roll'] = "admin";
    header("Location: index.php");
}else{
    echo "Usuario o contraseña incorrectos";
    header("Location: login.php");
}