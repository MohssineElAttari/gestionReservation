<?php
class Bien
{
    private $idBien;
    private $nom;
    private $vue;
    private $prix;
    private $image;

    //constructeur initialisation
    function __construct( $nom, $vue, $prix, $image)
    {
        $this->nom = $nom;
        $this->vue = $vue;
        $this->prix = $prix;
        $this->image = $image;
    }

    //getter and setter

    public function getIdBien()
    {
        return $this->idBien;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function SetNom($value): void
    {
        $this->nom = $value;
    }
    public function getVue()
    {
        return $this->vue;
    }

    public function SetVue($value): void
    {
        $this->vue = $value;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    public function SetPrix($value): void
    {
        $this->prix = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function SetImage($value): void
    {
        $this->image = $value;
    }
}
