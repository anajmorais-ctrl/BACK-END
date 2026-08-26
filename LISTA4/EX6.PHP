<?php
$idade = 20;
$deficiencia = true;
$gestante = false; 
if ($idade >= 18 && ($deficiencia == true || $gestante == true)) {
    echo "Você tem direito ao benefício!";
} else {
    echo "Você não tem direito ao benefício!";
}