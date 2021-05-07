<?php
include_once '../model/UtilisateurModel.php';
include_once '../view/Utilisateur.php';
$roleModel = new RoleModel();
$roles = $roleModel->findAll();
if (isset($_POST['ajouter'])) {
    echo $_POST['libelle'];

    $libelle = $_POST['libelle'];
    
    echo '<script>alert("ok");</script>';
    $roleModel->create(new Role($libelle));
}
if (isset($_GET['delete'])) {
    echo '<script>alert("ok");</script>';
    $id = $_GET['delete'];

    $roleModel->delete($id);
}

