<?php
require_once '../dao/IDao.php';
require_once '../includes/autoload.inc.php';
class PensionModel extends DataBase implements IDao
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
        $query = "INSERT INTO pension(id_pension,nom,id_tarification) VALUES (:idPension,:nom,idTarification)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'idPension' => $obj->getIdPension(),
            'nom' => $obj->getNom(),
            'idTarification' => $obj->getIdTarification(),
        ]) or die('SQL');
        header('Location: ../view/pension.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM pension WHERE id_pension =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/pension.php');
    }

    public function findAll()
    {
        $query = "select * from pension";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "SELECT FROM pension WHERE id_pension =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}
