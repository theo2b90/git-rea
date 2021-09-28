
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//                                                                  Partie Affichage du questionnaire !
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// __________Commentaires________________

// Généraliser le code pour qu'il soit réutilisable et limiter les lignes de code.

// Observation : Il est possible de selectionner le bouton avec this. Cela dit, le lien entre le bouton et la div qui doit disparaitre n'existent pas.
// Plusieurs solutions : Trouver une méthode de selecteur comme firstchildoftype.
                //       Recopier le code comme un teubé et balancer des id à tire les rigauds.
                         
// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

let OnOffbutton = document.getElementById('buttonid1');
let OnOffdiv = document.getElementById('displayJSid1');

function buttongeneral(){

OnOffbutton.addEventListener('click', Event => {
   if(OnOffdiv.style.display == 'none'){
          OnOffdiv.style.display = 'block';}
       else if(OnOffdiv.style.display = 'block'){
          OnOffdiv.style.display = 'none'}
})};

document.addEventListener("DOMContentLoaded", buttongeneral);

// __________________________


let OnOffbutton2 = document.getElementById('buttonid2');
let OnOffdiv2 = document.getElementById('displayJSid2');

OnOffbutton2.addEventListener('click', Event => {
   if(OnOffdiv2.style.display == 'block'){
          OnOffdiv2.style.display = 'none';}
       else if(OnOffdiv2.style.display = 'none'){
          OnOffdiv2.style.display = 'block'}
});


// _________________________

let OnOffbutton3 = document.getElementById('buttonid3');
let OnOffdiv3 = document.getElementById('displayJSid3');

OnOffbutton3.addEventListener('click', Event => {
   if(OnOffdiv3.style.display == 'block'){
          OnOffdiv3.style.display = 'none';}
       else if(OnOffdiv3.style.display = 'none'){
          OnOffdiv3.style.display = 'block'}
});

// __________________________

let OnOffbutton4 = document.getElementById('buttonid4');
let OnOffdiv4 = document.getElementById('displayJSid4');

OnOffbutton4.addEventListener('click', Event => {
   if(OnOffdiv4.style.display == 'block'){
          OnOffdiv4.style.display = 'none';}
       else if(OnOffdiv4.style.display = 'none'){
          OnOffdiv4.style.display = 'block'}
});


// _____________________________

let OnOffbutton5 = document.getElementById('buttonid5');
let OnOffdiv5 = document.getElementById('displayJSid5');

OnOffbutton5.addEventListener('click', Event => {
   if(OnOffdiv5.style.display == 'block'){
          OnOffdiv5.style.display = 'none';}
       else if(OnOffdiv5.style.display = 'none'){
          OnOffdiv5.style.display = 'block'}
});

// _____________________________

let OnOffbutton6 = document.getElementById('buttonid6');
let OnOffdiv6 = document.getElementById('displayJSid6');

OnOffbutton6.addEventListener('click', Event => {
   if(OnOffdiv6.style.display == 'block'){
          OnOffdiv6.style.display = 'none';}
       else if(OnOffdiv6.style.display = 'none'){
          OnOffdiv6.style.display = 'block'}
});

// _____________________________

let OnOffbutton7 = document.getElementById('buttonid7');
let OnOffdiv7 = document.getElementById('displayJSid7');

OnOffbutton7.addEventListener('click', Event => {
   if(OnOffdiv7.style.display == 'block'){
          OnOffdiv7.style.display = 'none';}
       else if(OnOffdiv7.style.display = 'none'){
          OnOffdiv7.style.display = 'block'}
});











