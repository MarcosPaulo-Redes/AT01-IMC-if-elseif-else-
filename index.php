<?php


$peso = 65;
$altura = 1.90;
$imc = $peso / ($altura **2);


echo "O IMC : $imc";


echo "<p>";


if ($imc < 16) {
echo " Seu IMC é: $imc. MAGREZA GRAU III";
} elseif ($imc >= 16 && $imc <= 16.9) {
echo " Seu IMC é: $imc. MAGREZA GRAU II";
} elseif ($imc >= 17 && $imc <= 18.4) {
echo " Seu IMC : MAGREZA GRAU I"; 
} elseif ($imc >= 18.5 && $imc <= 24.9) {
echo "Seu IMC: EUTROFIA";
} elseif ($imc >= 25 && $imc <= 29.9) {
echo " Seu IMC: PRE-OBESIDADE";
} elseif ($imc >= 30 && $imc <= 34.9) {
echo " Seu IMC: OBESIDADE MODERADA (GRAU I)";
} elseif ($imc >= 35 && $imc <= 39.9) {
echo " Seu IMC: OBESIDADE SEVERA (GRAU II)";
} else {
echo " Seu IMC é: OBESIDADE MUITO SEVERA (GRAU III)"; }
?>