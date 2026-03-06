<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 10</title>
<link rel="stylesheet" href="estilo10.css">
</head>
<body>

<div class="container">

<h2>Formulário Completo</h2>

<form method="POST">

<input type="text" name="nome" placeholder="Nome"><br>

<input type="email" name="email" placeholder="Email"><br>

<input type="password" name="senha" placeholder="Senha"><br>

<input type="number" name="idade" placeholder="Idade"><br><br>

<p>Sexo:</p>

<label><input type="radio" name="sexo" value="Masculino"> Masculino</label>
<label><input type="radio" name="sexo" value="Feminino"> Feminino</label>
<label><input type="radio" name="sexo" value="Outro"> Outro</label>

<br><br>

<select name="cidade">
<option value="">Selecione a cidade</option>
<option value="Sapucaia do Sul">Sapucaia</option>
<option value="Esteio">Esteio</option>
<option value="São Leopoldo">São Leopoldo</option>
<option value="Porto Alegre">Porto Alegre</option>
</select>

<br><br>

<p>Linguagens favoritas:</p>

<label><input type="checkbox" name="linguagens[]" value="HTML"> HTML</label>
<label><input type="checkbox" name="linguagens[]" value="CSS"> CSS</label>
<label><input type="checkbox" name="linguagens[]" value="JavaScript"> JavaScript</label>
<label><input type="checkbox" name="linguagens[]" value="PHP"> PHP</label>
<label><input type="checkbox" name="linguagens[]" value="Java"> Java</label>

<br><br>

<button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = isset($_POST["nome"]) ? htmlspecialchars($_POST["nome"]) : "";
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
$senha = isset($_POST["senha"]) ? htmlspecialchars($_POST["senha"]) : "";
$idade = isset($_POST["idade"]) ? htmlspecialchars($_POST["idade"]) : "";
$sexo = isset($_POST["sexo"]) ? htmlspecialchars($_POST["sexo"]) : "";
$cidade = isset($_POST["cidade"]) ? htmlspecialchars($_POST["cidade"]) : "";
$linguagens = isset($_POST["linguagens"]) ? $_POST["linguagens"] : [];

if (empty($nome) || empty($email) || empty($senha) || empty($idade) || empty($sexo) || empty($cidade)) {

echo "<p class='erro'>Preencha todos os campos obrigatórios</p>";

} else {

echo "<p class='sucesso'>Cadastro realizado com sucesso</p>";

echo "<p>Nome: $nome</p>";
echo "<p>Email: $email</p>";
echo "<p>Idade: $idade</p>";
echo "<p>Sexo: $sexo</p>";
echo "<p>Cidade: $cidade</p>";

echo "<p><strong>Linguagens favoritas:</strong></p>";

if (!empty($linguagens)) {

foreach ($linguagens as $linguagem) {
echo "<p>" . htmlspecialchars($linguagem) . "</p>";
}

} else {

echo "<p>Nenhuma linguagem selecionada</p>";

}

}

}

?>

</div>

</body>
</html>