<?php
require_once '../dao/IDao.php';
// require_once '../classes/DataBase.php';
require_once '../includes/autoload.inc.php';
// interface data access object
class BienModel extends DataBase implements IDao
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
        $query = "INSERT INTO Bien(nom,vue,prix,image) VALUES (:nom,:vue,:prix,:image)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'nom' => $obj->getNom(),
            'vue' => $obj->getVue(),
            'prix' => $obj->getPrix(),
            'image' => $obj->getImage(),
        ]) or die('SQL');
        header('Location: ../view/biens.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM bien WHERE id_bien =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/biens.php');
    }

    public function findAll()
    {
        $query = "select * from bien";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "select * from bien WHERE id_bien =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}
