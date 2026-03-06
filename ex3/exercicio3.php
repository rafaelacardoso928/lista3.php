<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 3</title>
<link rel="stylesheet" href="estilo3.css">
</head>
<body>

<div class="container">

<h2>Soma de dois números</h2>

<form method="POST">
    <input type="number" name="numero1" placeholder="Número 1" required>
    <br>

    <input type="number" name="numero2" placeholder="Número 2" required>
    <br>

    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $resultado = $numero1 + $numero2;

    echo "<p class='resultado'>Resultado da soma: $resultado</p>";
}
?>

</div>

</body>
</html>