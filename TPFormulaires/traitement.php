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
<?php
$message = "";
if (isset($_POST['nom']) || !empty($_POST['nom'])) {
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $message.= "le nom est vide \n";
}

if (isset($_POST['prenom']) || !empty($_POST['prenom'])) {
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
    $message.= "le prenom est vide \n";
}

if (isset($_POST['adresse']) || !empty($_POST['adresse'])) {
    $adresse = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
    $message.= "l'adresse' est vide \n";
}

if (isset($_POST['code_postal']) || !empty($_POST['code_postal'])) {
    $codePostal = filter_var($_POST['code_postal'], FILTER_SANITIZE_STRING);
    $message.= "le code postal est vide \n";
}

if (isset($_POST['ville']) || !empty($_POST['ville'])) {
    $ville = filter_var($_POST['ville'], FILTER_SANITIZE_STRING);
    $message.= "la ville est vide \n";
}
if (!empty($message)){
    echo "<script>alert('$message')</script>";
}
?>

<table border="1">
    <thead align="left" style="display: table-header-group">
    <tr>
    <td>Nom : <br><?php echo $_POST['nom']?></td>
    <td>Prenom : <br><?php echo $_POST['prenom']?></td>
    <td>Adresse : <br><?php echo $_POST['adresse']?></td>
    <td>CP : <br><?php echo $_POST['code_postal']?></td>
    <td>Ville : <br><?php echo $_POST['ville']?></td>
    </tr>
    </thead>
</table>
</body>
</html>