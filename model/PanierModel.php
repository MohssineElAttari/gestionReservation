<?php
require_once '../dao/IDao.php';
require_once '../includes/autoload.inc.php';
class PanierModel extends DataBase implements IDao
{
    private $connexion;
    function __construct()
    {
        $this->connexion = new Database();
    }

    public function create($obj)
    {

        

        
        // var_dump($obj);
        // echo $obj->getIdReservation();
        $query = "INSERT INTO panier(id_reservation,id_bien,date_entrer,date_sortie,id_pension) 
                    VALUES (:idReservation,:idBien,:dateEntrer,:dateSortie,:idPension)";

        $req = $this->connexion->getConnexion()->prepare($query);
    
        $req->execute([
            'idReservation' => $obj->getIdReservation(),
            'idBien' => $obj->getIdBien(),
            'dateEntrer' => $obj->getDateEntrer(),
            'dateSortie' => $obj->getDateSortie(),
            'idPension' => $obj->getIdPension(),//wach khasha tkon int waala chno
            //chno lproplem li kayn ya3ni ka
        ]) or die('SQL');
        
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM panier WHERE id_reservation =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/reservations.php');
    }

    public function findAll()
    {
        $query = "select * from panier";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "SELECT FROM panier WHERE id_reservation =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}
