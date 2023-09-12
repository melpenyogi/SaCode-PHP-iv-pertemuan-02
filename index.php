<?php
// Varible INT

$x = 10;
$y = 5;

echo "<p> x = " . $x . "</p>";
$str = "Hello Melpen";
echo $str . "<br>";
echo trim($str, "Hed!");

// VARIABLE BOLEAN
// TRUE 1 atau FALSE 0
// AND X
// OR X

$a = true;
$b = false;
$or = $a || $b;
$and = $a && $b;

echo "<br>";
var_dump($or);
var_dump($and);

// VARIABLE ARRAY
// Untuk menyimpan dalam banyak dalam satu varible

// PenulisanLama
$nama = array("Melpen", "Samuel", "Billy");

// Penulisan Baru
$nama_kedua = ['Janzen', 'Samuel', 'Melpen'];

echo "<br>";
foreach ($nama_kedua as $peserta) {
    echo $peserta . "<br>";
}

$data = [
    'nama'    => 'Melpen',
    'alamat'  => 'waena',
    'jenis_kelamin' => 'pria',

];

echo 'Nama : ' . $data['nama'] . '<br>';
echo 'Alamat : ' . $data['alamat'] . '<br>';
echo 'Jenis Kelamin : ' . $data['jenis_kelamin'] . '<br>';
