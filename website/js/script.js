
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//                                                              Partie Affichage du questionnaire !
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-----------------------------------------------------
//                     Le Questionnaire :
//-----------------------------------------------------

// Ma fonction peut-être améliorée avec la sélection des div par un array et un ajout d'id pour chaques éléments
// Cela me permettrait, d'éviter de retoucher mon code quand j'augmente la quantité de choix disponibles

//--------------------------------
//  Apparition des divs au click
//---------------------------------

function OpenClose(openB, openD){
   
   let OnOffbutton = document.getElementById(openB);
   let OnOffdiv = document.getElementById(openD);


   OnOffbutton.addEventListener('click', () => {
      if(OnOffdiv.style.display == 'none'){
            OnOffdiv.style.display = 'block';
      }
      else if(OnOffdiv.style.display = 'block'){
            OnOffdiv.style.display = 'none'}
   }
   )
}


//----------------------------------------------------------------
//  Généralisation de la fonction sur l'ensemble des formulaires
//----------------------------------------------------------------

for (let i = 1; i < 4; i++){
   OpenClose(`buttonid${i}`, `displayJSid${i}`);
} 