<?php
include_once '../model/ReservationModel.php';
include_once '../view/reservations.php';
$reservationModel = new ReservationModel();
$reservations = $reservationModel->findAll();
if (isset($_POST['ajouter'])) {

    $idUtilisateur = $_POST['idUtilisateur'];
    $idBien = $_POST['idBien'];
    $dateEntrer = $_POST['dateEntrer'];
    $dateSortie = $_POST['dateSortie'];
    $idPension = $_POST['idPension'];
    $codeReservation = $_POST['codeReservation'];

    echo '<script>alert("ok");</script>';
    $reservationModel->create(new Reservation($idUtilisateur, $idBien, $idPension, $dateEntrer, $dateSortie, $codeReservation));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $reser->delete($id);
}
