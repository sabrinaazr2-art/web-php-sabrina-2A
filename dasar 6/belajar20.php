<?php
// membuat array kosong
$mahasiswa = array();
$kelas = [];
 
// membuat array sekaligus mengisinya
$mahasiswa = array("Sabrina", "Madana", "Kisi", "Nasywa");
$kelas = [1, 2, 3, 4];
 
// membuat array dengan mengisi indeks tertentu
$mahasiswa[0] = "Sabrina";
$mahasiswa[1] = "Madana";
$mahasiswa[2] = "Kisi";
$mahasiswa[3] = "Nasywa";
 
var_dump($mahasiswa);
echo "<br>";
var_dump($kelas);
 
?>