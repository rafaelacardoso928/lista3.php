<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 1</title>
<link rel="stylesheet" href="estilo1.css">
</head>
<body>

<div class="container">

<h2>Digite seu nome</h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    echo "<p class='mensagem'>Olá, $nome!</p>";
}
?>

</div>

</body>
</html>