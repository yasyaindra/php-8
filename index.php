<?php 

// function myFunc($satu = 0, $dua = 0, $tiga = 0, $empat = 0){
// 	return $satu + $dua * $tiga - $empat;
// }

// echo '<h1>'.myFunc(dua:2, tiga:3).'</h1>';

$pintu = 6;

echo match($pintu){
	1 => "Dapet mobil",
	2 => "Dapet sabun cuci",
	3 => "duit 2000",
	default => "Hmmmm kurang beruntung",
}

; ?>