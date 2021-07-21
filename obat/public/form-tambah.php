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
        <h3>Form Tambah Data</h3>
    </header>
    <form action="../src/tambah-data.php" method="post">
        <fieldset>
        <p>
            <label for="drugname">Nama Obat: </label>
            <input type="text" name="drugname" placeholder="Nama obat">

        </p>
        <p>
            <label for="unit">Satuan: </label>
            <input type="text" name="unit" placeholder="Satuan obat">

        </p>
        <p>
            <label for="amount">Jumlah Obat: </label>
            <input type="text" name="amount" placeholder="Jumlah obat">

        </p>
        <p>
            <input type="submit" value="Tambah Data" name="tambah">
        </p>
        </fieldset>
    </form>
</body>
</html>