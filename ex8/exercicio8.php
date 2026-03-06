<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 8</title>
<link rel="stylesheet" href="estilo8.css">
</head>
<body>

<div class="container">

<h2>Seleção de Cidade</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Digite seu nome" required>
<br><br>

<select name="cidade" required>
<option value="">Selecione uma cidade</option>
<option value="Sapucaia">Sapucaia</option>
<option value="Esteio">Esteio</option>
<option value="São Leopoldo">São Leopoldo</option>
<option value="Porto Alegre">Porto Alegre</option>
</select>

<br><br>

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];

    echo "<p class='resultado'>$nome mora em $cidade</p>";
}

?>

</div>

</body>
</html>