<?php

print "<h2>Belajar Pemrograman PHP untuk Pemula</h2>";
print "<h2>Cara Menggunakan Perulangan di PHP</h2>";
print "<h2>Memahami Struktur Kondisi IF di PHP</h2>";
print "<h2>Memahami Perulangan di PHP</h2>";
print "<h2>Prosedur dan Fungsi di PHP</h2>";

for ($i = 0; $i < 10; $i++){
    // blok kode yang akan diulang di sini!
}

for($i = 0; $i < 10; $i++){
    print "<h2>Ini perulangan ke-$i</h2>";
}

$i = 0;

while ($i < 10){
    // blok kode yang akan diulang di sini
    $i++;
}

$ulangi = 0;

while($ulangi < 10){
    print "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

$ulangi = 0;

do {
    // blok kode yang akan diulang
    $ulangi++;
} while ($ulangi < 10);

$ulangi = 10;

do {
    print "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

foreach($books as $data){
    print $data;
}

print "<h5>Judul Buku PHP:</h5>";
print "<ul>";

foreach($books as $buku){
    print "<li>$buku</li>";
}

print "</ul>";

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        print "Ini perulangan ke ($i, $j)<br>";
    }
}

$i = 0;

while($i < 10){
    for($j = 0; $j < 10; $j++){
        print "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}

?>