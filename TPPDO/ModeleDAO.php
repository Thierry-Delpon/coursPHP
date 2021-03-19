<?php
require_once 'ConnectionProvider01.php';

class ModeleDAO
{
    public function selectAll(){
        try {


        $pdo = ConnectionProvider01::getConnection();
        $requete = "SELECT id_modele, marque, modele, carburant FROM modeles;";
        $tableauDeResultat = $pdo->query($requete)->fetchAll();
        } catch (PDOException $e) {
            echo "PDOException";
        }

        return $tableauDeResultat;
    }

    public function insert(Modele $modeleFormulaire)
    {
        {
            try {
               // $tableau = [];
                $pdo = ConnectionProvider01::getConnection();
                $requete = "INSERT INTO modeles VALUES (:id_modele, :marque, :modele, :carburant);";
                $reqPrep = $pdo->prepare($requete);
                $reqPrep->bindValue(':id_modele', $modeleFormulaire->getIdModele());
                $reqPrep->bindValue(':marque', $modeleFormulaire->getMarque());
                $reqPrep->bindValue(':modele', $modeleFormulaire->getModele());
                $reqPrep->bindValue(':carburant', $modeleFormulaire->getCarburant());
                $reqPrep->execute();
               // $tableau = $reqPrep->fetchAll();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //return $tableau;
        }
    }


}