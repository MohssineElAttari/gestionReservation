<?php
ob_start();
session_start();
error_reporting(0);

if (isset($_POST['login'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
        echo "<script>alert($error)</script>";
    } else {
        // Define $email and $password
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once '../model/AuthentificationModel.php';
        $authentification = new Authentification();

        $resultat = $authentification->loginAuth($email, $password);
        // print_r($resultat);
        if ($resultat != NULL) {

            $_SESSION['id'] = $resultat['id_utilisateur'];
            $_SESSION['nom'] = $resultat['nom'];
            $_SESSION['prenom'] = $resultat['prenom'];
            $_SESSION['username'] = $resultat['email'];

            if ($resultat['id_role'] == 1) {
                header("location:../view/reserver.php");
            } else if ($resultat['id_role'] == 2) {
                header("location:../view/reserver.php");
            }
        } else {
            echo "<script>alert('Email or Password is invalid')</script>";
        }
    }
} else if (isset($_POST['inscription'])) {

    // echo $_POST['nom'] . "<br>";
    // echo $_POST['prenom'] . "<br>";
    // echo $_POST['email'] . "<br>";
    // echo $_POST['password'] . "<br>";
    // echo $_POST['cpassword'] . "<br>";

    if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
        $error = "champ et vid";
        echo "<script>alert($error)</script>";
    } else {
        // Define $username and $password
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once '../model/AuthentificationModel.php';
        $authentification = new Authentification();

        $resultat = $authentification->inscription(new Utilisateur(2, $prenom, $nom, $email, $password));
        // $authentification->inscription(new Utilisateur(2, $prenom, $nom, $email, $password));
        // header("location:../view/login.php");

        if ($resultat != NULL) {
            echo "<script>alert('bien')</script>";
            header("location:../view/login.php");
        } else {
            echo "<script>alert('erreur')</script>";
        }
    }
}

ob_end_flush();
