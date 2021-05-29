<?php
class Reservation
{
    private $idReservation;
    private $idUtilisateur;
    private $dateCreation;

    //constructeur initialisation
    function __construct($idU)
    {
        $this->idUtilisateur = $idU;
    }

    //getter and setter
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
    public function SetIdUtilisateur($value): void
    {
        $this->idUtilisateur = $value;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
