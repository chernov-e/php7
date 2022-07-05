<?php

$array = [100, 45, 2, 5, 3, 122, -3, 5, 6, 1, 3]; // входной массив с числами
$n = count($array); // количество элементов в массиве

for ($i = 0; $i < $n; $i++){
	for ($j = $i + 1; $j < $n; $j++) {
		if ($array[$i] > $array[$j]) {
      list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
		}
	}
}

var_dump($array);
