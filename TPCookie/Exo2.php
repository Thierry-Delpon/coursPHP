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
<form method="post" action="Exo2.php">
    Login : <input type="text" name="login" value="<?php if (isset($_COOKIE['login'])) {
        echo $_COOKIE['login'];
    }?>"placeholder="login"><br>
    Mot de passe : <input type="password" name="MDP" value="<?php if (isset($_COOKIE['MDP'])) {
        echo $_COOKIE['MDP'];
    }?>"placeholder="MDP"><br>
    Conserver ses informations pendant <input type="number" name="nbJours" id="nbJours"> jours <br>
    <input type="submit" value="Se connecter">
</form>
<?php
if (isset($_POST['login']) && isset($_POST['MDP']) && isset($_POST['nbJours'])) {
    $login = $_POST['login'];
    $MDP = $_POST['MDP'];
    $nbJours = $_POST['nbJours'];
    setcookie('login', $login, time()+($nbJours*24*60*60));
    setcookie('MDP', $MDP, time()+($nbJours*24*60*60));
}
?>
</body>
</html>

