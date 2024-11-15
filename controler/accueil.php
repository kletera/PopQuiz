<?php 
    $link='<link rel="stylesheet" href="./asset/style/accueil.css">';
    $script='<script src="./asset/script/accueil.js" defer></script>';


    // Connexion
    function dataConnexion(){
        //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
        if(empty($_POST["loginCo"]) || empty($_POST["passwordCo"])){
            return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
        }
    
        //2nd Etape de sécurité : nettoyage
        $loginCo = sanitize($_POST["loginCo"]);
        $passwordCo = sanitize($_POST["passwordCo"]);
    
        //3eme Etape de sécurité : Vérifier que les données sont au bon format
        if(!filter_var($loginCo,FILTER_VALIDATE_EMAIL)){
            return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Login pas au bon format !'];
        }
    
        return ["loginCo"=>$loginCo,"passwordCo"=>$passwordCo,"erreur"=>''];
    }
    
    if(isset($_POST['connexion'])){
        //je teste les données de connexion envoyés
        $tab = dataConnexion();
    
        //je regarde si je suis dans le cas d'erreur
        if($tab['erreur'] != ''){
            //si c'est le cas : j'affiche l'erreur
            $messageCo = $tab['erreur'];
        }else{
            $user= new Users($tab['loginCo']);
            //Si tout s'est bien passé :
            //Interroger la BDD pour récupérer les données de l'utilisateurs à partir du login entré
            $data = $user->readUserByEmail();
    
            //Tester si je suis dans le cas d'erreur (problème de communication avec la BDD)
            //Si c'est le cas, je reçois un string, si tout s'est passé je reçois un array
            if(gettype($data) == 'string'){
                $messageCo = $data;
            }else{
                //Tout s'est bien passé
                //Je vérifie la réponse de la BDD : vide ou pas ?
                //Si c'est vide : alors le login n'existe pas en BDD, et j'affiche un message d'erreur
                if(empty($data)){
                    $messageCo = "Erreur de Login et/ou de Mot de Passe !";
                }else{
                    //Si on trouve le login en BDD
                    //Je vérifie la correspondance des mots de passe
                    if(!password_verify($tab['passwordCo'],$data[0]['mdp_Users'])){
                        //Si les mots de passe ne correspondent pas, j'affiche un message d'erreur
                        $messageCo = "Erreur de Login et/ou de Mot de Passe !";
                    }else{
                        //Si les mots de passe correspondent, j'enregistre les données de l'utilisateur en SESSION, et j'affiche un message de confimation
                        $_SESSION['id_Users'] = $data[0]['id_Users'];
                        $_SESSION['pseudo_Users'] = $data[0]['pseudo_Users'];
                        $_SESSION['mdp_Users'] = $data[0]['mdp_Users'];
                        $_SESSION['email_Users'] = $data[0]['email_Users'];
                        $_SESSION['img_Users'] = $data[0]['img_Users'];
                        $_SESSION['id_Manga'] = $data[0]['id_Manga'];
                        $_SESSION['id_User_Type'] = $data[0]['id_User_Type'];
                        
                        header('Location:/MangaSky/MonCompte');
                    }
                }
            }
        }
    }

    // Inscription
    function dataInscription(){
        //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
        if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["verifpassword"])){
            return ["email"=>'',"password"=>'',"verifpassword"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
        }
        if($_POST["password"] !== $_POST["verifpassword"]){
            return ["email"=>'',"mdp"=>'',"erreur"=>'Mot de passe différent'];
        }
    
        //2nd Etape de sécurité : nettoyage
        $email = sanitize($_POST['email']);
        $password = sanitize($_POST['password']);
        $verifpassword = sanitize($_POST["verifpassword"]);
    
        //3eme Etape de sécurité : Vérifier que les données sont au bon format
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return ["email"=>'',"password"=>'',"verifpassword"=>'',"erreur"=>'Login pas au bon format !'];
        }
    
        //4eme Etape de sécurité : hasher le mot de passe
        $mdp = password_hash($verifpassword,PASSWORD_BCRYPT);
    
        return ["email"=>$email,"password"=>$password,"verifpassword"=>$mdp,"erreur"=>''];
    }
    // Enregistrement de l'utilisateur
    //Tester si le formulaire d'inscription m'est envoyé
    if(isset($_POST["inscription"])){
        //Je lance le test de mes données
        $tab = dataInscription();
    
        //Je vérifie si je suis dans un cas d'erreur
        if($tab['erreur'] != ''){
            $mesage=$tab['erreur'];
        }else{
            //Création de mon $user à partir de ManagerUser
            $user= new Users($tab['email']);
            
            //J'utilise les Setter pour donner à mon objet le nameUSer, firstNameUser et mdpUser
            $user->setEmail($tab['email'])->setMdp($tab['verifpassword']);
    
    
            //Je vérifie que le login est diponible
            if(empty($user->readUserByEmail())){
                //Si la réponse de la BDD est vide, alors le Login est disponible (car non trouvé en BDD), je peux donc l'utiliser.
                //Je lance l'ajout de mon utilisateur en BDD
                $mesage=$user->addUser();
                header('Location:/MangaSky/connexion');
                
    
            }else{
                //Si la réponse de la BDD n'est pas vide, alors ce le login est trouvé en BDD, donc le login n'est pas disponible, et je renvoie un message d'erreur
                $mesage="Ce Login existe déjà en BDD !";
            }
        }
    }
?>