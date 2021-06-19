<?php
session_start();
require_once '../model/EnfantModel.php';
$enfantModel = new EnfantModel();
$enfants = $enfant->findAll();
if (isset($_POST['ajouter'])) {
    // echo $_POST['age'];
    $age = $_POST['age'];
    $idUtilisateur = $_SESSION['id'];
    echo '<script>alert("ok");</script>';
    $enfantModel->create(new enfant($age, $FidUtilisateur));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $enfantModel->delete($id);
}
