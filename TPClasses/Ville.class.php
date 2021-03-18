<?php


class Ville
{
private $nom;
private $departement;
private static $nbre = "";

    /**
     * Ville constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {

        $this->setNom($nom);
        $this->departement = $departement;

    }

    /**
     * @return mixed
     */
    public static function getNbre()
    {
        return self::$nbre;
    }



    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        if (strlen($this->nom) > strlen(static::$nbre)) {
            static::$nbre = $this->nom;
        }
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    public function __toString()
    {
        return"La ville $this->nom est du département $this->departement";
    }
}