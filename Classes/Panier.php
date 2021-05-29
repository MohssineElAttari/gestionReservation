<?php
class Panier
{
    private $idReservation;
    private $idBien;
    private $dateEntrer;
    private $dateSortie;
    private $idPension;

    function __construct($idReservation, $idBien, $dateEntrer, $dateSortie, $idPension)
    {
        $this->idReservation = $idReservation;
        $this->idBien = $idBien;
        $this->dateEntrer = $dateEntrer;
        $this->dateSortie = $dateSortie;
        $this->idPension = $idPension;
    }
    public function getIdReservation()
    {
        return $this->idReservation["id_reservation"];
    }
    public function setIdReservation($value)
    {
        $this->idReservation = $value;
    }
    public function getIdBien()
    {
        return $this->idBien;
    }
    public function setIdBien($value)
    {
        $this->idBien = $value;
    }
    public function getDateEntrer()
    {
        return $this->dateEntrer;
    }
    public function setDateEntrer($value)
    {
        $this->dateEntrer = $value;
    }
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    public function setDateSortie($value)
    {
        $this->dateSortie = $value;
    }
    public function getIdPension()
    {
        return $this->idPension;
    }
    public function setIdPension($value)
    {
        $this->idPension = $value;
    }
}
