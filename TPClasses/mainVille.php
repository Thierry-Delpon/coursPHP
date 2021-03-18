<?php
require_once "./VilleAvecRegion.class.php";


$ville01 = new VilleAvecRegion("Nantes",44,"Loire-Atlantique");
echo $ville01;
echo "\n";
$ville02 = new VilleAvecRegion("Kourou",973, "Guyane-Française");
echo $ville02;
echo "\n";
$ville03 = new VilleAvecRegion("Cayenne",973,"Guyane-Française");
echo $ville03;
echo "\n";
echo Ville::getNbre();
