<?php

// Contoh Menggunakan Switch Case
// $value = 'H';
// $result = "";

//  switch($value){
//      case 'A':
//         $result = 'Anda lulus';
//         break;
//      case 'B':
//         $result = 'Anda berbakat';
//         break;
//      case 'C':
//         $result = 'Anda dimaafkan';
//         break;
//      case 'D':
//      case 'E':
//         $result = 'Anda gagal';
//         break;
//     default:
//         $result = 'Apakah anda mengikuti ujian?';
// };

$value = 'Bu Indra'  ;

$result = match(true) {
    str_contains($value, 'Pak') => 'Selamat Pagi Pak',
    str_contains($value, 'Bu') => 'Selamat Pagi Bu'
};

echo $result . PHP_EOL;

// $result = match(true) {
//     $value >= 100 => 'Lulus',
//     $value >= 80 => 'Anda Berbakat',
//     $value >= 70 => 'Anda dimaafkan',
//     $value >= 60 => 'Anda Gagal',
//     default => 'Apakah anda mengikuti ujian?'
// };

// echo $result . PHP_EOL;

