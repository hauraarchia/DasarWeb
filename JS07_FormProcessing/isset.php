<?php
$umur = 20;
if(isset($umur) && $umur >= 18){
    echo "Anda sudah dewasa. <br>";
}else{
    echo "Anda belum dewasa atau variable 'umur' tidak ditemukan <br>" ;
}$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else{
    echo "Variable 'nama' tidak ditemukan dalam array";
}