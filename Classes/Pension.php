<?php
class Pension
{
    private $idPension;
    private $nom;
    private $idTarification;

    function __construct($nom, $idTarification)
    {
        $this->nom = $nom;
        $this->idTarification = $idTarification;
    }
    public function getIdPension()
    {
        return $this->idPension;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getIdTarification()
    {
        return $this->idTarification;
    }
    public function setIdTarification($idTarification)
    {
        $this->idTarification = $idTarification;
    }
}
