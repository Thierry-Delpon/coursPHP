<?php
require_once "./Voiture.class.php";

$tesla = new Voiture("Rouge", "4","Tesla","X");
echo $tesla;
echo "\n";
$tesla->setModele("S");
echo $tesla;
echo "\n";
echo $tesla->getMarque();
echo "\n";
$tesla->jeRoule();