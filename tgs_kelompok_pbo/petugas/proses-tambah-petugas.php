<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $nama_petugas = $_POST['nama_petugas']; 
    $notlp = $_POST['notlp'];

    $query = "INSERT INTO petugas (id,nama_petugas,notlp) VALUES ('$id','$nama_petugas','$notlp')"; 
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_petugas.php"); 

?>