<?php
require_once '../model/BienModel.php';
require_once '../view/biens.php';
$bienModel = new BienModel();
$biens = $bienModel->findAll();
if (isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $vue = $_POST['vue'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];
    
    echo '<script>alert("ok");</script>';
    $bienModel->create(new Bien($nom,$vue,$prix,$image));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $reser->delete($id);
}