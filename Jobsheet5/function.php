<?php

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan nama saya ".$nama. "<br/>";
    echo "Senang berkenalan dengan anda<br/><br/>";
}

perkenalan("Fadhil Sayahidan", "Hallo");

echo "<hr>";

$saya = "Fadhil Syahidan";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>