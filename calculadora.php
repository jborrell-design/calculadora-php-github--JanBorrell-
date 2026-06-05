<?php
function calcular($operacio, $primerNumero, $segonNumero) {
    switch ($operacio) {
        case "s":
            return $primerNumero + $segonNumero;
        case "r":
            return $primerNumero - $segonNumero;
        case "m":
            return $primerNumero * $segonNumero;
        case "d":
            if ($segonNumero != 0) {
                return $primerNumero / $segonNumero;
            } else {
                return "Error";
            }
    }
}
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

$res = calcular($operacio, $primerNumero, $segonNumero);
echo $res;
?>