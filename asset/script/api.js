
function addInfo(Enom,Eprenom,mail){
    const tr=document.createElement('tr');
    const nom=document.createElement('th');
    nom.style.border= "1px #343A40 solid";
    const prenom=document.createElement('td');
    prenom.classList.add("quizInfos");
    const email=document.createElement('td');
    email.classList.add("quizInfos");
    const moyenne=document.createElement('td');
    moyenne.classList.add("quizInfos");

    nom.innerText=Enom;
    prenom.innerText=Eprenom;
    email.innerText=mail;
    moyenne.innerText="";
    tr.append(nom);
    tr.append(prenom);
    tr.append(email);
    tr.append(moyenne);
    list.after(tr);
}

const list=document.querySelector('.stat');


const api= async()=>{
    const url= await fetch("https://quizz.adrardev.fr/api/users");
    const data=await url.json();
    console.log(data);
    for(i=0;i<data.length;i++){
        let mail=data[i].email;
        let firstname=data[i].firstname;
        let lastname=data[i].lastname;
        addInfo(firstname,lastname,mail)
    }
}
api();