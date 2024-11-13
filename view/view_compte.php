<h1 class="text-center m-3">Mon Compte</h1>

<div class="container">
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

    <h2 class="mt-4 monCompteTitles">Statistiques</h2>
    <div class="row paddingLeftRight">
        <div class="col statisticBox marginRight">
            <div class="row">
                <h6>Quizz réalisés</h6>
            </div>
            <div class="row">
                <h4>3</h4>
            </div>
        </div>

        <div class="col statisticBox marginRight">
            <div class="row">
                <h6>Note moyenne</h6>
            </div>
            <div class="row">
                <h4>86%</h4>
            </div>
        </div>

        <div class="col statisticBox">
            <div class="row">
                <h6>Vous êtes experts</h6>
            </div>
            <div class="row">
                <h4>Front-End</h4>
            </div>
        </div>
    </div>

    <h2 class="mt-4 monCompteTitles">Quizz réalisés</h2>
    <div class="row paddingLeftRight ">
        <div class="col-5 tabWordingLeft">
            <h5 class="m-0">Titre</h5>
        </div>

        <div class="col tabWording">
            <h5 class="m-0">Date</h5>
        </div>

        <div class="col tabWording">
            <h5 class="m-0">Progression</h5>
        </div>

        <div class="col tabWordingRight">
            <h5 class="m-0">Résultat</h5>
        </div>
    </div>

    <div class="row paddingLeftRight">
        <div class="col-5 quizInfos">
            <h6 class="m-0">HTML et CSS, les bases</h6>
        </div>

        <div class="col quizInfos">
            <h6 class="m-0">13/11/2024</h6>
        </div>

        <div class="col quizInfos">
            <h6 class="m-0">53%</h6>
        </div>

        <div class="col quizInfos">
            <h6 class="m-0">En cours</h6>
        </div>
    </div>

</div>