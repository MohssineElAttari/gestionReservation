<?php
// require_once '../classes/DataBase.php';
require_once '../dao/IDao.php';
// require_once '../classes/Utilisateur.php';
require_once '../includes/autoload.inc.php';
class Utilisateur extends Database implements IDao
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new DataBase();
    }
    public function create($obj)
    {
        $query = "INSERT INTO `Utilisateur`(nom,prenom,email,`password`,id_role) VALUES(:nom,:prenom,:email,:`password`,:id_role";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute([
            'nom' => $obj->getNom(),
            'prenom' => $obj->getPrenom(),
            'email' => $obj->getEmail(),
            'password' => $obj->getPassword(),
            'id_role' => $obj->getIdRole(),
        ]) or die('SQL');
        header('Location: ../view/reservation.php');
    }
    public function update($obj)
    {
        # code...
    }
    public function delete($id)
    {
        $query = "DELETE FROM `utilisateur` WHERE id_utilisateur =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/reservation.php');
    }

    public function findAll()
    {
        $query = "select * from utilisateur";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        # code...
    }
}
