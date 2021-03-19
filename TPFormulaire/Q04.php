<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TVA</title>
</head>
<body>
<!--
Si le type a cliqué sur le bouton calculé :
1) Je récupère les valeurs de prix_ht et tva
<?php
if  (isset($_POST['prix_ht'])) {
    $prix_ht = filter_input(INPUT_POST, 'prix_ht',FILTER_VALIDATE_FLOAT);
}
if  (isset($_POST['tva'])) {
    $tva = filter_input(INPUT_POST, 'tva',FILTER_VALIDATE_FLOAT);
}
?>
2) je calcule le montant_tva (prix_ht * tva)
<?php
$m_tva = $prix_ht * $tva / 100;
settype($m_tva,'float');
    $montant_tva = number_format($m_tva,2,'€',' ');
?>
3) Je calcule le prix_ttc (prix_ht + montant_tva)
<?php
    $prix_ttc = $prix_ht + $montant_tva;
?>
4) J'affiche tout ca bien joli dans les champs en readonly
// déjà fait dans le form

5) Facultatif : les deux premiers champs restent apres le clic sur "Calculer"
-->
<form method="post">
    <input type="number" step="0.1" name="prix_ht" placeholder="Prix HT" value="<?=$prix_ht?>">
    <input type="number" step="0.1" name="tva" placeholder="TVA %" value="<?=$tva?>">
    <input type="submit" value="Calculer">
    <input type="text" name="montant_tva" value="<?= $montant_tva ?>" readonly>
    <input type="text" name="prix_ttc" value="<?= $prix_ttc ?>" readonly>
</form>
</body>
</html>