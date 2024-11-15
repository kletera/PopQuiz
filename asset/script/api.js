function addInfo(Eprenom,Enom,mail){
    const tr=document.createElement('tr');
    const nom=document.createElement('th');
    nom.style.border= "1px #343A40 solid";
    nom.style.paddingLeft="5px"
    const prenom=document.createElement('td');
    prenom.classList.add("quizInfos");
    const email=document.createElement('td');
    email.classList.add("quizInfos");
    const moyenne=document.createElement('td');
    moyenne.classList.add("quizInfos");
    const CaseModifier=document.createElement('td');
    CaseModifier.style.padding="5px 0";
    CaseModifier.style.textAlign="center";
    const modifier=document.createElement('button');
    modifier.classList.add("btnNormal","btn")
    

    nom.innerText=Enom;
    prenom.innerText=Eprenom;
    email.innerText=mail;
    moyenne.innerText="";
    modifier.innerText="+";
    tr.append(nom);
    tr.append(prenom);
    tr.append(email);
    tr.append(moyenne);
    tr.append(CaseModifier);
    CaseModifier.append(modifier);
    list.after(tr);
}

const list=document.querySelector('.stat');


const api= async()=>{
    const url= await fetch("https://quizz.adrardev.fr/api/users");
    const data=await url.json();
    console.log(data);
    for(i=8;i>=0;i--){
        let mail=data[i].email;
        let firstname=data[i].firstname;
        let lastname=data[i].lastname;
        addInfo(firstname,lastname,mail)
    }
}
api();

function quizTab(quizData){
    const tr=document.createElement('tr');
    const titre=document.createElement('th');
    titre.style.border= "1px #343A40 solid";
    titre.style.paddingLeft="5px"
    const catego=document.createElement('td');
    catego.classList.add("quizInfos");
    const durée=document.createElement('td');
    durée.classList.add("quizInfos");
    const difficulter=document.createElement('td');
    difficulter.classList.add("quizInfos");
    difficulter.classList.add("quizDifficulty");
    const CaseModifier=document.createElement('td');
    CaseModifier.style.padding="5px 0";
    CaseModifier.style.textAlign="center";
    const modifier=document.createElement('button');
    modifier.classList.add("btnNormal","btn")

    titre.innerText=quizData.titre;
    catego.innerText=quizData.catégorie.join(" - ");
    durée.innerText=quizData.durée;
    difficulter.innerHTML=generateDifficulty(quizData.difficulté);
    modifier.innerText="Modifier";
    tr.append(titre);
    tr.append(catego);
    tr.append(durée);
    tr.append(difficulter);
    tr.append(CaseModifier);
    CaseModifier.append(modifier);
    listQuiz.after(tr);
}

const listQuiz=document.querySelector('.creaQuiz');

QUIZ.forEach((quiz) => quizTab(quiz));