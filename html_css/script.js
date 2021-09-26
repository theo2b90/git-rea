var button1 = document.getElementById("button1");
var displayJS = document.getElementById("displayJS");

button1.addEventListener("click", () => {
    if(getComputedStyle(displayJS).display != "none"){
        displayJS.style.display="none";
    }
    else{
        displayJS.style.display="block";
    }
})

// La fonction ne marche pas, Faire recherches BUT : Faire Apparaitre et disparaitre le formulaire au clique du boutton. https://www.pierre-giraud.com/afficher-cacher-div-javascript/

