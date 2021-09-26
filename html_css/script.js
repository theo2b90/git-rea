// var button1 = document.getElementById("button1");
// var displayJS = document.getElementById("displayJS");

// function buttonActionOnOff(){
//     if(getComputedStyle(displayJS).display != "none"){
//         displayJS.style.display="none";
//     }
//     else{
//         displayJS.style.display="block";
//     }
// };
// button1.onclick = buttonActionOnOff;

// La fonction ne marche pas, Faire recherches. BUT : Faire Apparaitre et disparaitre le formulaire au clique du boutton. https://www.pierre-giraud.com/afficher-cacher-div-javascript/

var button1 = document.getElementById("button1");
var displayJS = document.getElementById("displayJS");

function buttonActionOnOff(){
    if(getComputedStyle(displayJS).display != "none"){
        displayJS.style.display = "none";
    }
    else{
        displayJS.style.display = "block";
    }
};

button1.onclick = buttonActionOnOff;