<?php
class Utilisateur
{
    private ?int $id_user;
    private ?string $prenom;
    private ?string $nom;
    private ?string $email;
    private ?string $mdp;
    private ?string $nom_session;

    // Constructeur
    public function __construct(?string $email)
    {
        $this->email = $email;
    }
    // GETTER
    public function getIdUser(): ?int
    {
        return $this->id_user;
    }
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function getMdp(): ?string
    {
        return $this->mdp;
    }
    public function getNomSession(): ?string
    {
        return $this->nom_session;
    }

    // SETTER
    public function setIdUsers(?int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }
    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;
        return $this;
    }
    public function setNomSession(?string $nom_session): self
    {
        $this->nom_session = $nom_session;
        return $this;
    }


    // METHODE
    function addUser(): string
    {
        //Récupération des données de l'objet
        $prenom = $this->getPrenom();
        $nom = $this->getNom();
        $email = $this->getEmail();
        $mdp = $this->getMdp();
        $role= 1;

        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO("mysql:host={$_ENV['DBhost']};dbname={$_ENV['DBname']}", "{$_ENV['login']}", "{$_ENV['password']}", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



        //Try...Catch
        try {
            //2nd Etape : préparer ma requête INSERT INTO
            $req = $bdd->prepare('INSERT INTO utilisateur(prenom, nom, email, mdp, id_roleUtilisateur) VALUE (?,?,?,?,?)');

            //3eme Etape : Binding de Paramètre pour relier chaque ? à sa donnée
            $req->bindParam(1, $prenom, PDO::PARAM_STR);
            $req->bindParam(2, $nom, PDO::PARAM_STR);
            $req->bindParam(3, $email, PDO::PARAM_STR);
            $req->bindParam(4, $mdp, PDO::PARAM_STR);
            $req->bindParam(5, $role, PDO::PARAM_STR);

            //4eme Etape : exécution de la requête
            $req->execute();

            //5eme Etape : Retourne un message de confirmation
            return "$email a été enregistré avec succès !";
        } catch (EXCEPTION $error) {
            return $error->getMessage();
        }
    }

    function readUsers(): array|string
    {
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO("mysql:host={$_ENV['DBhost']};dbname={$_ENV['DBname']}", "{$_ENV['login']}", "{$_ENV['password']}", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


        //Try...Catch
        try {
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_utilisateur, nom, prenom, email, mdp, nom_session, id_roleUtilisateur FROM utilisateur');

            //3eme Etape : executer la requête
            $req->execute();

            //4eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //5eme Etape : je retourne mes $data
            return $data;
        } catch (EXCEPTION $error) {
            return $error->getMessage();
        }
    }

    //Fonction pour récupérer un utilisateurs en BDD selon un login précis
    //Param : string
    //Return : array | string
    function readUserByEmail(): array|string
    {
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO("mysql:host={$_ENV['DBhost']};dbname={$_ENV['DBname']}", "{$_ENV['login']}", "{$_ENV['password']}", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Récupération du login depuis l'objet
        $email = $this->getEmail();

        //Try...Catch
        try {
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_utilisateur, email, mdp, prenom, nom, nom_session, id_roleUtilisateur FROM utilisateur WHERE email = ?');

            //3Eme Etape : introduire le login de l'utilisateur dans ma requête avec du Binding de Paramètre
            $req->bindParam(1, $email, PDO::PARAM_STR);

            //4eme Etape : executer la requête
            $req->execute();

            //5eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //6eme Etape : je retourne mes $data
            return $data;
        } catch (EXCEPTION $error) {
            return $error->getMessage();
        }
    }


  // Function to modify datas in DB
// Param = string $name_user, string $first_name_user, string $email_user
// Return = String 
public function modifyInfo(): string
{
    $modify_nom = $this->getNom();
    $modify_prenom = $this->getPrenom();
    $modify_email = $this->getEmail();
    $bdd = new PDO("mysql:host={$_ENV['DBhost']};dbname={$_ENV['DBname']}", "{$_ENV['login']}", "{$_ENV['password']}", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $sessionIdUtilisateur = $_SESSION['id_utilisateur'];

    try {
        $req = $bdd->prepare("UPDATE utilisateur SET nom = ?, prenom = ?, email = ? WHERE id_utilisateur = $sessionIdUtilisateur");
        $req->bindParam(1, $modify_nom, PDO::PARAM_STR);
        $req->bindParam(2, $modify_prenom, PDO::PARAM_STR);
        $req->bindParam(3, $modify_email, PDO::PARAM_STR);

        $req->execute();

        return "Informations modifiées avec succès.";
    } catch (EXCEPTION $error) {
        return $error->getMessage();
    }
}
}


