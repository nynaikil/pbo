<?php
    include '../koneksi.php';
    $id=$_GET["id"];
    
    $query = "SELECT * FROM pengarang WHERE id like $id";
    $hasil_mysql = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengarang</title>
</head>
<body>
<h1 style="text-align: center;">Edit Pengarang</h1>
    <p style="text-align:center;">Silakan isi form berikut dengan benar</p>

    <div class="container" align="center">
    <?php                              
    while( $baris = mysqli_fetch_row($hasil_mysql))
        {
            ?>
        <form action="proses-edit-pengarang.php" method="post">
            <table>
                <tr>
                    <td>ID Pengarang</td>
                    <td><input type="text" name="id" value="<?=$baris[0] ?>" required></td>
                </tr>
                <tr>
                    <td>Nama Pengarang</td>
                    <td><input type="text" name="nama_pengarang" value="<?=$baris[1] ?>" required></td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>
                        <input type="text" name="notlp" value="<?=$baris[2] ?>" required>
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
        <?php
        }
        ?>
    </div>
    <br>
</body>
</html>