<!-- 1 - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Número</title>
</head>
<body>

<h2>Digite um número:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número: <input type="number" name="numero" required><br>
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    if ($numero > 0) {
        echo "<p>Valor positivo</p>";
    } elseif ($numero < 0) {
        echo "<p>Valor negativo</p>";
    } else {
        echo "<p>Igual a zero</p>";
    }
}
?>

</body>
</html>
