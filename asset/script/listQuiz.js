const QUIZ = [
  {
    id: 1,
    image: "./asset/img/quizGrammar.png",
    titre: "Regular Verbs",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales.",
    durée: 20,
    difficulté: 3,
    catégorie: ["Anglais", "Grammaire"],
  },
  {
    id: 2,
    image: "./asset/img/quizVocabulaire.png",
    titre: "Technical vocabulary",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales. Testez vos connaissances, corrigez vos erreurs et relevez le défi !",
    durée: 30,
    difficulté: 5,
    catégorie: ["Anglais", "Vocabulaire"],
  },
  {
    id: 3,
    image: "./asset/img/quizHTML.jpeg",
    titre: "Les bases de HTML",
    description:
      "Ce quiz couvre les éléments essentiels du langage HTML : balises, structure de page, et bonnes pratiques. Parfait pour les débutants ou pour réviser vos fondamentaux !",
    durée: 45,
    difficulté: 2,
    catégorie: ["Front-End", "HTML"],
  },
  {
    id: 4,
    image: "./asset/img/quizCSS.jpg",
    titre: "Les bases de CSS",
    description:
      "Testez vos connaissances de base en CSS ! Ce quiz explore les concepts essentiels : sélection de styles, propriétés de mise en forme, couleurs, et plus encore. Idéal pour débutants et pour réviser les bases du design web !",
    durée: 10,
    difficulté: 1,
    catégorie: ["HTML", "CSS"],
  },
  {
    id: 5,
    image: "./asset/img/quizJS.png",
    titre: "Les tableaux en JavaScript",
    description:
      "Ce quiz couvre les bases : création, manipulation, méthodes essentielles (push, pop, map, etc.), et bonnes pratiques pour travailler efficacement avec les tableaux. Parfait pour consolider vos compétences en JS !",
    durée: 60,
    difficulté: 4,
    catégorie: ["HTML", "JavaScript"],
  },
];

function generateDifficulty(difficulty) {
  let difficultyClass;

  if (difficulty <= 2) {
    difficultyClass = "dotFacile";
  } else if (difficulty < 4) {
    difficultyClass = "dotMoyenne";
  } else {
    difficultyClass = "dotDifficile";
  }

  return [...Array(5)]
    .map((_, index) => {
      // On colore les points en fonction de la difficulté :
      // Les premiers "difficulty" points auront la classe de couleur, les autres seront blancs.
      const classToApply = index < difficulty ? difficultyClass : "";
      return `<span class="dot ${classToApply}"></span>`;
    })
    .join("");
}

function CreateQuiz(quizData) {
  const quizContainer = document.getElementById("quizContainer");
  const quizCard = document.createElement("div");
  quizCard.classList.add("cardQuiz");
  quizCard.innerHTML = `
            <div class="row g-0">
            <div class="col-md-2">
                <img src="${
                  quizData.image
                }" class="img-fluid rounded m-2" alt="Image pour ${
    quizData.titre
  }"/>
            </div>
            <div class="col-md-7 p-3">
                <div class="card-body">
                    <h5 class="card-title quizTitle">${quizData.titre}</h5>
                    <p class="card-text quizDescription">${
                      quizData.description
                    }</p>
                    <p class="card-text">
                    <small class="text-body-secondary quizCategory"><em>${quizData.catégorie.join(
                      " - "
                    )}</em></small></p>
                </div>
            </div>
                <div class="col-3 info ">
                    <div class="row m-0 ">
                        <div class="col time pt-3">
                            <h5>Durée</h5>
                            <p class="quizDuration">${quizData.durée} minutes</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3">
                            <h5>Difficulté</h5>
                            <div class="quizDifficulty">
                            ${generateDifficulty(quizData.difficulté)}
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
  quizContainer.appendChild(quizCard);
}
QUIZ.forEach((quiz) => CreateQuiz(quiz));

function searchQuiz() {
  const searchQuery = document
    .getElementById("searchInput")
    .value.toLowerCase();
  const quizCards = document.querySelectorAll(".cardQuiz");

  quizCards.forEach((quizCard) => {
    const title = quizCard
      .querySelector(".quizTitle")
      .textContent.toLowerCase();
    const description = quizCard
      .querySelector(".quizDescription")
      .textContent.toLowerCase();
    const categories = quizCard
      .querySelector(".quizCategory")
      .textContent.toLowerCase();

    if (
      title.includes(searchQuery) ||
      description.includes(searchQuery) ||
      categories.includes(searchQuery)
    ) {
      quizCard.style.display = "block";
    } else {
      quizCard.style.display = "none";
    }
  });
}

document.getElementById("searchInput").addEventListener("input", searchQuiz);

function filterQuiz(){
    const searchQuery = document.getElementById("searchInput").value.toLowerCase;

    const selectedDifficulties = getSelectedDifficulties();
    const selectedCategories = getSelectedCategories();
    const selectedDurations = getSelectedDurations();

    const quizCards = document.querySelectorAll(".cardQuiz");

    quizCards.forEach(quizCard => {
        const title = quizCard.querySelector(".quizTitle").textContent.toLowerCase();
        const description = quizCard.querySelector(".quizDescription").textContent.toLowerCase();
        const categories = quizCard.querySelector(".quizCategory").textContent.toLowerCase().split(" - ");

        const difficulty = quizCard.querySelector(".dot").classList.contains("dotDifficile") ? 'difficile' : quizCard.querySelector(".dot").classList.contains("dotMoyenne") ? 'moyenne' : 'facile';

        const durationText = quizCard.querySelector(".quizDuration").textContent;
        const duration = parseInt(durationText.replace(/\D/g, ''));


        const matchesSearch = title.includes(searchQuery) || description.includes(searchQuery) || categories.includes(searchQuery);
        const matchesDifficulty = selectedDifficulties.lenght === 0 || selectedDifficulties.includes(difficulty);
        const matchesDuration = selecterDurations.some(durationRange => {
            if (durationRange === '<15') return duration < 15;
            if (durationRange === '15-30') return duration >= 15 && duration <= 30;
            if (durationRange === '>30') return duration > 30;
            return false;
        });

        const matchesCategory = selectedCategories.length === 0 || selectedCategories.some(category => categories.includes(category));

        if (matchesSearch && matchesDifficulty && matchesDuration && matchesCategory) {
            quizCard.style.display = "block"; // Afficher le quiz
        } else {
            quizCard.style.display = "none"; // Cacher le quiz
        }
    });
}

function getSelectedDifficulties(){
    const difficulties = [];
    if (document.getElementById("facile").checked) difficulties.push('facile');
    if (document.getElementById("moyenne").checked) difficulties.push('moyenne');
    if (document.getElementById("difficile").checked) difficulties.push('difficile');
    return difficulties;
}

function getSelectedDurations() {
    const durations = [];
    if (document.getElementById("<15").checked) durations.push('<15');
    if (document.getElementById("15-30").checked) durations.push('15-30');
    if (document.getElementById(">30").checked) durations.push('>30');
    return durations;
}

function getSelectedCategories() {
    const categories = [];
    // Récupérer toutes les catégories checkbox, ici c'est un exemple pour "Anglais" mais tu peux les adapter
    const categoryCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    categoryCheckboxes.forEach(checkbox => {
        categories.push(checkbox.parentElement.textContent.trim().toLowerCase()); // Ajoute la catégorie
    });
    return categories;
}

document.getElementById("searchInput").addEventListener('input', filterQuizzes);

// Attacher les événements de modification des filtres
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', filterQuizzes);
});