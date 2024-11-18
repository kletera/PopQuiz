<?php
class ControlerHeader{
    //Attribut
    private ?string $class;
    private ?string $classNav;
    private ?string $linkCompte;

    //Constructeur
    public function __construct(){
        //Déclaration des variables d'affichages
        $this->class = ""; //J'affiche les formulaires de Connexion et d'Inscription
        $this->classNav = "disNone"; //J'enlève les liens Mon Compte et Déconnexion
        $this->linkCompte="";
    }

    //Getter et Setter
    public function getClass(): ?string { return $this->class; }
    public function setClass(?string $class): self { $this->class = $class; return $this; }

    public function getClassNav(): ?string { return $this->classNav; }
    public function setClassNav(?string $classNav): self { $this->classNav = $classNav; return $this; }
    public function getLinkCompte(): ?string { return $this->linkCompte; }
    public function setLinkCompte(?string $linkCompte): self { $this->linkCompte = $linkCompte; return $this; }

    //Méthode pour afficher le menu de navigation selon si on est conecté ou pas
    public function displayNav():void{
        //Je vérifie si je suis connecté :
        if(isset($_SESSION['id_utilisateur'])){
            //Si je suis connecté, je passe la class displayNone à la section possédant mes formulaires Inscription et Connexion pour les enlever
            //Et j'efface cette class de mes liens Mon Compte et Déconnexion, pour les afficher
            $this->setClass("disNone");
            $this->setClassNav("");
        }
    }
     public function compteLink():void{
         if($_SESSION['id_roleUtilisateur']==2){
             $this->setLinkCompte("/PopQuiz/moncompte");
         }else{
             $this->setLinkCompte("/PopQuiz/moncompteAdmin");
         }
     }
     
}
?>