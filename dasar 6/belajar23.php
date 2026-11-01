<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul 2 - PHP Dasar",
        "penulis" => "Qonit sabrina A"
    ],
    [
        "judul" => "Modul 3 - PHP Lanjutan",
        "penulis" => "Qonit sabrina A"
    ],
    [
        "judul" => "Modul 4 - PHP Framework",
        "penulis" => "Qonit sabrina A"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>