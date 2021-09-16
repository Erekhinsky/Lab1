<?php
if (isset($_GET['y'])) $y = $_GET['y'];
$y = preg_replace("/,/", ".", $y);
$fail = "";
if (preg_match("/[^-\d,.]/", $y)) $fail .= "Введены недопустимые символы\n";
elseif ($y == "" || !is_numeric($y)) $fail .= "Y должен быть числом\n";
elseif ($y<=-3 || $y>=3) $fail.= "Y должен находиться от -3 до 3";
echo $fail;
