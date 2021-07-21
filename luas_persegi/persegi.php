<html>
<head>
    <title>Menghitung Luas Persegi</title>
</head>
<body>
    <h1>Hitung Luas Persegi( Laura Sharon_15) </h1>
    <h2>Masukan data yang akan dihitung:</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi</td>
                <td>:</td>
                <td><input type="text" name="sisi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $sisi  =$_POST['sisi'];
                        
            // menghitung luas persegi
            $luas_persegi = ($sisi*$sisi);
            
            echo "Maka luas persegi sama dengan= $luas_persegi";
        }
    ?>
</body>
</html>