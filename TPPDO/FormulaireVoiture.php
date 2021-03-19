<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="FormulaireVoiture.php">
    <fieldset>
        <legend>Ajouter un nouveau client</legend><br>
        <label>Identifiant :
            <input type="text" id="identifiant" name="id_modele">
        </label><br>
        <label>Marque :
            <input type="text" id="marque" name="marque">
        </label><br>
        <label>Modèle :
            <input type="text" id="modele" name="modele">
        </label><br>
        <input type="radio" id="essence" name="carburant" value="essence">
        <label for="electrique">Essence</label><br>
        <input type="radio" id="diesel" name="carburant" value="diesel">
        <label for="electrique">Diesel</label><br>
        <input type="radio" id="GPL" name="carburant" value="GPL">
        <label for="electrique">GPL</label><br>
        <input type="radio" id="electrique" name="carburant" value="electrique">
        <label for="electrique">Electrique</label>
        <br>
        <input type="submit" value="Ajouter">
    </fieldset>

</form>

<?php
require_once './Modele.php';
require_once './ModeleDAO.php';
if (isset($_POST['id_modele'])&& !empty($_POST['id_modele'])){
    $idModele = filter_input(INPUT_POST, 'id_modele', FILTER_SANITIZE_STRING);
}
if (isset($_POST['marque'])&& !empty($_POST['marque'])){
    $marque = filter_input(INPUT_POST, 'marque', FILTER_SANITIZE_STRING);
}
if (isset($_POST['modele'])&& !empty($_POST['modele'])){
    $modele = filter_input(INPUT_POST, 'modele', FILTER_SANITIZE_STRING);
}
if (isset($_POST['carburant'])&& !empty($_POST['carburant'])){
    $carburant = filter_input(INPUT_POST, 'carburant', FILTER_SANITIZE_STRING);
}

//récupération des données

$modeleDAO = new ModeleDAO();
$m = new Modele($idModele, $marque, $modele, $carburant);
$modeleDAO->insert($m);
?>
</body>
</html>