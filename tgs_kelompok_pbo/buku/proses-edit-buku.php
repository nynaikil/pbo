<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $jdl = $_POST['judul_buku']; 
    $jns = $_POST['jenis_buku'];

    $query = "UPDATE buku  SET id ='$id', jdl_bk ='$jdl', js_bk ='$jns'  WHERE id='$id'";
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_buku.php"); 
?>