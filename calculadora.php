<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

if ($operacio == "s") {
    $res = $primerNumero + $segonNumero;
} else if ($operacio == "r") {
    $res = $primerNumero - $segonNumero;
} else if ($operacio == "m") {
    $res = $primerNumero * $segonNumero;
} else if ($operacio == "d") {
    if ($segonNumero != 0) {
        $res = $primerNumero / $segonNumero;
    } else {
        $res = "Error";
    }
}
echo $res;
?>