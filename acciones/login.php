<?php
include '../conexion.php';
session_start();
$conexion = new conexion();
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$emails = $conexion->consultar("SELECT * FROM usuario WHERE email_usuario = '$email'");
// echo "count emails: " . count($emails);
// echo "email: " . $emails[0]['email_usuario'];
if (count($emails) == 1 && $emails[0]['email_usuario'] == $email && $emails[0]['pwd_usuario'] == $pwd) {
    $_SESSION['usuario'] = "Admin";
    $_SESSION['logueado'] = 'S';
    // header("Location: ../index_admin.php");
    echo "<script>window.location.href='../index_admin.php'</script>";
    die();
} else {
    echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
    echo "<script>window.location.href='../index.php'</script>";
    die();
}
