<?php
 include("connect.php");

 if (isset($_POST['tambah'])) {
    
    $drugname = $_POST['drugname'];
    $unit = $_POST['unit'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO drugs (drugs_name, unit, amount) VALUES ('$drugname', '$unit',$amount)";
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