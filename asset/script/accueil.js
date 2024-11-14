// Variable
const formColor=document.querySelector("article");
const inscription=document.querySelector("#inscription");
const connexion=document.querySelector("#connexion");
const swich=document.querySelector("#flexSwitchCheckDefault");

swich.addEventListener('click',()=>{
    console.log(swich.checked);
    if(swich.checked!='true'){
        connexion.classList.toggle('disNone');
        inscription.classList.toggle('disNone');
        formColor.classList.toggle ('backColorOrange');
        formColor.classList.toggle ('backColorBlack');
    }else{
        connexion.classList.toggle('disNone');
        inscription.classList.toggle('disNone');
        formColor.classList.toggle ('backColorOrange');
        formColor.classList.toggle ('backColorBlack');
    }
});