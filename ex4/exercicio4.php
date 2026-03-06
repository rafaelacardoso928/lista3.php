<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 4</title>
<link rel="stylesheet" href="estilo4.css">
</head>
<body>

<div class="container">

<h2>Calculadora Simples</h2>

<form method="POST">

    <input type="number" name="numero1" placeholder="Número 1" required>
    <br>

    <input type="number" name="numero2" placeholder="Número 2" required>
    <br>

    <select name="operacao">
        <option value="somar">Somar</option>
        <option value="subtrair">Subtrair</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>

    <br><br>

    <button type="submit">Calcular</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];

    if ($operacao == "somar") {
        $resultado = $numero1 + $numero2;
    }

    elseif ($operacao == "subtrair") {
        $resultado = $numero1 - $numero2;
    }

    elseif ($operacao == "multiplicar") {
        $resultado = $numero1 * $numero2;
    }

    elseif ($operacao == "dividir") {
        $resultado = $numero1 / $numero2;
    }

    echo "<p class='resultado'>Resultado: $resultado</p>";
}

?>

</div>

</body>
</html>