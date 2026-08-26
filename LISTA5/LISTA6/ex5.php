<?php
$nome = "Ana";
$nivel_acesso = 2;
if ($nivel_acesso == 1) {
    echo "Bem-vindo, $nome! Você tem acesso total.";
} elseif ($nivel_acesso == 2) {
    echo "Bem-vindo, $nome! Você tem acesso limitado.";
} else {
    echo "Desculpe, $nome. Você não tem acesso.";
}
