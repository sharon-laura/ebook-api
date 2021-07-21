<?php
    function persegi($sisi){
        $luas = $sisi * $sisi;
        return $luas;

    }
    function segitiga($alas, $tinggi){
        $luas = $alas * $tinggi / 2;
        return $luas;
    }
    function persegiPanjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }
    function lingkaran($r){
        $luas = 3.14 * ($r * $r);
        return $luas;
    }
?>