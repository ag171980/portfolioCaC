<?php session_start();
session_destroy();
header("location: acciones/login.php");
die();
