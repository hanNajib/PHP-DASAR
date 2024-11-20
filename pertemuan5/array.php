<?php 
//array 
// variabel yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// keynya adalah index, yang diawali dengan angka 0

// Membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Tulang", false];

// echo $hari[0];
// menampilkan array
// var_dump() / print_r()

var_dump($hari);
echo '<br>';
print_r($bulan);
echo '<br>';

// menampilkan 1 elemen pada array
echo $arr1[0];
echo '<br>';
echo $bulan[1];
echo '<br>';


// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo '<br>';
var_dump($hari);






?>