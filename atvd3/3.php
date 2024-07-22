<!-- 3. Desenvolver um algoritmo que um número e não determinado de valores e calcule e escreva a média aritmética dos valores lidos, a quantidade de valores positivos, a quantidade de valores negativos e o percentual de valores negativos e positivos. -->

<!DOCTYPE html>
<html>

<head>
    <title>Exercício 3</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Valor $i: <input type='number' name='valores[]' required><br>";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valores'])) {
        $valores = $_POST['valores'];

        $soma = 0;
        $qtd_positivos = 0;
        $qtd_negativos = 0;

        foreach ($valores as $valor) {
            $soma += $valor;
            if ($valor > 0) {
                $qtd_positivos++;
            } elseif ($valor < 0) {
                $qtd_negativos++;
            }
        }

        $media = $soma / count($valores);

        $percentual_positivos = ($qtd_positivos / count($valores)) * 100;
        $percentual_negativos = ($qtd_negativos / count($valores)) * 100;

        echo "<p>A média aritmética dos valores é: $media</p>";
        echo "<p>A quantidade de valores positivos é: $qtd_positivos</p>";
        echo "<p>A quantidade de valores negativos é: $qtd_negativos</p>";
        echo "<p>O percentual de valores positivos é: $percentual_positivos%</p>";
        echo "<p>O percentual de valores negativos é: $percentual_negativos%</p>";
    }
    ?>

</body>

</html>