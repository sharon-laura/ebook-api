<?php

include("../src/connect.php");


if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM drugs WHERE id=$id";
$query = mysqli_query($db, $sql);
$drug = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Obat</title>
</head>
<body>
    <header>
        <h3>Form Edit Data</h3>
    </header>
    <form action="../src/update-data.php" method="post">
        <fieldset>
        <p>
            
            <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    echo("<p>Merubah Data ID: </p>".$id);
                }else{
                    header('Location: ../public/index.php?status=gagal');
                }
            ?>
        </p>
        <p hidden>
            <label for="id">id: </label>
            <input type="text" name="id" placeholder="Nama obat" value="<?php echo($drug["id"]);?>">

        </p>
        <p>
            <label for="drugname">Nama Obat: </label>
            <input type="text" name="drugname" placeholder="Nama obat" value="<?php echo($drug["drugs_name"]);?>">

        </p>
        <p>
            <label for="unit">Satuan: </label>
            <input type="text" name="unit" placeholder="Satuan obat" value="<?php echo($drug["unit"]);?>">

        </p>
        <p>
            <label for="amount">Jumlah Obat: </label>
            <input type="text" name="amount" placeholder="Jumlah obat" value="<?php echo($drug["amount"]);?>">

        </p>
        <p>
            <input type="submit" value="Edit Data" name="tambah">
        </p>
        </fieldset>
    </form>
</body>
</html>