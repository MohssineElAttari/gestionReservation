<?php
require_once '../model/PensionModel.php';
$pensionModel = new PensionModel();
$pensions = $pensionModel->findAll();
if (isset($_POST['ajouter'])) {
    echo $_POST['nom'];

    $nom = $_POST['nom'];
    $idTarification = $_POST['idTarification'];

    echo '<script>alert("ok");</script>';
    $pensionModel->create(new Pension($nom,$idTarification));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("delet");</script>';
    $id = $_GET['delete'];

    $roleModel->delete($id);
}



