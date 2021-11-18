<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">m>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
</head>

<body>

<?php
    include 'header.php';
?>

<div class ="divMargMiddle" id ="profil">


    <div id = "divPhoto">
        <div>
            <img id = "photoPrincipale" src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
        </div>
        <div>
            <div>
                <button>Modifier</button>
                <button>supprimer</button>
            </div>
            
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
                <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
            
        </div>
    </div>
    

    <div id = "description">
        <div>
            <h3>Description :</h3>
            <form method = "POST" action = "phpscript.php">
            <textarea maxlength = 500  placeholder = "Bonjour cher utilisateur. Ce champ est destiné à se décrire succinctement. Bien que tu puisses aimer raconter ta vie, la politique du site est de découvrir l'autre sans en faire une histoire de CV !" rows="13"></textarea>
            </form>
        </div>
        <div>
            <button>Modifier</button>
        </div>
    </div>

    
    
        

        <div id = "questionnaire">

            <div>
                <div>
                    <h3>Questionnaire</h3>
                    <p>♥ Remplire ce questionnaire permettra à tes prétendant(es) de te voir s'il ne te détestes pas trop. Complète le au maximum et tu auras accès à l'ensemble des profils par ordre de compatibilité.♥<p>
                </div>
            
                <div class = "questionnaireQuestion">
                    <p>Quel serait selon toi, la personnalité te resemblant le plus et celle que tu détestes ?</p> 
                    <button onclick="this.id" id ="buttonid1">Click-ici ♥</button>
                </div>

                <div id = "displayJSid1" style ="display:none">
                    <form  method="POST" action='TEMPORAIRE.php'>
                        <input type= "checkbox" name="personnalite1" id="personnalite1">
                        <label for="personnalite1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="personnalite2" id="personnalite2">
                        <label for="personnalite2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="personnalite3" id="personnalite3">
                        <label for="personnalite3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="personnalite4" id="personnalite4">
                        <label for="personnalite4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>            
                    </form>
                </div>

                <div class = "questionnaireQuestion">
                    <p>Comment personnifirais tu tes désirs ? Quelle personnification détesterait tu avoir à faire ?</p> 
                    <button id ="buttonid2">Click-ici ♥</button>
                </div>
                <div id = "displayJSid2" style ="display:none">
                    <form method="POST" action='TEMPORAIRE.php'>
                        <input type= "checkbox" name="eros1" id="eros1">
                        <label for="eros1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="eros2" id="eros2">
                        <label for="eros2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="eros3" id="eros3">
                        <label for="eros3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="eros4" id="eros4">
                        <label for="eros4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                    </form>
                </div>


                <div class = "questionnaireQuestion">
                    <p>Quel flirter(euse) es-tu ? Quel flirter(euse) détesterais tu rencontrer ? Ca yes, t'a compris ou je voulais en venir ein ?</p>
                    <button id ="buttonid3">Click-ici ♥</button>
                </div>
                <div id = "displayJSid3" style ="display:none">
                    <form method="POST" action='TEMPORAIRE.php'>
                        <input type= "checkbox" name="flirter1" id="flirter1">
                        <label for="flirter1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="flirter2" id="flirter2">
                        <label for="flirter2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="flirter3" id="flirter3">
                        <label for="flirter3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        <input type= "checkbox" name="flirter4" id="flirter4">
                        <label for="flirter4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                    </form>
                </div>
            </div>
    

    
            <div class = "textArea">
                <h3>Tes conseils</h3>
                <p>♥Dépose un conseil, Récolte des votes♥</p>

                <div>
                    <form method = "POST" action = "phpscript.php">
                    <textarea placeholder = "Ici place ton tips, les prétendant(e)s votent pour leurs photo préférée. Si la photo en question est aussi ta préférée, ils auront l'un de tes conseils avisés pour t'aborder (Tu peux afficher le nombre de votes ou le cacher)" rows="5"></textarea>
                    </form>
                </div>
                <div>
                    <button>Modifier</button>
                    <button>Supprimer</button>
                </div>
            </div>
            
            <div class = "textArea">
                <h3>Tes petites manies</h3>
                <p>♥Insère tes petites manies insupportables (Rien ne sera affiché à tes prétendant(es)) et tu ne seras pas pénalisé ! Fait moi confiance ! ♥<p>
                
                <div>
                    <form method = "POST" action = "phpscript.php">
                    <textarea placeholder = "Insère ici tes petites manies insupportables parmis la liste. Par exemple : Poils dans le robiné, cuvette des toilettes, flemmard, tapotte des jambes" rows="8"></textarea>
                    </form>
                </div>
                <div>
                    <button>Modifier</button>
                    <button>Supprimer</button>
                </div>
            </div>

            <div class = "textArea">
                <h3>Les manies que tu détestes</h3>
                <p>♥Insère ces manies insupportables qui te révulses(Rien ne sera affiché à tes prétendant(es)) et tu ne seras pas pénalisé ! Fait moi confiance ! ♥<p>
                
                <div>
                    <form method = "POST" action = "phpscript.php">
                    <textarea placeholder = "Insère ici tes petites manies insupportables parmis la liste. Par exemple : Poils dans le robiné, cuvette des toilettes, flemmard, tapotte des jambes" rows="8"></textarea>
                    </form>
                </div>
                <div>
                    <button>Modifier</button>
                    <button>Supprimer</button>
                </div>
            </div>
            
            <div id = "nuageMotsClefs">
                <h3>Tag qui tu es !</h3>
                <div >
                    <img src="img/nuage_exemple.png"> </img>
                </div>
                <div >
                    <button>Ajouter</button>
                    <button>Supprimer</button>
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php 
    include 'footer.php';
?>


    <!-- <form method="POST" action='TEMPORAIRE.php'>
        <label for="_intro"> ?</label><br/>
        <input type= "checkbox" name="" id=""><label for="">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
        <input type= "checkbox" name="" id=""><label for="">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
        <input type= "checkbox" name="" id=""><label for="">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
        <input type= "checkbox" name="" id=""><label for="">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
    </form> -->
    


<!-- Autre format (Rajouter les display flex)
    <form  method="POST" action='TEMPORAIRE.php'>
                <div>
                    <div>
                        <div>
                            <input type= "checkbox" name="personnalite1" id="personnalite1">
                        </div>
                        <div>
                            <label for="personnalite1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type= "checkbox" name="personnalite2" id="personnalite2">
                        </div>
                        <div>
                            <label for="personnalite2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <input type= "checkbox" name="personnalite3" id="personnalite3">
                        </div>
                        <div>
                            <label for="personnalite3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type= "checkbox" name="personnalite4" id="personnalite4">
                        </div>
                        <div>
                            <label for="personnalite4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>   
                        </div>
                    </div>
                </div>
            </form>
        </div> -->

