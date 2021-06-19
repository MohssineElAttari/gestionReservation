<?php
class Enfant
{
    private $idEnfant;
    private $ageEnfant;
    private $idUtilisateur;

    function __construct($age, $idUtil)
    {
        $this->ageEnfant = $age;
        $this->idUtilisateur = $idUtil;
    }

    public function getIdEnfant()
    {
        return $this->idEnfant;
    }
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($value)
    {
        $this->idUtilisateur = $value;
    }

    public function getAgeEnfant()
    {
        return $this->ageEnfant;
    }
    public function setAgeEnfant($value)
    {
        $this->ageEnfant = $value;
    }
}
