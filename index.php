<?php
//CONTROLER DE LA PAGE D'ACCUEIL

//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/

//test de la valeur $path dans l'URL et import de la ressource
switch ($path) {

    case $path === "/PopQuiz/":
        include './controler/accueil.php';
        include './view/view_header.php';
        include './view/view_acceuil.html';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/moncompte";
        include './controler/compte.php';
        include './view/view_header.php';
        include './view/view_compte.php';
        include './view/view_footer.html';
        break;

    case $path === "/PopQuiz/listequiz":
        include './controler/listQuiz.php';
        include './view/view_header.php';
        include './view/view_listeQuizz.php';
        include './view/view_footer.html';
        break;
    case $path === "/PopQuiz/quizz1";
        include './controler/quizz1.php';
        include './view/view_quizz1.php';
        include './view/view_header.php';
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