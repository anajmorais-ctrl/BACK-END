<?php
$usuario = "Anazkho";
$idade = 16;
if ($idade <13){
    echo "Desculpe, $usuario. Você não tem acesso.";
} elseif ($idade >= 13 && $idade <= 17) {
    echo "Bem-vindo, $usuario! Você tem acesso limitado com Controle parental.";
} else {
    echo "Bem-vindo, $usuario! Você tem acesso total.";
}