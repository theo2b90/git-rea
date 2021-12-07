
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//                                                              Partie Affichage du questionnaire !
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//---------------------__________________-------------------
//                     Le Questionnaire :
//----------------------------------------------------------
// BUT : Apparition et disparition des formulaires au click
// ---------------------------------------------------------

// Amélioration possible : Faire en sorte d'en faire une fonction réutilisable et modulable

// Parametre : Selection query 1 ; Selection query 2 ; (setAttribut1 op1; setAttribut op2;) (setAttribut2 op1;
// setAttribut op2)

//--------------------------------
//  Apparition des divs au click
//---------------------------------

let formProfil = document.querySelectorAll('#questionnaireChild div:nth-of-type(2n + 3)');
let buttonProfil = document.querySelectorAll('#questionnaireChild div button');

//----------------------------------------------
// fonction Event click (Apparition/disparition)
//----------------------------------------------

function openClose(openB, openD){
  
   let onOffbutton = document.getElementById(openB);
   let onOffdiv = document.getElementById(openD);

   onOffbutton.addEventListener('click', () => {
      if(onOffdiv.style.display == 'none'){
            onOffdiv.style.display = 'block';
      }
      else if(onOffdiv.style.display = 'block'){
            onOffdiv.style.display = 'none'}
   }
   )
}

// ---------------------------------------
// Calcule du nombre d'éléments concernés
// ---------------------------------------

let items = Array.from(formProfil).map(elem => {
elem
});

// ----------------------------------------------------
// Placement des id sur l'ensemble des form et buttons
// ----------------------------------------------------

for (let i = 0; i < items.length; i++){
   formProfil[i].style.display = 'none';
   formProfil[i].setAttribute('id',`displayJSid${i}`);
   buttonProfil[i].setAttribute('id',`buttonid${i}`);
};

//----------------------------------------------------------------
//  Généralisation de l'addEvent sur l'ensemble des formulaires
//----------------------------------------------------------------

for (let i = 0; i<items.length; i++){
   openClose(`buttonid${i}`,`displayJSid${i}`);
} 

// -------------_______________---------------
               // lock input
// -------------------------------------------

function buttonOff(){
   let myButton = document.querySelector("#connect");
   myButton.addEventListener("click",  (e) => {
      e.preventDefault()//Annule le rafraichissement de page lors du click du submit
   });
}

function debugge(){
   alert('caca');
}

// -------------------------------------------------------------------------------------------------------------------------------------------------------
                                                            // VUE widget
// -------------------------------------------------------------------------------------------------------------------------------------------------------

// --------------------------------------------------------------------------------

// --------------------------------------------------------------------------------

Vue.createApp({
    data() {
        return {
        
             
        };
    },

    methods: {
       
   
    }

}).mount("#app");


// <!---------------------------------------
// FW : VUE à coller dans la page html (fin)
// ---------------->------------------------
// <script src="https://unpkg.com/vue@next"></script>
// <script src="../js/script.js"></script>