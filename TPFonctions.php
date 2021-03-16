<?php
// Exercice 2

function tri($param01, $param02){
    $paramMax = max($param01, $param02);
    $paramMin = min($param01, $param02);
    return "Dans l'ordre : $paramMax $paramMin \n";
}
echo tri(5,7);
echo tri(7,5);

// Exercice 1

function tirage($valeur){
    $nbTirage = 0;

    while (rand(0,999)!=$valeur){
        $nbTirage ++;
    }
    return $nbTirage;
}
echo "le nombre de tirage est de : ".tirage(555). "\n";

function nbEssai($param01) {
    $cpt = 0;
    // Tant que les deux nombres sont différents,
    // J'incrémente le cpt
    do {
        $cpt++;
    } while (rand(0,999) != $param01);
    return $cpt;
}
echo "le nombre de tirage est de : ".nbEssai(555)."\n";


// Exercice 3
function pgcd($param01, $param02) {
    // Tant que le résultat de la division euclidienne est différent de 0
    do {
        $reste = $param01 % $param02;
        $param01 = $param02;
        $param02 = $reste;
    } while($reste!=0);
    return $param01;
}
echo pgcd(342,120);