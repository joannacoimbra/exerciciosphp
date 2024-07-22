<!-- 8. Escreva um algoritmo que leia um valor inicial A e imprima a sequência de valores do cálculo de A! e o seu resultado. Ex: 5! = 5x4x3x2x1 = 120. -->


<!DOCTYPE html>
<html>

<head>
    <title>Exercício 7</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        A: <input type="number" name="a" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['a'])) {
        // recebe o valor de A fornecido pelo usuário
        $a = $_POST['a'];

        // inicia o resultado do fatorial como 1
        $fatorial = 1;

        //armazenar a sequência de cálculo 
        $sequencia = "$a! = ";

        // calcular o fatorial
        for ($i = $a; $i >= 1; $i--) {
            $fatorial *= $i;
            $sequencia .= "$i";
            if ($i != 1) {
                $sequencia .= "x";
            }
        }

        echo "$sequencia = $fatorial";
    }
    ?>

</body>

</html>