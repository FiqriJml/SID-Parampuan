<?php
$root = "../../../";
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: '.$root.'login.php');
  exit();
} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Membuat Surat</title>
    <link href="<?=$root;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$root;?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$root;?>css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?=$root;?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?=$root;?>css/animate.css" rel="stylesheet">
    <link href="<?=$root;?>css/style.css" rel="stylesheet">
    <link href="<?=$root;?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <script src="<?=$root;?>ckeditor/ckeditor.js"></script>
    <!-- <link rel="icon" href="<?=$root;?>img/logo2.png" type="image/x-icon" /> -->
    <!-- VueJs -->
    <script src="<?=$root;?>js/vue.js"></script>
</head>