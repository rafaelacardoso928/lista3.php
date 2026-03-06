<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 7</title>
<link rel="stylesheet" href="estilo7.css">
</head>
<body>

<div class="container">

<h2>Seleção de Sexo</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome" required>
<br><br>

<label>
<input type="radio" name="sexo" value="Masculino" required>
Masculino
</label>

<label>
<input type="radio" name="sexo" value="Feminino">
Feminino
</label>

<label>
<input type="radio" name="sexo" value="Outro">
Outro
</label>

<br><br>

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];

    echo "<p class='resultado'>Nome: $nome</p>";
    echo "<p class='resultado'>Sexo selecionado: $sexo</p>";
}

?>

</div>

</body>
</html>