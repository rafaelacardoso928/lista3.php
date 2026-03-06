<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Exercício 9</title>
<link rel="stylesheet" href="estilo9.css">
</head>
<body>

<div class="container">

<h2>Escolha as Linguagens</h2>

<form method="POST">

<label><input type="checkbox" name="linguagens[]" value="HTML"> HTML</label>
<label><input type="checkbox" name="linguagens[]" value="CSS"> CSS</label>
<label><input type="checkbox" name="linguagens[]" value="JavaScript"> JavaScript</label>
<label><input type="checkbox" name="linguagens[]" value="PHP"> PHP</label>
<label><input type="checkbox" name="linguagens[]" value="Java"> Java</label>

<br><br>

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["linguagens"])) {

        echo "<p class='titulo'>Linguagens escolhidas:</p>";

        $linguagens = $_POST["linguagens"];

        foreach ($linguagens as $linguagem) {
            echo "<p>$linguagem</p>";
        }

    } else {

        echo "<p class='erro'>Nenhuma linguagem selecionada</p>";

    }

}

?>

</div>

</body>
</html>