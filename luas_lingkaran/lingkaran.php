<html>
<head>
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran ( Laura Sharon_15) </h1>
    <h2>Masukan jari jari lingkaran yang akan dihitung:</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Jari-jari Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="jari" required></td>
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
            $jari   =$_POST['jari'];
            $phie    =22/7;
            
            // menghitung luas lingkaran
            $luas_lingkaran = $phie*($jari*$jari);
            
            echo "Maka luas lingkaran sama dengan= $luas_lingkaran";
        }
    ?>
</body>
</html>