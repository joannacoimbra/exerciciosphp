<!-- 4. Escrever um algoritmo que leia uma quantidade desconhecida de números e conte quantos deles estão nos seguintes intervalos: [0-25],[26-50],[51,75] e [76-100]. A entrada de dados deve terminar quando for lido um número negativo. -->

<!DOCTYPE html>
<html>

<head>
    <title>Exercício 4</title>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número: <input type="number" name="numero"><br>
    <input type="submit" value="Contar">
</form>

<?php
//contadores para cada intervalo
$intervalo1 = 0; // 0-25
$intervalo2 = 0; // 26-50
$intervalo3 = 0; // 51-75
$intervalo4 = 0; // 76-100

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numero'])) {
    while ($_POST['numero'] >= 0) {
        $numero = $_POST['numero'];

        if ($numero >= 0 && $numero <= 25) {
            $intervalo1++;
        } elseif ($numero >= 26 && $numero <= 50) {
            $intervalo2++;
        } elseif ($numero >= 51 && $numero <= 75) {
            $intervalo3++;
        } elseif ($numero >= 76 && $numero <= 100) {
            $intervalo4++;
        }

        echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
        echo "Número: <input type='number' name='numero'><br>";
        echo "<input type='submit' value='Contar'>";
        echo "</form>";
        break; 
    }

    echo "<h3>Contagem nos Intervalos:</h3>";
    echo "[0-25]: $intervalo1<br>";
    echo "[26-50]: $intervalo2<br>";
    echo "[51-75]: $intervalo3<br>";
    echo "[76-100]: $intervalo4<br>";
}
?>

</body>
</html>