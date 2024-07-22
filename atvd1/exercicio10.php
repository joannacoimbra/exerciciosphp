<!-- Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58  -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 10</title>
</head>

<body>
<h2>Informe a altura da pessoa (em metros):</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Altura: <input type="number" name="altura" step="0.01" required><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['altura'])) {
    $altura = $_POST['altura'];
    $peso_ideal = (72.7 * $altura) - 58;
    echo "<p>O peso ideal para uma pessoa com altura de $altura metros é: $peso_ideal kg</p>";
}
?>

</body>

</html>
