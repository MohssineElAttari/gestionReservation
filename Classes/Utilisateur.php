<?php
class Utilisateur
{
    private $idUtilisateur;
    private $prenom;
    private $nom;
    private $email;
    private $password;
    private $idRole;

    function __construct($prenom, $nom, $email, $password, $idRole)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->idRole = $idRole;
    }
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function SetPassword($password)
    {
        $this->password = $password;
    }
    public function getIdRole()
    {
        return $this->idRole;
    }
    public function setRole($idRole)
    {
        $this->idRole = $idRole;
    }
}
