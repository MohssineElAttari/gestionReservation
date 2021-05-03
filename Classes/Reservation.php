<?php
class Reservation
{
    private $idUtilisateur;
    private $idBien;
    private $idPension;
    private $dateEntrer;
    private $dateSortie;
}
//constructeur initialisation
function __construct($idU, $idB, $idP, $dateE, $dateS)
{
    $this->idUtilisateur = $idU;
    $this->idBien = $idB;
    $this->idPension = $idP;
    $this->dateEntrer = $dateE;
    $this->dateSortie = $dateS;
}

//getter and setter
public function getIdUtilisateur()
{
    return $this->$this->idUtilisateur;
}
?>