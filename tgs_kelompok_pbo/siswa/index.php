<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
</head>
<body>
    <h1 style="text-align: center;">Form Siswa</h1>
    <p style="text-align:center;">Silakan isi form berikut dengan benar</p>

    <div class="container" align="center">
        <form action="proses-tambah-siswa.php" method="post">
            <table>
                <tr>
                    <td>ID Siswa</td>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>
                        <select name="kelas" id="kelas">
                            <option value="xii_rpl_a">XII RPL A</option>
                            <option value="xii_rpl_b">XII RPL B</option>
                            <option value="xii_rpl_c">XII RPL C</option>
                            <option value="xii_elind_a">XII ELIND A</option>
                            <option value="xii_elind_b">XII ELIND B</option>
                            <option value="xii_elind_c">XII ELIND C</option>
                            <option value="xii_meka_a">XII MEKA A</option>
                            <option value="xii_meka_b">XII MEKA B</option>
                            <option value="xii_meka_c">XII MEKA C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>
                        <input type="text" name="notlp" required>
                    </td>
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
        <td><button align="center"><a href="../petugas/index.php">Petugas</a></button></td>
        <td><button align="center"><a href="../buku/index.php">Buku</a></button></td>
        <td><button align="center"><a href="../pengarang/index.php">Pengarang</a></button></td>
    </center>
    <br>
    <center>
        <td><button align="center"><a href="tb_siswa.php">Tampilan Siswa</a></button></td>
    </center>
</body>
</html>