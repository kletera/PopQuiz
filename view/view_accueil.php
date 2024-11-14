<script src="./asset/script/api.js" defer></script>
<main>
    <h2 class="mt-5" style="text-align: center;">VEUILLEZ VOUS CONNECTER POUR ACCEDER AUX QUIZZS</h2>
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
                    <form>
                        <input type="text" name="" class="form-control mb-3" placeholder="Nom">
                        <input type="text" name=""  class="form-control mb-3" placeholder="Prénom">
                        <input type="email" class="form-control mb-3"  aria-describedby="emailHelp" placeholder="Email">
                        <input type="password" class="form-control mb-3" placeholder="Mot de passe">
                        <button type="submit" class="InEnregistrer">Enregistrer</button>
                    </form>
                </div>

                <!-- Connexion -->
                <div class="card-body disNone" id="connexion">
                    <h3 style="margin-bottom: 20px;; color: #F7A60F; text-align: center;">Se connecter</h3>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                        </div>
                        <button type="submit" class="CoEnregistrer">Enregistrer</button>
                    </form>
                </div>
            </article>
        </div>
      </div>

</main>