<?php
$array = array();
for ($i = 0; $i < 10; $i++)
{
    $array[] = rand(1, 10);
}
$counts = array_count_values($array);
echo '<html><body>';
foreach ($counts as $number => $count)
{
    $color = $count > 1 ? 'blue' : 'red';
    echo '<p style="font-size: 20px; color: ' . $color . ';">';
    echo '<strong>' . $number . '</strong>: ' . $count;
    echo '</p>';
}
echo '</body></html>';