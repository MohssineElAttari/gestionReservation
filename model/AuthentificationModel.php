<?php

require_once '../dao/IDao.php';
require_once '../includes/autoload.inc.php';
class Authentification extends DataBase
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Database();
    }

    public function inscription($obj)
    {
        var_dump($obj);
        echo $obj->getPrenom();
        $query = "INSERT INTO utilisateur(id_role,nom,prenom,email,password) VALUES (:idRole,:Nom,:Prenom,:Email)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'id_role' => $obj->getIdRole(),
            'nom' => $obj->getgetPrenom(),
            'prenom' => $obj->getNom(),
            'email' => $obj->getEmail(),
            'password' => $obj->getPassword(),
        ]) or die('SQL');
        header('Location: ../view/register.php');
    }

    public function loginAuth($email, $password)
    {
        try {
            // $pass = md5($password);
            $query = "select * from utilisateur WHERE email =  '$email'  and password = '$password'";
            $req = $this->connexion->getConnexion()->prepare($query);
            $req->execute();
            return $req->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
