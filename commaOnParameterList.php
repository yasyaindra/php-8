<?php


function calculate(int $a, int $b){
    return $a + $b;
};

echo calculate(3,5,);

$array = [
    "nama" => "Indra",
    "jurusan" => "Informatika",
    "kampus" => "Esa Unggul",
    "email" => "indra@mail.com",
];

echo implode($array.' ');