<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b; // diperbaiki: sebelumnya pakai +, harusnya -
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Penjumlahan a + b = {$hasilTambah} <br>";
echo "Hasil Pengurangan a - b = {$hasilKurang} <br>";
echo "Hasil Perkalian a * b = {$hasilKali} <br>";
echo "Hasil Pembagian a / b = {$hasilBagi} <br>";
echo "Sisa Hasil Bagi a % b = {$sisaBagi} <br>";
echo "Hasil Pangkat a ** b = {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<b>Operasi Perbandingan:</b><br>";
echo "Apakah a == b ? " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah a != b ? " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah a < b ? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah a > b ? " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah a <= b ? " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah a >= b ? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<b>Operasi Logika:</b><br>";
echo "a && b (AND) = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "a || b (OR) = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!a (NOT a) = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "!b (NOT b) = " . ($hasilNotB ? 'true' : 'false') . "<br><br>";

$a1 = 10; $a1 += $b;
$a2 = 10; $a2 -= $b;
$a3 = 10; $a3 *= $b;
$a4 = 10; $a4 /= $b;
$a5 = 10; $a5 %= $b;

echo "<b>Operasi Penugasan:</b><br>";
echo "a += b → {$a1} <br>";
echo "a -= b → {$a2} <br>";
echo "a *= b → {$a3} <br>";
echo "a /= b → {$a4} <br>";
echo "a %= b → {$a5} <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<b>Operasi Identitas:</b><br>";
echo "Apakah a === b ? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a !== b ? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br><br>";

$totalRak = 120;
$rakTerisi = 85;

$rakKosong = $totalRak - $rakTerisi;

$persentaseKosong = ($rakKosong / $totalRak) * 100;

echo "Total Rak Buku: {$totalRak} <br>";
echo "Rak Terisi: {$rakTerisi} <br>";
echo "Rak Kosong: {$rakKosong} <br>";
echo "Persentase Rak Kosong: " . number_format($persentaseKosong, 2) . "%";

?>
