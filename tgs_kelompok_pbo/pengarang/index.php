<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengarang</title>
</head>
<body>
    <h1 style="text-align: center;">Form Pengarang</h1>
    <p style="text-align:center;">Silahkan isi data pengarang dengan benar!</p>

    <div class="container" align="center">
        <form action="proses-tambah-pengarang.php" method="post">
            <table>
                <tr>
                    <td>ID Pengarang</td>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <td>Nama Pengarang</td>
                    <td><input type="text" name="nama_pengarang" required></td>
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
    <td><button align="center"><a href="../petugas/index.php">Petugas</a></button></td>
    </center>
    <br>
    <center>
        <td><button align="center"><a href="tb_pengarang.php">Tampilan Pengarang</a></button></td>
    </center>
</body>
</html>