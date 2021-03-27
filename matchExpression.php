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

$value = 80 ;

$result = match(true) {
    $value >= 100 => 'Lulus',
    $value >= 80 => 'Anda Berbakat',
    $value >= 70 => 'Anda dimaafkan',
    $value >= 60 => 'Anda Gagal',
    default => 'Apakah anda mengikuti ujian?'
};

echo $result . PHP_EOL;

