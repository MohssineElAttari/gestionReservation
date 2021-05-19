<?php
require_once '../model/ReservationModel.php';
$reservationModel = new ReservationModel();


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

function addReservation()
{

    $json = file_get_contents('php://input');

    // Use json_decode() function to
    // decode a string
    $obj = json_decode($json);

    // var_dump($obj) ;


    if (isset($json) && !empty($json)) {

        
        // Display the value of json object
        

        foreach ($obj as $key => $value) {
            echo "bien_id : ". $key . "\n";
            echo "numberPlace : " . $value->{'numberPlace'} . "\n";
            echo "dateEntre : " . $value->{'dateEntre'} . "\n";
            echo "dateSortie : " . $value->{'dateSortie'} . "\n";
            echo "price : " . $value->{'price'} . "\n";
            
        }
        
        // $idUtilisateur = $_POST['idUtilisateur'];
        // $idBien = $_POST['idBien'];
        // $dateEntrer = $_POST['dateEntrer'];
        // $dateSortie = $_POST['dateSortie'];
        // $idPension = $_POST['idPension'];
        // $codeReservation = $_POST['codeReservation'];
        // $reservationModel->create(new Reservation($idUtilisateur, $idBien, $idPension, $dateEntrer, $dateSortie, $codeReservation));

    } else {
        echo json_encode($json);
    }
}

// if (isset($_GET['delete'])) {
//     echo '<script>alert("ok");</script>';
//     $id = $_GET['delete'];

//     $reser->delete($id);
// }
