<?php
try {
    // Créer la connexion
    $dsn = "sqlite:./maBDD.sqlite";
    $pdo = new PDO($dsn);
    // Requete SELECT
    $requete = "SELECT nom, prenom from maTable;";
    $tableau = $pdo->query($requete)->fetch();
    // Requete INSERT
    $insertion = "INSERT INTO maTable VALUES ('Agnes', 'LaPute')";
    $pdo->exec($insertion);
    // Requete préparé avec des points d'interrogations
    $requetePreparee = "SELECT nom, prenom FROM maTable WHERE nom = ?;";
    $reqPrep = $pdo->prepare($requetePreparee);
    //$nom = $_POST['nom']
    $reqPrep->bindValue(1,'Radepont');
    $reqPrep->execute();
    $tab = $reqPrep->fetchAll();
    // Requete préparée avec des paramètres nommés
    $requetePreparee02 = "SELECT nom, prenom FROM maTable WHERE nom = :nom;";
    $reqPrep02 = $pdo->prepare($requetePreparee02);
    $reqPrep02->bindValue(':nom','Agnes');
    $reqPrep02->execute();
    $tab02 = $reqPrep02->fetchAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}
