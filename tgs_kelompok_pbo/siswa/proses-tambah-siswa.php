<?php
    include '../koneksi.php';

    $id = $_POST['id']; //  <- ambil nama data yang dikirim dari index.php contoh tadi dinamai "id"
    $nama_siswa = $_POST['nama'];  //ambil semua data dan simpan pada sebuah variabel baru
    $kelas = $_POST['kelas'];
    $notlp = $_POST['notlp'];

                        //nama tabel  //kolom                   //nilai(diambil dari variabel diatas)
    $query = "INSERT INTO siswa (id,nama_siswa,kelas,notlp) VALUES ('$id','$nama_siswa','$kelas','$notlp')"; //isi sesuai tabel dan nilai yang akan diisi
	$hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));

    header("Location: tb_siswa.php"); //kembali kehalaman index.php, jika berhasil maka data akan bertambah

?>