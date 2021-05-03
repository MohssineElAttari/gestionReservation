<?php
class DataBase
{
    private $connexion;
    function __construct()
    {
        $host = 'localhost';
        $dbname = 'reservation';
        $username = 'root';
        $password = '';

        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (Exception $Ex) {
            die('Erreur : ' . $Ex->getMessage());
        }
    }
    public function getConnexion (){
        return $this->connexion;
    }
}
