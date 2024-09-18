<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br>";

$siswa = 10;
$value = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($value);

$nilaiTertinggi1 = $value[0];
$nilaiTertinggi2 = $value[1];

$nilaiTerRendah1 = $value[count($value) - 1];
$nilaiTerRendah2 = $value[count($value) - 2];

$totalNilai = 0;
for ($i=0; $i < count($value); $i++) { 
    if($value[$i] != $nilaiTerRendah1 && $value[$i] != $nilaiTerRendah2 && $value[$i] != $nilaiTertinggi1 && $value[$i] != $nilaiTertinggi2){
        $totalNilai += $value[$i];
    }
}

$sisaSiswa = count($value) - 4;

$rataValue = $totalNilai / $sisaSiswa;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai setelah pengabaian: " . $rataValue . "<br>";

echo "<br>";

$produk = 120000;

if ($produk > 100000) {
   $diskon =  $produk * 0.2;
   $total = $produk - $diskon;
}

echo "Uang yang harus dibayarkan oleh pelanggan adalah RP. $total";

echo "<br><br>";

$totalPoin = 550;

$hadiahTambahan = ($totalPoin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $totalPoin\n";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan\n";

?>