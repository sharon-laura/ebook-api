<?php 
    include("../src/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
</head>
<body>
    <h1>DASBOR OBAT</h1>
    <h2>Laura Sharon_XI RPL 1</h2>
    <a href="form-tambah.php">+ Tambah Obat</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Obat</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM drugs";
                $query = mysqli_query($db , $sql);

                while($drugs = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo( "<td>".$drugs['id']."</td>" );
                    echo( "<td>".$drugs['drugs_name']."</td>" );
                    echo( "<td>".$drugs['unit']."</td>" );
                    echo( "<td>".$drugs['amount']."</td>" );

                    echo( "<td>" );
                    echo( "<a href='form-edit.php?id=".$drugs["id"]."'> Edit </a>" );
                    echo(" | ");
                    echo( "<a href='../src/delete.php?id=".$drugs["id"]."'> Delete </a>" );
                    echo( "</td>" );
                }
            ?>
        </tbody>
    </table>
</body>
</html>