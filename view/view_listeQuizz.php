<main>
    <h1>Liste des quizz</h1>


    <aside>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <h4>Filtrer :</h4>

            <form class="container-fluid mb-2 p-0">
                <div class="input-group">
                    
                    <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-search loupeDeco" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Recherche" aria-label="Recherche"
                        aria-describedby="basic-addon1">
                </div>
            </form>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Difficulté
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
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
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Durée
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <input type="checkbox" id="Grammar" name="Grammar" />
                        <label for="Grammar">
                            < 15 min</label>
                                <br>
                                <input type="checkbox" id="20minutes" name="20minutes" />
                                <label for="20minutes">15min - 30min</label>
                                <br>
                                <input type="checkbox" id="45minutes" name="45minutes" />
                                <label for="45minutes">> 30min</label>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseThree">
                        Catégories
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">

                        <!-- Anglais -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Anglais
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Compréhension Orale</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Expression Orale</label>
                                    <br>
                                    <input type="checkbox" id="45minutes" name="45minutes" />
                                    <label for="45minutes">Compréhension Écrite</label>
                                    <br>
                                    <input type="checkbox" id="45minutes" name="45minutes" />
                                    <label for="45minutes">Expression Écrite</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Vocabulaire</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Grammaire</label>
                                </div>
                            </div>
                        </div>

                        <!-- Back-End -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Back-End
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        SQL</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">PHP</label>
                                </div>
                            </div>
                        </div>


                        <!-- Conception-->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Conception
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        UML</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">SEO</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Maquettage</label>
                                </div>
                            </div>
                        </div>

                        <!-- Front-End -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Front-End
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        HTML</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">CSS</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">JavaScript</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Bootstrap</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">React</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Angular</label>
                                </div>
                            </div>
                        </div>

                        <!-- Gestion de projet -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Gestion de projet
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Cahier des charges</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Scrub</label>
                                    <br>
                                    <input type="checkbox" id="20minutes" name="20minutes" />
                                    <label for="20minutes">Agile</label>
                                </div>
                            </div>
                        </div>

                        <!-- Git -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Github
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Commandes</label>
                                </div>
                            </div>
                        </div>

                        <!-- Système et réseaux -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false"
                                    aria-controls="collapseTen"><input type="checkbox" id="45minutes" name="45minutes"
                                        class="me-2" />
                                    Système et réseaux
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Hardware</label>
                                    <br>
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Algoritme</label>
                                    <br>
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Linux</label>
                                    <br>
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Réseau</label>
                                    <br>
                                    <input type="checkbox" id="Grammar" name="Grammar" />
                                    <label for="Grammar">
                                        Virtualisation</label>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </aside>

    <article class="listeQuizzle">
        <section>
            <div class="container" id="quizContainer">

            </div>
        </section>
    </article>

    <!-- <article class="listeQuizz">
        <section>
            <div class="container" id="quizContainer">
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
    </article> -->
</main>