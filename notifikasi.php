<?php
    $set1 = mysqli_query($con, "select * from register");
    $set2 = mysqli_query($con, "select * from laporan_bulanan");
    $set3 = mysqli_query($con, "select * from pinjaman");
    $set4 = mysqli_query($con, "select * from mitra");
    $set5 = mysqli_query($con, "select * from rekues_kelas");
    $set6 = mysqli_query($con, "select * from hasil_quiz");

    $nilai1 = mysqli_num_rows($set1);
    $nilai2 = mysqli_num_rows($set2);
    $nilai3 = mysqli_num_rows($set3);
    $nilai4 = mysqli_num_rows($set4);
    $nilai5 = mysqli_num_rows($set5);
    $nilai6 = mysqli_num_rows($set6);
?>

