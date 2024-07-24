<?php
$array = [5, 12, 7, 9, 23, 4, 18, 2, 11, 6];
echo "Парні елементи:\n";
foreach ($array as $value)
{
    if ($value % 2 == 0)
    {
        echo $value . "\n";
    }
}
$max = max($array);
$min = min($array);
echo "Максимальний елемент: $max\n";
echo "Мінімальний елемент: $min\n";
sort($array);
echo "Масив після сортування:\n";
foreach ($array as $value)
{
    echo $value . "\n";
}