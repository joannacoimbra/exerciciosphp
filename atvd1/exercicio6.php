<!-- Faça um script que calcule a área de um quadrado em seguida mostre o dobro da área para o usuário -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 6</title>
</head>

<body>
<h2>Calcule a área do quadrado</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Lado do quadrado: <input type="number" name="lado"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lado'])) {
    $lado = $_POST['lado'];
    $area = $lado * $lado;
    $dobro_da_area = $area * 2;
    echo "<h2>O dobro da área do quadrado é: $dobro_da_area</h2>";
}
?>

</html>
