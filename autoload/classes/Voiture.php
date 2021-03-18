<?php


class Voiture
{

    private $marque;
    private $modele;

    /**
     * Voiture constructor.
     * @param $marque
     * @param $modele
     */
    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function __toString()
    {
        return "Marque : $this->marque, Modele : $this->modele";
    }

}