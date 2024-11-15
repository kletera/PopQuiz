<?php
class Utilisateur{
    private ?int $idUsers;
    private ?string $prenom;
    private ?string $nom;
    private ?string $email;
    private ?string $mdp;
    private ?string $nomSession;
    private ?Role $idRole;
    // Constructeur
    public function __construct(?string $email){
        $this->email=$email;
    }
    // GETTER
    public function getIdUsers():?int{
        return $this->idUsers;
    }
    public function getPrenom():?string{
        return $this->prenom;
    }
    public function getNom():?string{
        return $this->nom;
    }
    public function getEmail():?string{
        return $this->email;
    }
    public function getMdp():?string{
        return $this->mdp;
    }
    public function getNomSession():?string{
        return $this->nomSession;
    }
    public function getIdRole():?string{
        return $this->idRole;
    }

    // SETTER
    public function setIdUsers(?int $idUsers):self{
        $this->idUsers = $idUsers;
        return $this;
    }
    public function setPrenom(?string  $prenom):self{
        $this->prenom = $prenom;
        return $this;
    }
    public function setNom(?string $nom):self{
        $this->nom = $nom;
        return $this;
    }
    public function setEmail(?string $email):self{
        $this->email = $email;
        return $this;
    }
    public function setMdp(?string $mdp):self{
        $this->mdp = $mdp;
        return $this;
    }
    public function setNomSession(?string $nomSession):self{
        $this->nomSession = $nomSession;
        return $this;
    }
    public function setIdRole(?Role $idRole):self{
        $this->idRole = $idRole;
        return $this;
    }

    // METHODE
    function addUser():string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=projetquizz','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        //Récupération des données de l'objet
        $prenom = $this->getPrenom();
        $nom = $this->getNom();
        $email = $this->getEmail();
        $mdp = $this->getMdp();

        //Try...Catch
        try{
            //2nd Etape : préparer ma requête INSERT INTO
            $req = $bdd->prepare('INSERT INTO utilisateur(prenom, nom,email, mdp) VALUE (?,?,?,?)');

            //3eme Etape : Binding de Paramètre pour relier chaque ? à sa donnée
            $req->bindParam(1,$prenom,PDO::PARAM_STR);
            $req->bindParam(2,$nom,PDO::PARAM_STR);
            $req->bindParam(3,$email,PDO::PARAM_STR);
            $req->bindParam(4,$mdp,PDO::PARAM_STR);

            //4eme Etape : exécution de la requête
            $req->execute();

            //5eme Etape : Retourne un message de confirmation
            return "$email, a été enregistré avec succès !";
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }

    function readUsers():array | string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


        //Try...Catch
        try{
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_Users, email_Users, mdp_Users FROM users');

            //3eme Etape : executer la requête
            $req->execute();

            //4eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //5eme Etape : je retourne mes $data
            return $data;
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }

    //Fonction pour récupérer un utilisateurs en BDD selon un login précis
    //Param : string
    //Return : array | string
    function readUserByEmail():array | string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Récupération du login depuis l'objet
        $email = $this->getEmail();

        //Try...Catch
        try{
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_Users, email_Users, mdp_Users FROM users WHERE email_Users = ?');

            //3Eme Etape : introduire le login de l'utilisateur dans ma requête avec du Binding de Paramètre
            $req->bindParam(1,$email,PDO::PARAM_STR);

            //4eme Etape : executer la requête
            $req->execute();

            //5eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //6eme Etape : je retourne mes $data
            return $data;
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }
}
?>