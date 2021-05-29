<?php
require_once '../model/TypeModel.php';
$typeModel = new TypeModel();
$typeBiens = $typeModel->findAll();

if (isset($_POST['ajouter'])) {
    echo $_POST['type'];

    $type = $_POST['type'];

    echo '<script>alert("ok");</script>';
    $typeModel->create(new TypeBien($type));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $typeModel->delete($id);
}