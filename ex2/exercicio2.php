<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 2</title>
<link rel="stylesheet" href="estilo2.css">
</head>
<body>

<div class="container">

<h2>Formulário</h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Digite seu nome" required>
    <br>

    <input type="number" name="idade" placeholder="Digite sua idade" required>
    <br>

    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade anos</p>";

    if ($idade >= 18) {
        echo "<p class='mensagem'>Você é maior de idade</p>";
    } else {
        echo "<p class='mensagem'>Você é menor de idade</p>";
    }
}
?>

</div>

</body>
</html>