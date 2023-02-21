<?php
    include '../koneksi.php';
    $id = $_POST['id'];
    $judul = $_POST['judul_buku'];
    $jenis = $_POST['jenis_buku'];

    $query = "INSERT INTO buku (id,jdl_bk,js_bk) VALUES ('$id','$judul','$jenis')"; 
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: index.php");
?>