<?php


class Ville
{
private $nom;
private $departement;



    /**
     * Ville constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {

        $this->nom = $nom;
        $this->departement = $departement;
    }
    static $nbre;
    public function lePlusLong(){
        if (static::$nbre>$this->nom);
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public static function getNbre()
    {
        return self::$nbre;
    }

    /**
     * @param mixed $nbre
     */
    public static function setNbre($nbre)
    {
        self::$nbre = $nbre;
    }


    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        static::$nbre;
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