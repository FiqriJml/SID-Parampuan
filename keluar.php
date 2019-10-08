<?php
session_start(); //memulai session
unset($_SESSION['adminindonesia']);
header('location: login.php');
session_destroy();
?>
