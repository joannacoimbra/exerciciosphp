<!-- 3) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. -->
<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Par ou Ímpar</title>
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

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<p>O número $numero é ímpar.</p>";
    }
}
?>

</body>
</html>
