<?php
// require_once classes
require_once '../includes/autoload.inc.php';
// interface data access object
require_once '../dao/IDao.php';

class EnfantModel extends DataBase implements IDao
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
        $query = "INSERT INTO enfant(age,id_utilisateur) VALUES (:age,:idUtilisateur)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'age' => $obj->getAge(),
            'idUtilisateur' => $obj->getIdUtilisateur(),
        ]) or die('SQL');
        header('Location: ../view/biens.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM enfant WHERE id_enfant =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        // header('Location: ../view/biens.php');
    }

    public function findAll()
    {
        $query = "select * from enfant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "select * from enfant WHERE id_enfant =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
