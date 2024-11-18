<?php 
    $link='<link rel="stylesheet" href="./asset/style/compte.css">';
    $script="";

//Déclaration des variables d'affichage
$login = "";
$lastName = "";
$firstName = "";
$pseudo="";
$password="";
$session="";

//AFFICHER LES DONNES DE L'UTILISATEURS  ENREGISTREES EN SESSION
//1er Etape : je teste si j'ai bien des SESSIONS d'enregistré
if(isset($_SESSION['id_utilisateur'])){
    //2nd Etape : je transmets les données de SESSIONS à mes variables d'affichages
    $email = $_SESSION['email'];
    $lastName = $_SESSION['nom'];
    $firstName = $_SESSION['prenom'];
    $password = $_SESSION["mdp"];
    $session = $_SESSION['nom_session'];
}

//J'instancie mon header
$header = new ControlerHeader();
$header->displayNav();
?>