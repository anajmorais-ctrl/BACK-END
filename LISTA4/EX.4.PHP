 <?php
$email= "gmailaleatorio67@gmail.com";
$senha = "MinhaSenha123";
$ativo = true;
echo "LOGIN - FACEBOOK<br>";
if ($senha == "MinhaSenha123" && $email == "gmailaleatorio67@gmail.com" && $ativo == true) {
    echo "Login realizado com sucesso!";
} else {
    echo "Email ou senha incorretos!";
}
?>