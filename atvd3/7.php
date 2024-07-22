<!-- 7. Escrever um algoritmo que leia um valor para uma variável N de 1 a 10 e calcule a tabuada de N. Mostre a tabuada na forma de: 0xN=0, 1xN=1N, 2xn=2N, ...10xN=10N. -->

<!DOCTYPE html>
<html>

<head>
    <title>Exercício 7</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    N: <input type="number" name="n" min="1" max="10" required><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
    $n = $_POST['n'];

    for ($i = 0; $i <= 10; $i++) {
        $resultado = $i * $n;
        echo "$i x $n = $resultado<br>";
    }
}
?>

</body>
</html>