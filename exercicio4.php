<?php
echo "BEM VINDO A PIZZARIA DA ANA ESCOLHA UMA OPÇÃO DO CARDAPIO ABAIXO";
echo "<br>";
echo "1 - CARDAPIO Pizza";
echo "<br>";
echo "2 - CARDAPIO Lanche";
echo "<br>";
echo "3 - CARDAPIO Bebidas";
echo "<br>";
echo "4 - CARDAPIO Sobremesas";
echo "<br>"; 
echo "5 - SAIR"; 
echo "<br>";
$opcao = 2;
switch ($opcao) {
    case 1;
    echo "PIZZAS: <br> Calabresa R$ 30,00 <br> Frango com Catupiry R$ 35,00 <br> Portuguesa R$ 40,00 <br> Quatro Queijos R$ 45,00";
    break;
    case 2;
    echo "LANCHES: <br> X-Burguer R$ 15,00 <br> X-Salada R$ 20,00 <br> X-Egg R$ 25,00 <br> X-Tudo R$ 30,00";
    break;
    case 3;
    echo "BEBIDAS: <br> Refrigerante R$ 5,00 <br> Suco Natural R$ 7,00 <br> Água Mineral R$ 3,00 <br> Cerveja R$ 8,00";
    break;
    case 4;
    echo "SOBREMESAS: <br> Pudim R$ 10,00 <br> Sorvete R$ 12,00 <br> Torta de Limão R$ 15,00 <br> Brownie R$ 18,00";
    break;
}
