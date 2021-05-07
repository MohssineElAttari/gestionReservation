<?php
class Reservation
{
    private $idUtilisateur;
    private $idBien;
    private $idPension;
    private $dateEntrer;
    private $dateSortie;
    private $codeReservation;

    //constructeur initialisation
    function __construct($idU, $idB, $idP, $dateE, $dateS, $codeReservation)
    {
        $this->idUtilisateur = $idU;
        $this->idBien = $idB;
        $this->idPension = $idP;
        $this->dateEntrer = $dateE;
        $this->dateSortie = $dateS;
        $this->codeReservation = $codeReservation;
    }

    //getter and setter
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function SetIdUtilisateur($value): void
    {
        $this->idUtilisateur = $value;
    }
    public function getIdBien()
    {
        return $this->idBien;
    }

    public function SetIdBien($value): void
    {
        $this->idBien = $value;
    }
    public function getIdPension()
    {
        return $this->idPension;
    }

    public function SetIdPension($value): void
    {
        $this->idPension = $value;
    }
    public function getDateEntrer()
    {
        return $this->dateEntrer;
    }

    public function SetDateEntrer($value): void
    {
        $this->dateEntrer = $value;
    }
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function SetDateSortie($value): void
    {
        $this->dateSortie = $value;
    }
    public function getCodeReservation()
    {
        return $this->codeReservation;
    }
 
    public function SetCodeReservation($value): void
    {
        $this->codeReservation = $value;
    }
}
