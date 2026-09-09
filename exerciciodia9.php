<?php
$senhacorreta ="123456";
$senha = "111111";
$tentativas = 0;
while ($tentativas <3){
    echo "Tentativa:",
    $tentativas+1, "senha incorreta";
    $tentativa = $tentativas+1;
}
echo "ACESSO BLOQUEADO";