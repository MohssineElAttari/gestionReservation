<?php
require_once '../dao/IDao.php';
require_once '../includes/autoload.inc.php';
// require_once '../classes/DataBase.php';
class ReservationModel extends DataBase implements IDao
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
        $query = "INSERT INTO Reservation(id_utilisateur) VALUES (:idUtilisateur)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'idUtilisateur' => $obj->getIdUtilisateur(),
        ]) or die('SQL');
        //header('Location: ../view/reservations.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM Reservation WHERE id_reservation =" . $id;

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute() or die('SQL');

        header('Location: ../view/reservations.php');
    }

    public function findAll()
    {
        $query = "select * from reservation";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $query = "SELECT FROM Reservation WHERE id_reservation =" . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function getLastReservation(){
        $query = "SELECT id_reservation FROM Reservation ORDER BY id_reservation DESC LIMIT 1";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
}
