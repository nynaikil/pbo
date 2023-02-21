<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $nama = $_POST['nama_pengarang'];  
    $notlp = $_POST['notlp'];

    $query = "INSERT INTO pengarang (id,nama_pengarang,notlp) VALUES ('$id','$nama','$notlp')"; 
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: index.php");
?>