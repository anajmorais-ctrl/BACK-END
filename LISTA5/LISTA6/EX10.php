<?php
$peso = 98;
$altura = 1.75;
$imc = $peso / ($altura * $altura);
if ($imc < 18.5) {
    echo "Seu IMC é $imc. Você está abaixo do peso.";
} elseif ($imc >= 19 & $imc < 24) {
    echo "Seu IMC é $imc. Você está com peso normal.";
} elseif ($imc >=25 && $imc < 29) {
    echo "Seu IMC é $imc. Você está com sobrepeso.";
} else  {
    echo "Seu IMC é $imc. Você está com obesidade.";
}
