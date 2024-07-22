<!-- 2) Crie um programa em que o usuário escolha uma operaçã (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números. -->

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<h2>Escolha uma operação:</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número 1: <input type="number" name="num1" required><br>
    Número 2: <input type="number" name="num2" required><br>
    Operação:
    <select name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = $num1 + $num2;
            echo "<p>O resultado da soma é: $resultado</p>";
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            echo "<p>O resultado da subtração é: $resultado</p>";
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            echo "<p>O resultado da multiplicação é: $resultado</p>";
            break;
        case 'divisao':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "<p>O resultado da divisão é: $resultado</p>";
            } else {
                echo "<p>Erro: divisão por zero não é permitida.</p>";
            }
            break;
        default:
            echo "<p>Operação inválida.</p>";
            break;
    }
}
?>

</body>
</html>
