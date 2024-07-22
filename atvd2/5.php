<!-- 5) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”. -->

<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Maior ou Menor</title>
</head>
<body>

<h2>Informe dois números:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Valor A: <input type="number" name="valor_a" required><br>
    Valor B: <input type="number" name="valor_b" required><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor_a']) && isset($_POST['valor_b'])) {
    $valor_a = $_POST['valor_a'];
    $valor_b = $_POST['valor_b'];

    if ($valor_a > $valor_b) {
        echo "<p>A é maior que B.</p>";
    } elseif ($valor_a < $valor_b) {
        echo "<p>A é menor que B.</p>";
    } else {
        echo "<p>A é igual a B.</p>";
    }
}
?>

</body>
</html>
