<?php


$produk1 = "Modem";
$produk2 = "Hardisk";
$produk3 = "Flash disk";

print "$produk1<br>";
print "$produk2<br>";
print "$produk3<br>";

print "<hr>";


// Membuat array kosong
$buah = array();
$hobi = [];

// Membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// Membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

// Array dengan berbagai tipe data
$item = ["Bunga", 123, 39.12, true];

print "<hr>";


// Membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// Menampilkan isi array secara manual
print $barang[0]."<br>";
print $barang[1]."<br>";
print $barang[2]."<br>";

print "<hr>";

// Menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    print $barang[$i]."<br>";
}

print "<hr>";

// Menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    print $isi."<br>";
}

print "<hr>";

// Menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    print $barang[$i]."<br>";
    $i++;
}

print "<hr>";


$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// Menghapus kucing (indeks ke-1)
unset($hewan[1]);

print $hewan[0]."<br>";
if(isset($hewan[1])){
    print $hewan[1]."<br>";
}
print $hewan[2]."<br>";

print "<hr>";

print "<pre>";
print_r($hewan);
print "</pre>";

print "<hr>";


// Menambahkan isi array
$hobi_saya = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// Menambahkan isi pada indeks ke-3
$hobi_saya[3] = "Coding";

// Menambahkan isi pada indeks terakhir
$hobi_saya[] = "Olahraga";

// Cetak array dengan perulangan foreach
foreach($hobi_saya as $hobiku){
    print $hobiku."<br>";
}

print "<hr>";

// Menindih isi array
$user = [
    "dian",
    "muhar",
    "petanikode"
];

// Mengisi array pada indeks ke-1 ("muhar" diganti "ardianta")
$user[1] = "ardianta";

// Mencetak isi array
print "<pre>";
print_r($user);
print "</pre>";

print "<hr>";


// Membuat array asosiatif dengan operator =>
$artikel_single = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128
];

// Mencetak isi array asosiatif
print "<h2>".$artikel_single["judul"]."</h2>";
print "<p>oleh: ".$artikel_single["penulis"]."</p>";
print "<p>View: ".$artikel_single["view"]."</p>";

print "<hr>";

// Menentukan key secara langsung
$email["subjek"] = "Apa Kabar?";
$email["pengirim"] = "dian@petanikode.com";
$email["isi"] = "Apa kabar? sudah lama tidak berjumpa";

print "<pre>";
print_r($email);
print "</pre>";

print "<hr>";


// Array dua dimensi (Matriks)
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// Cara mengakses isinya (baris ke-1, kolom ke-0)
print $matrik[1][0]; // -> output: 7

print "<hr>";

// Array 2 dimensi yang berisi array asosiatif
$daftar_artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "petanikode"
    ]
];

// Menampilkan array multidimensi asosiatif
foreach($daftar_artikel as $post){
    print "<h2>".$post["judul"]."</h2>";
    print "<p>".$post["penulis"]."</p>";
    print "<hr>";
}