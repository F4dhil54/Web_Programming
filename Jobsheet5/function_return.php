<?php

function hitungUmur($tgl_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $tgl_lahir;
    return $umur;
}

function perkenalan ($nama, $salam = " Assalamualikum"){
    echo $salam. ".<br>";
    echo " Perkenalkan, nama saya " .$nama.".<br/>";

    echo "Saya berusia " .hitungUmur(2006, 2025). "tahun <br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan("Fadhil Syahidan");

?>