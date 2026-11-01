<?php
$daftar_mahasiswa = [
    "Nasywa",
    "Sabrina",
    "Kisi",
    "Madana",
    "Dea",
];
 
echo "<h3>Daftar Nama Mahasiswa</h3>";
echo "<ul>";
 
foreach($daftar_mahasiswa as $mahasiswa){
    echo "<li>$mahasiswa</li>";
}
 
echo "</ul>";
 
?>