<?php

$numero1 = "10";
$numero2 = 20;

// Necesitem enmagatzenar en la següent variable el resultat
$resultat = 0;

// I aplicar el impost corresponent
$impost = 21;

// Pero tenim varios problemes que resoldre

// Aquesta comprovació no està del tot be i el resultat tampoc del tot
if ($numero1 > 5) {
    $numero2 += intval($numero1); // Sumar els dos números
    $resultat = $numero2 * (21 / 100); // Aplicar el impost i asignar el valor
}

// Podries resoldre-la?

// Imprimim el resultat de la mateixa operació
echo $resultat;

// Una vegada resolt, si tens ganes podries fer una funció per a resoldre
// aquest problema en futures? implementacions


//En la següent funció veiem el "gettype" que l'utilitzem per comprovar el tipus del valor d'una variable.
//el "intval" l'utilitzem per canviar el valor de la variable a integer.
//https://www.w3resource.com/php/function-reference/gettype.php


function sumar($numero1, $numero2) {
    if (gettype($numero1) !== "integer")
    $numero1 = intval($numero1);
    if (gettype($numero2) !== "integer")
    $numero2 = intval($numero2);
    return $numero1 + $numero2;
}

$resultat = sumar($numero1, $numero2) * (21 / 100);