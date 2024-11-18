const QUIZ = [
  {
    id: 1,
    image: "./asset/img/quizGrammar.png",
    titre: "Regular Verbs",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales.",
    durée: 35,
    difficulté: 3,
    catégorie: "Anglais",
  },
  {
    id: 2,
    image: "./asset/img/quizVocabulaire.png",
    titre: "Technical vocabulary",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales. Testez vos connaissances, corrigez vos erreurs et relevez le défi !",
    durée: 30,
    difficulté: 5,
    catégorie: "Anglais",
  },
  {
    id: 3,
    image: "./asset/img/quizHTML.jpeg",
    titre: "Les bases de HTML",
    description:
      "Ce quiz couvre les éléments essentiels du langage HTML : balises, structure de page, et bonnes pratiques. Parfait pour les débutants ou pour réviser vos fondamentaux !",
    durée: 45,
    difficulté: 2,
    catégorie: "frontend",
  },
  {
    id: 4,
    image: "./asset/img/quizCSS.jpg",
    titre: "Les bases de CSS",
    description:
      "Testez vos connaissances de base en CSS ! Ce quiz explore les concepts essentiels : sélection de styles, propriétés de mise en forme, couleurs, et plus encore. Idéal pour débutants et pour réviser les bases du design web !",
    durée: 10,
    difficulté: 1,
    catégorie: "backend",
  },
  {
    id: 5,
    image: "./asset/img/quizJS.png",
    titre: "Les tableaux en JavaScript",
    description:
      "Ce quiz couvre les bases : création, manipulation, méthodes essentielles (push, pop, map, etc.), et bonnes pratiques pour travailler efficacement avec les tableaux. Parfait pour consolider vos compétences en JS !",
    durée: 60,
    difficulté: 4,
    catégorie: "Conception",
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
                    <small class="text-body-secondary quizCategory"><em>${
                      quizData.catégorie
                    }</em></small></p>
                </div>
            </div>
                <div class="col-3 info ">
                    <div class="row m-0 ">
                        <div class="col time pt-3">
                            <h5>Durée</h5>
                            <p class="quizDuration">${
                              quizData.durée
                            } minutes</p>
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

function getSelectedDifficulties() {
  const difficulties = [];
  if (document.getElementById("facile").checked) difficulties.push("facile");
  if (document.getElementById("moyenne").checked) difficulties.push("moyenne");
  if (document.getElementById("difficile").checked)
    difficulties.push("difficile");
  console.log(difficulties);
  return difficulties;
}


// Filtre CATEGORIES
function getSelectedCategories() {
  const categories = [];
  const categoryCheckboxes = document.querySelectorAll(
    '.categoriesCheckbox input[type="checkbox"]:checked'
  );
  categoryCheckboxes.forEach(checkbox => {
    categories.push(checkbox.id);
  });
  console.log(categories);
  return categories;
}

function filterByCategory() {
  const selectedCategories = getSelectedCategories(); // Récupère les catégories sélectionnées
  const quizCards = document.querySelectorAll(".cardQuiz"); // Récupère toutes les cartes de quiz

  quizCards.forEach((quizCard) => {
    const category = quizCard.querySelector(".quizCategory").textContent.trim().toLowerCase(); // Catégorie du quiz

    // Si aucune catégorie n'est sélectionnée ou si la catégorie du quiz est dans la sélection, affichez le quiz
    if (selectedCategories.length === 0 || selectedCategories.includes(category)) {
      quizCard.style.display = "block"; // Affiche la carte de quiz
    } else {
      quizCard.style.display = "none"; // Cache la carte de quiz
    }
  });
}

document.querySelectorAll('.categoriesCheckbox input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('change', filterByCategory);
});



// Filtre DURATION
function getSelectedDurations() {
  const durations = [];
  if (document.getElementById("15").checked) durations.push("<15");
  if (document.getElementById("15-30").checked) durations.push("15-30");
  if (document.getElementById("30").checked) durations.push(">30");
  return durations;
}

function filterByDuration() {
  const selectedDurations = getSelectedDurations();

  const filteredQuiz = QUIZ.filter((quiz) => {
    if (selectedDurations.length === 0) return true;
    if (selectedDurations.includes("<15") && quiz.durée < 15) return true;
    if (selectedDurations.includes("15-30") &&quiz.durée >= 15 && quiz.durée <= 30) return true;
    if (selectedDurations.includes(">30") && quiz.durée > 30) return true;

    return false;
  });
  updateQuizDisplay(filteredQuiz);
}

function updateQuizDisplay(filteredQuiz) {
  const quizContainer = document.getElementById("quizContainer");
  quizContainer.innerHTML = "";
  filteredQuiz.forEach((quiz) => CreateQuiz(quiz));
}
// Fin filtre DURATION

// Lorsque l'utilisateur change les filtres de durée, on applique le filtrage
document.querySelectorAll('input[name="duration"]').forEach((checkbox) => {
  checkbox.addEventListener("change", filterByDuration);
});
// Initialisation de l'affichage des quiz au chargement de la page
filterByDuration();



document.getElementById("searchInput").addEventListener("input", searchQuiz);


