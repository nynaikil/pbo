<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $nama_pengarang = $_POST['nama_pengarang']; 
    $notlp = $_POST['notlp'];

    $query = "UPDATE pengarang  SET id ='$id', nama_pengarang ='$nama_pengarang', notlp ='$notlp'  WHERE id='$id'";
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_pengarang.php"); 
?>