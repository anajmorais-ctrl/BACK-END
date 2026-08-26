<?php
$n1 = 10;
$n2 = 5;
$operacao = "+";
if ($operacao == "+") {
echo "A soma de $n1 e $n2 é: " , ($n1 + $n2);
}
elseif ($operacao == "-") {
    echo "A subtração de $n1 e $n2 é: ", ($n1 - $n2);
}
elseif ($operacao == "*") {
  echo "A multiplicação de $n1 e $n2 é: ",($n1 * $n2);
}
elseif ($operacao == "/") {
    echo "A divisão de $n1 e $n2 é: ", ( $n1 / $n2);
}

else{
    echo "Operação inválida.";
}