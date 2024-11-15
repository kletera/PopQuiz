<link rel="stylesheet" href="./asset/style/compte.css">
<link rel="stylesheet" href="./asset/style/listeQuizz.css">
<script src="./asset/script/listQuiz.js" defer></script>
<script src="./asset/script/api.js" defer></script>
<main>
    <div class="container">
        <h1 class="text-center m-3">Mon Compte</h1>
        <h2 class="monCompteTitles mt-3">Vos Informations</h2>
        <form class="row">
            <div class="col-6">

                <input type="text" class="form-control" name="pseudo" value="<?php echo $pseudo ?>">

                <input type="text" class="form-control mt-3" name="lastName" value="<?php echo $lastName ?>">

                <input type="text" class="form-control mt-3" name="firstName" value="<?php echo $firstName ?>">

            </div>

            <div class="col-6">

                <input type="email" class="form-control" name="email" value="<?php echo $email ?>">

                <input type="password" class="form-control mt-3" name="password" value="<?php echo $password ?>">

                <input type="text" class="form-control mt-3" name="session" value="<?php echo $session ?>">
            </div>
        </form>
        <button type="button" class="btn btnNormal mt-2">Enregistrer</button>

        <div style="display: flex; align-items: center;">
            <h2 class="mt-4 monCompteTitles">Quizz créer</h2>
            <p class="mb-0 tabWording" style="font-weight: bold; margin-left: 12%">Créer un nouveau quizz +</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="col-2 tabWordingLeft">Titre</th>
                    <th class="col-1 tabWording">Catégorie</th>
                    <th class="col-1 tabWording">Durée</th>
                    <th class="col-1 tabWordingRight">Difficulter</th>
                    <th class="col-1"></th>
                </tr>
            </thead>
            <tbody class="creaQuiz">
                
            </tbody>
        </table>

        <div style="display: flex; align-items: center;">
            <h2 class="mt-4 monCompteTitles">Liste des élèves</h2>
            <p class="dropdown-toggle mb-0 tabWording" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-weight: bold; margin-left: 20%">DEV31 ERN 24-01</p>
            <ul class="dropdown-menu">
                <li><p class="dropdown-item" href="#">DEV31 ERN 23-01</p></li>
                <li><p class="dropdown-item" href="#">DEV31 ERN 24-03</p></li>
            </ul>
        </div>
        <table style="margin-bottom: 35px;">
            <thead>
                <tr>
                    <th class="col-2 tabWordingLeft">Nom</th>
                    <th class="col-1 tabWording">Prénom</th>
                    <th class="col-1 tabWording">Email</th>
                    <th class="col-1 tabWordingRight">Moyenne</th>
                    <th class="col-1"></th>
                </tr>
            </thead>
            <tbody class="stat">
                
            </tbody>
        </table>

    </div>
</main>