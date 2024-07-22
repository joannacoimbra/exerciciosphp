<!-- 6) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos. -->

<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Idade</title>
</head>
<body>

<h2>Informe seu nome e sua idade:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if ($idade >= 18) {
        echo "<p>$nome é maior de 18 e tem $idade anos.</p>";
    } else {
        echo "<p>$nome não é maior de 18 e tem $idade anos.</p>";
    }
}
?>

</body>
</html>
