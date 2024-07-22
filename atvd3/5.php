<!-- 5. Faça um algoritmo estruturado que leia uma quantidade não determinada de números , positivos. Calcule a quantidade de números pares e ímpares, a média de valores pares e a média geral dos números lidos. O número que encerrará a leitura será zero.  -->

<!DOCTYPE html>
<html>

<head>
    <title>Exercício 5</title>
</head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Número $i: <input type='number' name='numeros[]'><br>";
    }
    ?>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {
    $qtd_pares = 0;
    $qtd_impares = 0;
    $soma_pares = 0;
    $qtd_total = 0;

    foreach ($_POST['numeros'] as $numero) {
        if ($numero > 0) {
            $qtd_total++;

            if ($numero % 2 == 0) {
                $qtd_pares++;
                $soma_pares += $numero;
            } else {
                $qtd_impares++;
            }
        }
    }

    // cálculo da média de valores pares
    $media_pares = $qtd_pares != 0 ? $soma_pares / $qtd_pares : 0;

    // cálculo da média geral dos números lidos
    $media_geral = $qtd_total != 0 ? ($soma_pares + ($qtd_impares * ($qtd_total - $qtd_pares))) / $qtd_total : 0;

    echo "<h3>Resultados:</h3>";
    echo "Quantidade de números pares: $qtd_pares<br>";
    echo "Quantidade de números ímpares: $qtd_impares<br>";
    echo "Média de valores pares: $media_pares<br>";
    echo "Média geral dos números lidos: $media_geral<br>";
}
?>

</body>
</html>