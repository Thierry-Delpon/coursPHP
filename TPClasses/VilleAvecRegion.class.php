<?php
require_once "./Ville.class.php";

class VilleAvecRegion extends Ville
{
    private $region;

    /**
     * VilleAvecRegion constructor.
     * @param $nom
     * @param $departement
     * @param $region
     */
    public function __construct($nom, $departement, $region )
    {
        parent::__construct($nom, $departement);
        $this->region = $region;

    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    public function __toString()
    {
        return parent::__toString()." et la region est $this->region";
    }
}