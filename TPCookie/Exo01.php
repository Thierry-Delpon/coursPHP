<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo01</title>

</head>
<?php

if (isset($_POST['fond']) & isset($_POST['texte'])){
    $fond = $_POST['fond'];
    $texte = $_POST['texte'];
    setcookie('fond', $fond);
    setcookie('texte', $texte);

}

?>
<body style="background-color: <?= $fond?>; color: <?= $texte ?>">
<form method="post" action="">
    <?php
    $tableauDeCouleur = ['rouge', 'vert', 'bleu'];
    ?>
    <label>Fond :
    <select name="fond" value="couleur" style="width: 300px">
        <?php
        foreach ($tableauDeCouleur as $couleur) {
            echo"<option value='$couleur'>$couleur</option>";
        }
        ?>
    </select>
    </label>
    <br>
    <br>
    <label>Texte :
        <select name="texte" value="couleur" style="width: 300px">
            <?php
            foreach ($tableauDeCouleur as $couleur) {
                echo"<option value='$couleur'>$couleur</option>";
            }
            ?>
        </select>
    </label>
    <br>
    <br>
    <input type="submit" name="changer" id="changer" value="Changer" style="width: 300px">
</form>

</body>
</html>

