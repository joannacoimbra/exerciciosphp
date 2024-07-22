<!-- 2. Desenvolver um algoritmo que leia a altura de 15 pessoas. Este programa deverá calcular e mostrar:
a. A menor altura do grupo
b. A maior altura do grupo -->

<!DOCTYPE html>
<html>

<head><title>Exercício 2</title></head>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php
    for ($i = 1; $i <= 15; $i++) {
        echo "Altura da pessoa $i: <input type='number' name='altura[]' required><br>";
    }
    ?>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['altura'])) {
    $alturas = $_POST['altura'];

    $menor_altura = min($alturas);
    $maior_altura = max($alturas);

    echo "<p>A menor altura do grupo é: $menor_altura</p>";
    echo "<p>A maior altura do grupo é: $maior_altura</p>";
}
?>

</body>

</html>