<?php 


// Sintaks PHP

// Standar Output 
// echo, print
// print_r
// var_dump 

// Penulisan Sintaks PHP 
// 1. PHP dalam HTML 
// 2. HTML dalam PHP 

// Variabel dan Tipe Data 
// Variabel 
// Tidak Boleh Diawali dengan Angka, tapi boleh mengandung angka


// Operator Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabung String / concatenation / concat 
// .


$salam = "assalamu'alaikum";
$namaDepan =  "Royhan";
$namaBelakang =  "Najib";


// Assignment 
// =, +=, -=, *=, /=, %=, .=
// $x = 10;
// $x += 5;
// echo $x;

// $nama = "Prabowo";
// $nama .= " ";
// $nama .= "Subianto";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// AND, OR, NOT
// var_dump(1 < 5 && 4 == 4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variable</title>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    

    <h1><?php echo $salam ?></h1>
    <h2><?php echo $namaDepan . " " . $namaBelakang ?></h2>

</body>
</html>