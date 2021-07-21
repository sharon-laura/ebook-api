<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "obat";

    $db = mysqli_connect($server, $user, $password, $db_name);

    if (!$db) {
        die("Gagal terhubung kedatabase: ". mysqli_connect_error());
    }

?>