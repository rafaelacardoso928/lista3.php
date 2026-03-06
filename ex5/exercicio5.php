<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 5</title>
<link rel="stylesheet" href="estilo5.css">
</head>
<body>

<div class="container">

<h2>Verificador de Número</h2>

<form method="POST">
    <input type="number" name="numero" placeholder="Digite um número" required>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p class='resultado'>O número é Par</p>";
    } else {
        echo "<p class='resultado'>O número é Ímpar</p>";
    }
}

?>

</div>

</body>
</html>