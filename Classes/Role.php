<?php
class Role
{
    private $idRole;
    private $libelle;

    function __construct($libelle)
    {
        $this->libelle = $libelle;
    }
    public function getIdRole()
    {
        return $this->idRole;
    }
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
