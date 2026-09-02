<?php
function desconto ($preco, $desconto) {
    $valor = $preco*$desconto/100;
    return $preco-$valor;
}
echo "Preço com desconto: R$ ".desconto(100, 10);
