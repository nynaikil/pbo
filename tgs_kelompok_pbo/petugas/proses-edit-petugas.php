<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $nama_petugas = $_POST['nama_petugas']; 
    $notlp = $_POST['notlp'];

    $query = "UPDATE petugas  SET id ='$id', nama_petugas ='$nama_petugas', notlp ='$notlp'  WHERE id='$id'"; //isi sesuai tabel dan nilai yang akan diisi
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_petugas.php"); 
?>