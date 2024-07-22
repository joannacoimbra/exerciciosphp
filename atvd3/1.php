<!-- 1. Desenvolver um algoritmo que efetue a soma de todos os numeros ímpares que são múltiplosde três e que se encontram no conjunto dos números de 1 a 500. -->

<!DOCTYPE html>
<html>

<head><title>Exercício 1</title></head>

<body>
    <?php
    $soma = 0;
    for ($i = 1; $i <= 500; $i++) {
        if ($i % 2 != 0 && $i % 3 == 0) {
            $soma += $i;
        }
    }

    echo "A soma de todos os números ímpares múltiplos de três no conjunto de 1 a 500 é: $soma";
    ?>

</body>

</html>