<?php
require_once '../model/PanierModel.php';
$panierModel = new PanierModel();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';


switch ($action) {
    case 'add':
        addPanier();
        break;
    case 'edit':
        # code...
        break;
    case 'delete':
        # code...
        break;
    case 'index':
        $paniers = $panierModel->findAll();
        break;
    default:
        $paniers = $panierModel->findAll();
        break;
}

function addPanier()
{
    global $panierModel;
    $json = file_get_contents('php://input');

    // Use json_decode() function to decode a string
    $obj = json_decode($json);
    // var_dump($obj) ;

    if (isset($json) && !empty($json)) {

        // Display the value of json object
        $idUtilisateur = 1;
        $codePanier = 1;
        $idPension = 1;

        foreach ($obj as $key => $value) {
            $idBien = $key;
            $dateEntrer = $value->{'dateEntre'};
            $dateSortie = $value->{'dateSortie'};
            $prix = $value->{'price'};
            $numberPlace = $value->{'numberPlace'};
            $panierModel->create(new Panier($idUtilisateur, $idBien, $idPension, $dateEntrer, $dateSortie, $codePanier));
        }

        echo json_encode($json);



        // $idUtilisateur = $_POST['idUtilisateur'];
        // $idBien = $_POST['idBien'];
        // $dateEntrer = $_POST['dateEntrer'];
        // $dateSortie = $_POST['dateSortie'];
        // $idPension = $_POST['idPension'];
        // $codePanier = $_POST['codePanier'];
        // $panierModel->create(new Panier($idUtilisateur, $idBien, $idPension, $dateEntrer, $dateSortie, $codePanier));

    } else {
        echo json_encode($json);
    }
}

// if (isset($_GET['delete'])) {
//     echo '<script>alert("ok");</script>';
//     $id = $_GET['delete'];

//     $reser->delete($id);
// }
