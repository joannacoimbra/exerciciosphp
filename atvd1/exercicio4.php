<!-- Faça um script que peça dois números e imprima a soma -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 4</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite o primeiro número: <input type="number" name="numero1"><br>
    Digite o segundo número: <input type="number" name="numero2"><br>
    <input type="submit" value="Calcular Soma">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $soma = $numero1 + $numero2;
    echo "<p>A soma de $numero1 e $numero2 é igual a: $soma</p>";
}
?>
</body>

</html>
