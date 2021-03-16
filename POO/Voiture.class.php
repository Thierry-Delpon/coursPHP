<?php
require_once './Vehicule.class.php';

class Voiture extends Vehicule
{
    private $marque;
    private $modele;

    /**
     * Voiture constructor.
     * @param $couleur
     * @param $nbRoue
     * @param $marque
     * @param $modele
     */
    public function __construct($couleur, $nbRoue, $marque, $modele)
    {
        parent::__construct($couleur, $nbRoue);
        $this->marque = $marque;
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function __toString()
    {

        return "
        Couleur :". parent::getCouleur(). "\n
        Marque : $this->marque, Modele : $this->modele";
    }

}