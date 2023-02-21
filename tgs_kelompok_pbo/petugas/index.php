<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Petugas</title>
</head>
<body>
    <h1 style="text-align: center;">Form Petugas</h1>
    <p style="text-align:center;">Silahkan isi data petugas dengan benar!</p>

    <div class="container" align="center">
        <form action="proses-tambah-petugas.php" method="post">
            <table>
                <tr>
                    <td>ID Petugas</td>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <td>Nama Petugas</td>
                    <td><input type="text" name="nama_petugas" required></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><input type="text" name="notlp" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Kirim">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <center>
        <td><button align="center"><a href="../siswa/index.php">Siswa</a></button></td>
        <td><button align="center"><a href="../buku/index.php">Buku</a></button></td>
        <td><button align="center"><a href="../pengarang/index.php">Pengarang</a></button></td>
    </center>
    <br>
    <center>
        <td><button align="center"><a href="tb_siswa.php">Tampilan Siswa</a></button></td>
    </center>
</body>
</html>