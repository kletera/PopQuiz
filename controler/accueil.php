<?php
$link = '<link rel="stylesheet" href="./asset/style/accueil.css">';
$script = '<script src="./asset/script/accueil.js" defer></script>';

class ControlerAccueil
{
    private ?string $message;
    private ?string $messageCo;

    public function __construct()
    {
        $this->message = '';
        $this->messageCo = '';
    }

    //Getter et Setter
    public function getMessage(): ?string
    {
        return $this->message;
    }
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getMessageCo(): ?string
    {
        return $this->messageCo;
    }
    public function setMessageCo(?string $messageCo): self
    {
        $this->messageCo = $messageCo;
        return $this;
    }


    // Inscription
    function inscriptionFormInspection()
    {
        //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
        if (empty($_POST["email"]) || empty($_POST["mdp"]) || empty($_POST["verifMdp"])) {
            return ["email" => '', "mdp" => '', "erreur" => "Veuillez remplir l'email et le mot de passe !"];
        }
        if ($_POST["mdp"] !== $_POST["verifMdp"]) {
            return ["email" => '', "mdp" => '', "erreur" => 'Mots de passe différents'];
        }

        //2nd Etape de sécurité : nettoyage
        $email = sanitize($_POST['email']);
        $mdp = sanitize($_POST['mdp']);
        $nom = sanitize($_POST['nom']);
        $prenom = sanitize($_POST['prenom']);

        //3eme Etape de sécurité : Vérifier que les données sont au bon format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ["email" => '', "mdp" => '', "prenom" => '', "nom" => '', "erreur" => "L'email n'est pas au bon format !"];
        }

        //4eme Etape de sécurité : hasher le mot de passe
        $mdp = password_hash($mdp, PASSWORD_BCRYPT);

        return ["email" => $email, "mdp" => $mdp, "prenom" => $prenom, "nom" => $nom, "erreur" => ''];
    }


    public function registerUser()
    {
        if (isset($_POST['submit'])) {
            $tab = $this->inscriptionFormInspection();
            if ($tab['erreur'] != '') {
                $this->setMessage($tab['erreur']);
            } else {
                $newUser = new Utilisateur($tab['email']);
                $newUser->setEmail($tab['email'])->setMdp($tab['mdp'])->setNom($tab['nom'])->setPrenom($tab['prenom']);
                if (empty($newUser->readUserByEmail())) {
                    $this->setMessage($newUser->addUser());
                } else {
                    $this->setMessage('Cet email existe déjà.');
                }
            }
        }
    }


    // Connexion
    public function connectionFormInspection()
    {
        //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
        if (!isset($_POST["emailCo"]) || empty($_POST["emailCo"])) {
            return ["emailCo" => "", "mdpCo" => "", "erreur" => "Veuillez entrer un email."];
        }
        if (!isset($_POST["mdpCo"]) || empty($_POST["mdpCo"])) {
            return ["emailCo" => "", "mdpCo" => "", "erreur" => "Veuillez entrer un mot de passe."];}

            //2nd Etape de sécurité : nettoyage
            $emailCo = sanitize($_POST["emailCo"]);
            $mdpCo = sanitize($_POST["mdpCo"]);

            //3eme Etape de sécurité : Vérifier que les données sont au bon format
            if (!filter_var($emailCo, FILTER_VALIDATE_EMAIL)) {
                return ["emailCo" => '', "mdpCo" => '', "erreur" => 'Email pas au bon format !'];
            }

            return ["emailCo" => $emailCo, "mdpCo" => $mdpCo, "erreur" => ''];
        }


    public function logInUser()
    {
        if (isset($_POST['connexion'])) {
            //je teste les données de connexion envoyés
            $tab = $this->connectionFormInspection();

            //je regarde si je suis dans le cas d'erreur
            if ($tab['erreur'] != '') {
                //si c'est le cas : j'affiche l'erreur
                $this->setMessageCo($tab['erreur']) ;
            } else {
                $utilisateur = new Utilisateur($tab['emailCo']);
                //Si tout s'est bien passé :
                //Interroger la BDD pour récupérer les données de l'utilisateurs à partir du login entré
                $data = $utilisateur->readUserByEmail();

                //Tester si je suis dans le cas d'erreur (problème de communication avec la BDD)
                //Si c'est le cas, je reçois un string, si tout s'est passé je reçois un array
                if (gettype($data) == 'string') {
                    $this->setMessageCo($data)  ;
                } else {
                    //Tout s'est bien passé
                    //Je vérifie la réponse de la BDD : vide ou pas ?
                    //Si c'est vide : alors le login n'existe pas en BDD, et j'affiche un message d'erreur
                    if (empty($data)) {
                        $this->setMessageCo("Erreur dans l'email et/ou dans le mot de passe !");
                    } else {
                        //Si on trouve le login en BDD
                        //Je vérifie la correspondance des mots de passe
                        if (!password_verify($tab['mdpCo'], $data[0]['mdp'])) {
                            var_dump(password_verify($tab['mdpCo'], $data[0]['mdp']));
                            print_r($data[0]['mdp']);
                            print_r($tab['mdpCo']);
                            //Si les mots de passe ne correspondent pas, j'affiche un message d'erre(ur
                            $this->setMessageCo("Erreur dans l'email et/ou dans le mot de passe !");
                        } else {
                            //Si les mots de passe correspondent, j'enregistre les données de l'utilisateur en SESSION, et j'affiche un message de confimation
                            $_SESSION['mdp'] = $data[0]['mdp'];
                            $_SESSION['email'] = $data[0]['email'];
                            $_SESSION['id_utilisateur'] = $data[0]['id_utilisateur'];
                            $_SESSION['nom'] = $data[0]['nom'];
                            $_SESSION['prenom'] = $data[0]['prenom'];

                            $this->setMessageCo("{$_SESSION['email']} connecté avec succès!");
                        }
                    }
                }
            }
        }
    }
}

$controler = new ControlerAccueil();
$controler->registerUser();
$controler->logInUser();


