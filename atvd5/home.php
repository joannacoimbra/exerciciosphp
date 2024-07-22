<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

function soma($num1, $num2)
{
    return ($num1 + $num2);
}
$soma= soma($num1, $num2);
echo "Soma: $num1 + $num2 = ", $soma, "<br />";

function sub($num1, $num2)
{
    return ($num1 - $num2);
}
$sub= sub($num1, $num2);
echo "Subtração: $num1 - $num2 = ", $sub, "<br />";

function mult($num1, $num2){
    return ($num1 * $num2); 
}
$mult= mult($num1, $num2);
echo "Multiplicação: $num1 x $num2 = ", $mult, "<br />";

function div($num1, $num2)
{
    return ($num1 / $num2);
}
$div= div($num1, $num2);
echo "Divisão: $num1 / $num2 = ", $div, "<br />";

// echo "Soma: $num1 + $num2 = ", $soma, "<br />";
// echo "Subtraçäo: $num1 - $num2 = ", $num1 - $num2, "<br />";
// echo "Multiplicação: $num1 x $num2 = ", $num1 * $num2, "<br />";
// echo "Divisão: $num1 / $num2 = ", $num1 / $num2, "<br />";
?>
