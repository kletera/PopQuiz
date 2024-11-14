<main>
    <h1>Liste des quizz</h1>
    <aside>

        <div class="accordion w-25" id="accordionExample">
            <h3>Filtrer:</h3>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Difficulté
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <input type="checkbox" id="facile" name="facile" />
                        <label for="facile">Facile</label>
                        <br>
                        <input type="checkbox" id="moyenne" name="moyenne" />
                        <label for="moyenne">Moyenne</label>
                        <br>
                        <input type="checkbox" id="difficile" name="difficile" />
                        <label for="difficile">Difficile</label>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Temps
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <input type="checkbox" id="Grammar" name="Grammar" />
                        <label for="Grammar">Grammar</label>
                        <br>
                        <input type="checkbox" id="20minutes" name="20minutes" />
                        <label for="20minutes">20 minutes</label>
                        <br>
                        <input type="checkbox" id="45minutes" name="45minutes" />
                        <label for="45minutes">45 minutes</label>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Catégorie
                    </button>
                </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </form>
        </div>
        </nav>

    </aside>
    <article>
        <section>
            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="<?php echo $quizImg ?>" class="img-fluid rounded m-2" alt="<?php echo $altImg ?>">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $quizTitle ?></h5>
                                <p class="card-text"><?php echo $quizDescription ?></p>
                                <p class="card-text"><small
                                        class="text-body-secondary"><em><?php echo $quizCategorie ?></em></small></p>

                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p><?php echo $timeQuiz ?></p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="./asset/img/quizGrammar.png" class="img-fluid rounded m-2"
                                alt="Photo Quiz Grammar">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title">Regular Verbs</h5>
                                <p class="card-text">Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce
                                    quiz vous
                                    permet de réviser les règles essentielles et d'affiner votre maîtrise des structures
                                    grammaticales.</p>
                                <p class="card-text"><small class="text-body-secondary"><em>Anglais -
                                            Grammaire</em></small></p>

                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p>20 minutes</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot dotMoyenne"> </span>
                                        <span class="dot dotMoyenne"> </span>
                                        <span class="dot dotMoyenne"> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="./asset/img/quizVocabulaire.png" class="img-fluid rounded m-2"
                                alt="Photo Quiz Vocabulaire">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title">Technical vocabulary</h5>
                                <p class="card-text">Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce
                                    quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des
                                    structures grammaticales. Testez vos connaissances, corrigez vos erreurs et relevez
                                    le défi !</p>
                                <p class="card-text"><small class="text-body-secondary"><em>Anglais -
                                            Vocabulaire</em></small></p>

                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p>30 minutes</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="./asset/img/quizHTML.jpeg" class="img-fluid rounded m-2" alt="Photo Quiz HTML">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title">Les bases de HTML</h5>
                                <p class="card-text">Ce quiz couvre les éléments essentiels du langage HTML : balises,
                                    structure de page, et bonnes pratiques. Parfait pour les débutants ou pour réviser
                                    vos fondamentaux !</p>
                                <p class="card-text"><small class="text-body-secondary"><em>Front-end -
                                            HTML</em></small></p>
                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p>45 minutes</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="./asset/img/quizCSS.jpg" class="img-fluid rounded m-2" alt="Photo Quiz CSS">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title">Les bases de CSS</h5>
                                <p class="card-text">Testez vos connaissances de base en CSS ! Ce quiz explore les
                                    concepts essentiels : sélection de styles, propriétés de mise en forme, couleurs, et
                                    plus encore. Idéal pour débutants et pour réviser les bases du design web !</p>
                                <p class="card-text"><small class="text-body-secondary"><em>Front-end - CSS</em></small>
                                </p>

                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p>20 minutes</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot dotFacile"> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                        <span class="dot "> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class=" mb-3 cardQuiz ">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="./asset/img/quizJS.png" class="img-fluid rounded m-2" alt="Photo Quiz JavaScript">
                        </div>
                        <div class="col-md-7 p-3">
                            <div class="card-body">
                                <h5 class="card-title">Les tableaux en JavaScript</h5>
                                <p class="card-text">Ce quiz couvre les bases : création, manipulation, méthodes
                                    essentielles (push, pop, map, etc.), et bonnes pratiques pour travailler
                                    efficacement avec les tableaux. Parfait pour consolider vos compétences en JS !</p>
                                <p class="card-text"><small class="text-body-secondary"><em>Front-end -
                                            JavaScript</em></small></p>

                            </div>
                        </div>
                        <div class="col-3 info ">
                            <div class="row m-0 ">
                                <div class="col time pt-3">
                                    <h5>Durée</h5>
                                    <p>60 minutes</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col pt-3">
                                    <h5>Difficulté</h5>
                                    <div>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                        <span class="dot dotDifficile"> </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>