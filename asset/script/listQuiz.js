const CATEGORIES = {
    anglais: [
      "Compréhension orale",
      "Expression Orale",
      "Compréhension orale",
      "Expression Écrite",
      "Vocabulaire",
      "Grammaire",
    ],
    backEnd: ["SQL", "PHP"],
    conception: ["UML", "SEO", "Maquettage"],
    frontEnd: ["HTML", "CSS", "JavaScript", "Bootstrap", "React", "Angular"],
    gestionDeProjet: ["Cahier des charges", "Scrub", "Agile"],
    github: ["Commandes"],
    systemeEtReseaux: [
      "Hardware",
      "Algorithme",
      "Linux",
      "Réseau",
      "Virtualisation",
    ],
  };

const QUIZ = [
  {
    id: 1,
    image: "https://picsum.photos/200/200",
    titre: "Regular Verbs",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales.",
    durée: 20,
    difficulté: 3,
    catégorie: ["anglais", "Grammaire"],
  },
  {
    id: 2,
    image: "https://picsum.photos/200/200",
    titre: "Technical vocabulary",
    description:
      "Êtes-vous prêt à mettre votre grammaire anglaise à l'épreuve ? Ce quiz vous permet de réviser les règles essentielles et d'affiner votre maîtrise des structures grammaticales. Testez vos connaissances, corrigez vos erreurs et relevez le défi !",
    durée: 30,
    difficulté: 5,
    catégorie: ["anglais", "Vocabulaire"],
  },
  {
    id: 3,
    image: "https://picsum.photos/200/200",
    titre: "Les bases de HTML",
    description:
      "Ce quiz couvre les éléments essentiels du langage HTML : balises, structure de page, et bonnes pratiques. Parfait pour les débutants ou pour réviser vos fondamentaux !",
    durée: 45,
    difficulté: 5,
    catégorie: ["frontEnd", "HTML"],
  },
  {
    id: 4,
    image: "https://picsum.photos/200/200",
    titre: "Les bases de CSS",
    description:
      "Testez vos connaissances de base en CSS ! Ce quiz explore les concepts essentiels : sélection de styles, propriétés de mise en forme, couleurs, et plus encore. Idéal pour débutants et pour réviser les bases du design web !",
    durée: 20,
    difficulté: 1,
    catégorie: ["HTML", "CSS"],
  },
  {
    id: 5,
    image: "https://picsum.photos/200/200",
    titre: "Les tableaux en JavaScript",
    description:
      "Ce quiz couvre les bases : création, manipulation, méthodes essentielles (push, pop, map, etc.), et bonnes pratiques pour travailler efficacement avec les tableaux. Parfait pour consolider vos compétences en JS !",
    durée: 60,
    difficulté: 5,
    catégorie: ["HTML", "JavaScript"],
  },
];

function generateDifficulty(difficulty){
    return [...Array(difficulty)].map(() => '<span class="dot active"></span>').join('');
}

function CreateQuiz(quizData) {
    const quizContainer = document.getElementById("quizContainer");
    const quizCard = document.createElement("div");
    quizCard.classList.add("cardQuiz");
    quizCard.innerHTML = `
            <div class="row g-0">
            <div class="col-md-2">
                <img src="${quizData.image}" class="img-fluid rounded m-2" alt="Image pour ${quizData.titre}"/>
            </div>
            <div class="col-md-7 p-3">
                <div class="card-body">
                    <h5 class="card-title">${quizData.titre}</h5>
                    <p class="card-text">${quizData.description}</p>
                    <p class="card-text">
                    <small class="text-body-secondary"><em>${quizData.catégorie.join(" - ")}</em></small></p>
                </div>
            </div>
                <div class="col-3 info ">
                    <div class="row m-0 ">
                        <div class="col time pt-3">
                            <h5>Durée</h5>
                            <p>${quizData.durée}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-3">
                            <h5>Difficulté</h5>
                            <div>
                            ${generateDifficulty(quizData.difficulté)}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    `;

    quizContainer.appendChild(quizCard);
}

QUIZ.forEach(quiz => CreateQuiz(quiz));

