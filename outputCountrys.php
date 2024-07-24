<?php
$countries = array(
    "UA" => "Україна",
    "PL" => "Польща",
    "GB" => "Велика Британія",
    "DE" => "Німеччина",
    "NO" => "Норвегія",
    "FR" => "Франція"
);
echo '<select name="country">';
foreach ($countries as $code => $name)
{
    echo '<option value="' . htmlspecialchars($code) . '">' . htmlspecialchars($name) . '</option>';
}
echo '</select>';