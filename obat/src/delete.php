<?php
include("connect.php");

if( isset($_GET['id']) ){


    $id = $_GET['id'];


    $sql = "DELETE FROM drugs WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if( $query ){
        header('Location: ../public/index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>