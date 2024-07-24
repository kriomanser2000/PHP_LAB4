<?php
$fruits = [
    ['name' => 'Яблуко', 'type' => 'другорядний', 'price' => 10, 'quantity' => 5],
    ['name' => 'Банан', 'type' => 'цитрусовий', 'price' => 12, 'quantity' => 7],
    ['name' => 'Апельсин', 'type' => 'цитрусовий', 'price' => 15, 'quantity' => 4],
    ['name' => 'Груша', 'type' => 'другорядний', 'price' => 8, 'quantity' => 6],
    ['name' => 'Лимон', 'type' => 'цитрусовий', 'price' => 9, 'quantity' => 10]
];
echo "Цитрусові фрукти:\n";
foreach ($fruits as $fruit)
{
    if ($fruit['type'] === 'цитрусовий')
    {
        echo $fruit['name'] . "\n";
    }
}
echo "\nЦіна фруктів:\n";
foreach ($fruits as $fruit)
{
    $totalPrice = $fruit['price'] * $fruit['quantity'];
    echo $fruit['name'] . ": " . $totalPrice . "\n";
}
$grandTotal = 0;
foreach ($fruits as $fruit)
{
    $grandTotal += $fruit['price'] * $fruit['quantity'];
}
echo "\nЗагальна ціна усіх фруктів: " . $grandTotal;