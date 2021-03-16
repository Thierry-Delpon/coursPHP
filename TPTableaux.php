<?php
$info[] = "Hugo";
$info[] = "Beauséjour";
$info[] = 23;

var_dump($info);
$nom["Radepont"] = $info;
var_dump($nom);


$tabQ2 = ["Delpon" => ["prenom"=>"Thierry","ville"=>"Kourou", "age"=>28],"Morane" => ["prenom"=> "Bob", "ville"=>"Nantes", "age"=>35]];
var_dump($tabQ2);

foreach ($tabQ2 as $valeurs) {
    foreach ($valeurs as $cle => $v){
        echo"$cle - $v \n";
    }
    echo "--------------------- \n";
}


$mails = ['jean@eni.fr', 'fred@linux.net', 'lea@renault.fr', 'caroline@eni.fr','contact@eni-ecole.fr', 'valentina@ferrari.it', 'melanie@eni-ecole.fr','philippe@eni.fr', 'typhaine@belfort.fr', 'louis@leparisien.fr'];
var_dump($mails);
$fqdns =[];

// Parcourir le tableau
foreach ($mails as $mail) {

// Exploser chaque adresse mail pour récupérer le "apres @"
    $fqdn = explode('@', $mail)[1];

// Incrémenter le compteur en fonction du FQDN
    if (isset($fqdns[$fqdn])) {
        $fqdns[$fqdn]++;
    } else {
        $fqdns[$fqdn] = 1;
    }
}
// Affichage
var_dump($fqdns);