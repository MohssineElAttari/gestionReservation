<?php

use function PHPSTORM_META\type;

session_start();
require '../model/ReservationModel.php';
require '../model/PanierModel.php';
$reservationModel = new ReservationModel();
$panierModel = new PanierModel();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if (empty(@$_SESSION['id'])) {
    header('Location: ../view/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../view/login.php');
}
$_SESSION['LogOut'] = '../view/reserver.php?logout=1';
switch ($action) {
    case 'add':
        addReservation();
        break;
    case 'edit':
        # code...
        break;
    case 'delete':
        # code...
        break;
    case 'index':
        $reservations = $reservationModel->findAll();
        break;
    default:
        $reservations = $reservationModel->findAll();
        break;
}
function getIdReservation()
{
    global $reservationModel;
    $idReservations = $reservationModel->getLastReservation();
    return $idReservations;
}
function addReservation()
{
    global $reservationModel;
    global $panierModel;
    $json = file_get_contents('php://input');

    // Use json_decode() function to decode a string
    $obj = json_decode($json);
    $idUtilisateur = $_SESSION['id'];
    // var_dump($obj) ;
    $reservationModel->create(new Reservation($idUtilisateur));
    $codeReservation = getIdReservation();

    //echo $obj ;
    if (isset($json) && !empty($json)) {
        try {

            foreach ($obj as $key => $value) {
                $idBien = $key;
                $dateEntrer = empty($value->{'dateEntre'}) ? null : $value->{'dateEntre'};
                $dateSortie = empty($value->{'dateSortie'}) ? null : $value->{'dateSortie'};
                $idPension = $value->{'pension'} ?? 1;
                $age = $value->{'age'} ;
                $item = new Panier($codeReservation, $idBien, $dateEntrer, $dateSortie, $idPension);
                $panierModel->create($item);
            }
            echo json_encode([
                "status" => "success",
                "message" => "reservation success",
                "data" => $obj
            ]);
        } catch (Exception $e) {
            echo json_encode($e->getMessage());
        }
    } else {
        echo json_encode([
            "status" => "fiald",
            "message" => "error",
            "data" => null
        ]);
    }
}
