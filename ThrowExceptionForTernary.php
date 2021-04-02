<?php

$name = 'Eko';
$result = $name == 'Eko' ? "Sukses" : throw new Exception('Salah orang');

echo $result;