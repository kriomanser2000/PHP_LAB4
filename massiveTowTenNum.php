<?php
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [5, 6, 7, 8, 11, 12, 13, 14, 15, 16];
$mergedArray = array_merge($array1, $array2);
$uniqueArray = array_unique($mergedArray);
print_r($uniqueArray);