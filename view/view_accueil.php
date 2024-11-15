<script src="./asset/script/api.js" defer></script>
<main>
    <h2 class="mt-5" style="text-align: center;">Veuillez vous connecter pour acceder aux quizz</h2>
    <!-- Card -->
    <div class="card mb-5 mt-5" style="max-width: 840px; margin: auto;">
        <div class="row g-0">
            <!-- IMG -->
            <div class="col-md-4 imgT">
                <img src="./asset/img/adrarFormation.jpg" class=" rounded-start imgAcc" alt="Image Accueil">
                <img src="./asset/img/Classe.jpg" class=" rounded-start disNone imgAcc" alt="Image Accueil">
            </div>
            <article class="col-md-8 backColorOrange">
                <div class="form-check form-switch btSwitch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                </div>
                <!-- Inscription -->
                <div class="card-body" id="inscription">
                    <h3 style="margin-bottom: 20px;; color: #343A40; text-align: center;">S'inscrire</h3>
                    <form method="post">
                        <input type="text" name="nom" class="form-control mb-3" placeholder="Nom">
                        <input type="text" name="prenom"  class="form-control mb-3" placeholder="Prénom">
                        <input type="email" class="form-control mb-3"  aria-describedby="emailHelp" placeholder="Email" name="email">
                        <input type="password" class="form-control mb-3" placeholder="Mot de passe" name="mdp">
                        <input type="password" class="form-control mb-3" placeholder="Vérifier le mot de passe" name="verifMdp">
                        <button type="submit" class="InEnregistrer btn" name="submit">Enregistrer</button>
                        <h6 class="messageInscription"><?php echo $controler->getMessage() ?></h6>
                    </form>
                </div>

                <!-- Connexion -->
                <div class="card-body disNone" id="connexion">
                    <h3 style="margin-bottom: 20px; color: #F7A60F; text-align: center;">Se connecter</h3>
                    <form method="post">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="emailCo">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="mdpCo">
                        </div>
                        <button type="submit" class="sub CoEnregistrer btn" name="connexion">Connexion</button>
                        <h6 class="messageConnexion"><?php echo $controler->getMessageCo()?></h6>
                    </form>
                </div>
            </article>
        </div>
    </div>

</main>