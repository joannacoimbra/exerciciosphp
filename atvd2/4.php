<!-- 4) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5,B=4. Você deve imprimir na tela: "4 5". -->

<!DOCTYPE html>
<html>
<head>
    <title>Ordenação de Valores</title>
</head>
<body>

<h2>Informe dois números:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Valor A: <input type="number" name="valor_a" required><br>
    Valor B: <input type="number" name="valor_b" required><br>
    <input type="submit" value="Ordenar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valor_a']) && isset($_POST['valor_b'])) {
    $valor_a = $_POST['valor_a'];
    $valor_b = $_POST['valor_b'];

    if ($valor_a < $valor_b) {
        echo "<p>$valor_a $valor_b</p>";
    } else {
        echo "<p>$valor_b $valor_a</p>";
    }
}
?>

</body>
</html>
