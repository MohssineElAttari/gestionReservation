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
        // var_dump($obj);
        // return;
        // echo $obj->getPrenom();
        // return $obj->getIdRole()."<br>".$obj->getPrenom()."<br>".$obj->getNom()."<br>".$obj->getEmail()."<br>".$obj->getPassword();
        $query = "INSERT INTO utilisateur(id_role,nom,prenom,email,`password`) VALUES (:idRole,:Nom,:Prenom,:Email,:Password)";

        $req = $this->connexion->getConnexion()->prepare($query);

        return $req->execute([
            'idRole' => $obj->getIdRole(),
            'Nom' => $obj->getNom(),
            'Prenom' => $obj->getPrenom(),
            'Email' => $obj->getEmail(),
            'Password' => md5($obj->getPassword()),
        ]);
        // echo "<script>alert('bien inscription')</script>";
        // header('Location: ../view/register.php');
    }

    public function loginAuth($email, $password)
    {
        try {
            $pass = md5($password);
            $query = "select * from utilisateur WHERE email =  '$email'  and password = '$pass'";
            $req = $this->connexion->getConnexion()->prepare($query);
            $req->execute();
            return $req->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
