<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário de Contato</title>
<link rel="stylesheet" href="extra.css">
</head>
<body>

<div class="container">

<h2>Formulário de Contato</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Nome"><br>

<input type="email" name="email" placeholder="Email"><br>

<input type="text" name="assunto" placeholder="Assunto"><br>

<textarea name="mensagem" placeholder="Digite sua mensagem"></textarea><br>

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$assunto = isset($_POST["assunto"]) ? htmlspecialchars($_POST["assunto"]) : "";
$mensagem = isset($_POST["mensagem"]) ? htmlspecialchars($_POST["mensagem"]) : "";

if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {

echo "<p class='erro'>Preencha todos os campos</p>";

} else {

echo "<p class='sucesso'>Mensagem enviada com sucesso!</p>";

echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Assunto:</strong> $assunto</p>";
echo "<p><strong>Mensagem:</strong></p>";
echo "<p>$mensagem</p>";

}

}

?>

</div>

</body>
</html>