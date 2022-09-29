<?php

echo "<pre>";
$estatura = $_POST["estatura"];
$peso = $_POST["peso"];

echo "<hr>";
$imc = 0;
// (imc = peso [kg]/ estatura (m))
//isset = determina si una variable esta definida y no es nula

$peso = isset($_POST["peso"])? $_POST["peso"]:null;
$estatura = isset($_POST["estatura"])? $_POST["estatura"]:null;
if ($estatura !=0) {
    $imc = $peso/pow($estatura, 2);
    //pow - expresion exponencial


if ($imc < 18) {
    echo "<b>DIAGNOSTICO = </b> Peso bajo. 😢";
}
elseif ($imc >= 18 && $imc <=24.9) {
    echo "<b>DIAGNOSTICO = </b> su IMC es normal😎";
}
elseif ($imc >= 25 && $imc <= 26.9) {
    echo "<b>DIAGNOSTICO = </b> segun su IMC usted tiene sobrepeso😒";
}
elseif ($imc == 27) {
    echo "<b>DIAGNOSTICO = </b> segun su IMC usted tiene obesidad🤢";
}
elseif ($imc >= 27 && $imc <= 29.9) {
    echo "<b>DIAGNOSTICO = </b> obesidad grado I. Riesgo relativo alto a desarrollar enfermedades cardiovasculares🐱‍👤";
}
elseif ($imc >=30 && $imc <=39.9) {
    echo "<b>DIAGNOSTICO = </b> obesidad grado II. Riego relativo muy alto para el desarrollo de enfermedades cardiovasculares🐱‍💻";
}
elseif ($imc >= 40) {
    echo "<b>DIAGNOSTICO = </b> obesidad gardo III. Extrema o morbida. Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares☢";
}
}
?>