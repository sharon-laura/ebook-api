<?php
 include("connect.php");

 if (isset($_POST['tambah'])) {
    
    $id = $_POST['id'];
    $drugname = $_POST['drugname'];
    $unit = $_POST['unit'];
    $amount = $_POST['amount'];

    $sql = "UPDATE drugs SET  drugs_name='$drugname', unit='$unit', amount=$amount WHERE id = $id";
    $query = mysqli_query($db,$sql);

    if ($query) {
        header('Location: ../public/index.php?status=sukses');

    }else{
        header('Location: ../public/index.php?status=gagal');
    }
 }else{
     die("Akses dilarang");
 }

?>