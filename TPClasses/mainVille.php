<?php
require_once "./VilleAvecRegion.class.php";


$ville = new VilleAvecRegion("Nantes",44,"Loire-Atlantique");
echo $ville;
echo "\n";
$ville = new VilleAvecRegion("Kourou",973, "Guyane-Française");
echo $ville;
