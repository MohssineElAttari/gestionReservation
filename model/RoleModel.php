<?php
require_once '../classes/DataBase.php';
require_once '../classes/Role.php';
require_once '../dao/IDao.php';
class RoleModel extends DataBase implements IDao
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Database();
    }

    public function create($obj)
    {
        var_dump($obj);
        echo $obj->getLibelle();
        $query = "INSERT INTO role(libelle) VALUES (:libelle)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'libelle' => $obj->getLibelle(),
        ]) or die('SQL');
        header('Location: ../view/reservation.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM `role` WHERE id_role =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/reservation.php');
    }

    public function findAll()
    {
        $query = "select * from role";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
    }
}
