<?php
    include '../koneksi.php';
    $id = $_POST['id']; 
    $nama_siswa = $_POST['nama']; 
    $kelas = $_POST['kelas'];
    $notlp = $_POST['notlp'];

    $query = "UPDATE siswa  SET id ='$id', nama_siswa ='$nama_siswa', kelas ='$kelas', notlp ='$notlp'  WHERE id='$id'"; //isi sesuai tabel dan nilai yang akan diisi
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_siswa.php"); 
?>