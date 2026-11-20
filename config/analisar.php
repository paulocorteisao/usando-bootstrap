
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $senha = $_POST["senha"] ?? "";

  
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Senha recebida com sucesso!";

} else {
    echo "Nenhum formulário foi enviado pelo método POST.";
}

?>
