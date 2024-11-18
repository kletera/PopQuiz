<h1 class="text-center m-3">Mon Compte</h1>

<div class="container" id="maxWidthContainer">
    <h2 class="monCompteTitles mt-3">Vos Informations</h2>
    <form class="row">
        <div class="col-6">

            <input type="text" class="form-control mt-3" name="lastName" value="<?php echo $lastName ?>">

            <input type="text" class="form-control mt-3" name="firstName" value="<?php echo $firstName ?>">

            <input type="text" class="form-control mt-3" name="session" value="<?php echo $session ?>" placeholder="Formation">

        </div>

        <div class="col-6">

            <input type="email" class="form-control mt-3" name="email" value="<?php echo $email ?>">

            <input type="password" class="form-control mt-3" name="password" value="<?php echo $password ?>">

        </div>
    </form>
    <button type="button" class="btn btnNormal mt-2">Enregistrer</button>

    <h2 class="mt-4 monCompteTitles">Statistiques</h2>
    <div class="row paddingLeftRight">
        <div class="col statisticBox marginRight">
            <div class="row">
                <h5>Quizz réalisés</h5>
            </div>
            <div class="row">
                <h4>3</h4>
            </div>
        </div>

        <div class="col statisticBox marginRight">
            <div class="row">
                <h5>Note moyenne</h5>
            </div>
            <div class="row">
                <h4>86%</h4>
            </div>
        </div>

        <div class="col statisticBox">
            <div class="row">
                <h5>Vous êtes experts</h5>
            </div>
            <div class="row">
                <h4>Front-End</h4>
            </div>
        </div>
    </div>

    <!-- Quizz réalisés -->
    <div class="mb-5">
        <h2 class="mt-4 monCompteTitles">Quizz réalisés</h2>

        <!-- Libellés -->
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

        <!-- Quizz 1 Exemple-->
        <div class="row paddingLeftRight">
            <div class="col-5 quizInfos">
                <h5 class="m-0">HTML et CSS, les bases</h5>
            </div>

            <div class="col quizInfos">
                <h5 class="m-0">13/11/2024</h5>
            </div>

            <div class="col quizInfos">
                <div class="pastille">
                    <div class="green"></div>
                    <h5 class="m-0">100%</h5>
                </div>
            </div>

            <div class="col quizInfos">
                <div class="pastille">
                    <div class="orange"></div>
                    <h5 class="m-0">75%</h5>
                </div>
            </div>
        </div>

        <!-- Quizz 2 avec variables PHP -->
        <div class="row paddingLeftRight d-none">
            <div class="col-5 quizInfos">
                <h5 class="m-0"><?php echo $quizTitle ?></h5>
            </div>

            <div class="col quizInfos">
                <h5 class="m-0"><?php echo $lastDateDoingQuiz ?></h5>
            </div>

            <div class="col quizInfos">
                <div class="pastille">
                    <div class="<?php echo $pastilleColor ?>"></div>
                    <h5 class="m-0"><?php echo $quizProgression ?></h5>
                </div>
            </div>

            <div class="col quizInfos">
                <div class="pastille">
                    <div class="<?php echo $pastilleColor ?>"></div>
                    <h5 class="m-0"><?php echo $quizResults ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>