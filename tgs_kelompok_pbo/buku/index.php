<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="text-align: center;">Form Buku</h1>
    <p style="text-align:center;">Silahkan Isi Data Buku Dengan Benar!</p>

    <div class="container" align="center">
        <form action="proses-tambah-buku.php" method="post">
            <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="id" required></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" required></td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td><input type="text" name="jenis_buku" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Kirim">
                    <input type="reset" value="reset">
                </td>
            </tr>
            </table>
        </form>
    </div>
    <br>
    <center>
    <td><button><a href="../siswa/index.php">Siswa</a></button></td>
    <td><button><a href="../petugas/index.php">Petugas</a></button></td>
    <td><button><a href="../pengarang/index.php">Pengarang</a></button></td>
    </center>
    <br>
    <center>
        <td><button align="center"><a href="tb_buku.php">Tampilan Buku</a></button></td>
    </center>
</body>
</html>