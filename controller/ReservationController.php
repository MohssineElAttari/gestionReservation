<?php

use function PHPSTORM_META\type;

require '../model/ReservationModel.php';
require '../model/PanierModel.php';
$reservationModel = new ReservationModel();
$panierModel = new PanierModel();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';


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
    $idUtilisateur = 1;
    // var_dump($obj) ;
    $reservationModel->create(new Reservation($idUtilisateur));
    $codeReservation = getIdReservation();

   
    //echo $obj ;
    try {
        if (isset($json) && !empty($json)) {
            try {
                // Display the value of json object
                // $idTarification = 1;
               
                foreach ($obj as $key => $value) {
                    $idBien = $key;
                    $dateEntrer = empty($value->{'dateEntre'}) ? null : $value->{'dateEntre'};
                    $dateSortie = empty($value->{'dateSortie'}) ? null : $value->{'dateSortie'};
                    $idPension = $value->{'pension'} ?? 1;//rah khasha tkon int
                    // $prix = $value->{'price'};
                    // $numberPlace = $value->{'numberPlace'};
                        $item = new Panier($codeReservation, $idBien, $dateEntrer, $dateSortie, $idPension);
                        $panierModel->create($item);
                        
                        
                           
                }
                echo json_encode([
                    "status" => "success",
                    "message" => "reservation success",
                    "data"=> $obj
                ]);
            } catch (Exception $e) {
                
                //echo 'Caught exception: ',  $e->getMessage(), "\n";
                echo json_encode($e->getMessage());
                
            }
        }
    } catch (Exception $e) {
        echo json_encode($e->getMessage());
        //echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
