<!-- Faça um script que peça a temperatura em graus farenheit transforme e mostre a temperatura em graus celcius. C=5*(F-2)/9 -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 8</title>
</head>

<body>
<h2>Informe a temperatura em Farenheit</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Temperatura em Fahrenheit: <input type="number" name="fahrenheit"><br>
    <input type="submit" value="Converter">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fahrenheit'])) {
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = 5 * ($fahrenheit - 32) / 9;
    echo "<h2>A temperatura em Celsius é: $celsius °C</h2>";
}
?>
</body>

</html>
