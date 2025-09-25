<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf d";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += $tanamanPerLahan * $buahPerTanaman;
}

echo "jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai $nilai: (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai $nilai: (Lulus) <br>";
}

$nilaiSiswa = [80, 95, 67, 72, 88, 91, 76, 84, 69, 93, 78, 85];

sort($nilaiSiswa);

$nilaiSisa = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

$totalNilai = array_sum($nilaiSisa);
$rataRata = $totalNilai / count($nilaiSisa);

echo "Total nilai setelah membuang 2 nilai tertinggi dan 2 terendah adalah: $totalNilai <br>";
echo "Rata-rata nilai kelas adalah: $rataRata";

$harga = 250000;
$diskon = 0;

if ($harga > 200000) {
    $diskon = 0.15 * $harga;
}

$totalBayar = $harga - $diskon;

echo "Harga awal: Rp $harga <br>";
echo "Diskon: Rp $diskon <br>";
echo "Total yang harus dibayar: Rp $totalBayar";

$jarakHarian = [10, 12, 8, 15, 9, 14, 11, 13, 10];

$totalJarak = array_sum($jarakHarian);

$bonus = ($totalJarak > 100) ? "YA" : "TIDAK";

echo "Total jarak tempuh atlet adalah: $totalJarak km <br>";
echo "Apakah atlet mendapatkan bonus latihan? $bonus";

?>