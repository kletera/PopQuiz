<?php
//CONTROLER DE LA PAGE D'ACCUEIL
session_start();
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/

include './utils/functions.php';

//test de la valeur $path dans l'URL et import de la ressource
switch ($path) {

    case $path === "/PopQuiz/":
        include './utils/env.php';
        include './model/model_utilisateur.php';
        include './controler/header.php';
        include './controler/accueil.php';
        include './view/view_header.php';
        include './view/view_accueil.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/moncompte";
        include './controler/header.php';
        include './controler/compte.php';
        include './view/view_header.php';
        include './view/view_compte.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/moncompteAdmin";
        include './controler/header.php';
        include "./controler/compteAdmin.php";
        include './view/view_header.php';
        include './view/view_compte_admin.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/listequiz":
        include './controler/header.php';
        include './controler/listQuiz.php';
        include './view/view_header.php';
        include './view/view_listeQuizz.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/quizz1";
        include './controler/header.php';
        include './controler/quizz1.php';
        include './view/view_header.php';
        include './view/view_quizz1.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/quizzHTML";
        include './controler/header.php';
        include "./controler/presentationQuizz.php";
        include './view/view_header.php';
        include './view/view_presentationQuizz1.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/deconnexion";
        include "./controler/deco.php";
        break;
    //page pardefault
    default :
        echo '404';
        break;




}