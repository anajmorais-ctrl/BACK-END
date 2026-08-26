<?php
echo "Bem vindo ao TIGRINHO.BET <br>";
echo "Acerte o número de 0 a 20 e ganhe um prêmio! <br>";
$aposta = 10;
$numero_escolhido = 5;
if ($numero_escolhido == $aposta) {
    echo "Parabéns! Você acertou o número e ganhou o prêmio!";
} else {
    echo "Que pena! Você errou o número. Tente novamente!";
}