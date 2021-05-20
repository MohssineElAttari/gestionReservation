<?php
require_once '../dao/IDao.php';
// require_once '../classes/DataBase.php';
require_once '../includes/autoload.inc.php';
// interface data access object
class TypeModel extends DataBase implements IDao
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Database();
    }

    public function create($obj)
    {
        // var_dump($obj);
        // echo $obj->getIdUtilisateur();
        $query = "INSERT INTO type(type) VALUES (:type)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'type' => $obj->getNom(),
        ]) or die('SQL');
        header('Location: ../view/types.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM type WHERE id =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/types.php');
    }

    public function findAll()
    {
        $query = "select * from type";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "select * from type WHERE id =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
