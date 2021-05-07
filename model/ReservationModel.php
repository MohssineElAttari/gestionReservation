<?php
include '../dao/IDao.php';
include '../classes/DataBase.php';
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
        $query = "INSERT INTO Reservation(id_utilisateur,id_bien,id_pension,date_entrer,date_sortie) VALUES (:idUtilisateur,:idBien,:idPension,:dateEntrer,:dateSortie)";

        $req = $this->connexion->getConnexion()->prepare($query);

        $req->execute([
            'idUtilisateur' => $obj->getIdUtilisateur(),
            'idBien' => $obj->getIdBien(),
            'idPension' => $obj->getIdPension(),
            'dateEntrer' => $obj->getDateEntrer(),
            'dateSortie' => $obj->getDateSortie(),
        ]) or die('SQL');
        header('Location: ../view/reservations.php');
    }
    public function update($obj)
    {
    }
    public function delete($id)
    {
        $query = "DELETE FROM Reservation WHERE id_utilisateur =" . $id;

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
    }
}
