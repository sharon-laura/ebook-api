<html>
<head>
	<title>Luas Segitiga</title>
</head>
<body>
    <h1>Hitung Luas Segitiga ( Laura Sharon_15) </h1>
    <h2>Masukan data yang akan dihitung:</h2>
	<form method="post" action="luassegitiga.php" >
		<table> 
			<tr>
				<td>Alas</td><td>:</td><td><input type="text" name="alas"/></td>
			</tr><tr>
		<td>Tinggi</td><td>:</td><td><input type="text" name="tinggi"/></td>
			</tr><tr>
				<td><input type="submit" name="submit" value="hasil" /></td>
        </tr>
    	</table>
    </form>
<?php
if($_POST['submit']){
$alas = $_POST['alas']; 
$tinggi = $_POST['tinggi']; 

  $hasil = ($alas * $tinggi)/2 ;
  echo "Alas" .$alas; 
  echo "</br> Tinggi " .$tinggi; 
  echo "</br> Jadi Alas dikali tinggi bagi 2 adalah ".$hasil; 
}
?>
</body>
</html>