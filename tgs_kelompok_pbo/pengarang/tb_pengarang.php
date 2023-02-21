<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="witdh=device-witdh,initial-scale=1.0">
    <title>Tabel Pengarang</title>
</heand>
<body>
    <h1 style="text-align: center;">Data Petugas</h1>
    <div class="card mb-4">
        <div class="card-header">
    </div>
    <div class="card-body">
        <table id="datatableSimple"align="center"border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pengarang</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../koneksi.php';

                $query="SELECT * FROM pengarang";

                $hasil_mysql = mysqli_query($koneksi,$query)or die (mysqli_error($koneksi));


                while( $baris = mysqli_fetch_row($hasil_mysql))
                {
                    ?>
                    <tr>
                        <td><?=$baris[0]?></td>
                        <td><?=$baris[1]?></td>
                        <td><?=$baris[2]?></td>
                        <td>
                            <a href="edit-pengarang.php?id=<?=$baris[0]?>" class="btn btn-primary btn-sm"><i class="fa fa-edit">edit</i></a>
                            <a href="delete-pengarang.php?id=<?=$baris[0]?>" class="btn btn-danger btn-sm"><i class="fas fa-trash">delete</i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <center>
        <button align="center"><a href="index.php">Form Pengarang</a></button>
    </center>

</body>
</html>
    






