<?php
    include '../koneksi.php';
    $id=$_GET["id"];

    $query = "DELETE FROM buku WHERE id like $id";
    $hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_buku.php");
?>