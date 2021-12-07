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

<!---------------------------------
    Photos du profil
 --------------------------------->

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

    <!---------------------------------
        Description du profil
    --------------------------------->

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

    <!---------------------------------
        Questionnaire IHaitit
    --------------------------------->

        <div id = "questionnaire">

            <div id = "questionnaireChild">
                <div>
                    <h3>Questionnaire</h3>
                    <p>♥ Remplire ce questionnaire permettra à tes prétendant(es) de te voir s'il ne te détestes pas trop. Complète le au maximum et tu auras accès à l'ensemble des profils par ordre de compatibilité.♥<p>
                </div>
            
                <div class = "questionnaireQuestion">
                    <p>Quel serait selon toi, la personnalité te resemblant le plus et celle que tu détestes ?</p> 
                    <button>Click-ici ♥</button>
                </div>

                <div>
                    <form  method="POST" action='TEMPORAIRE.php'>
                        <label> lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality </label>
                        <span>
                            <input type= "radio" name="personnaliteMe1">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti2">Ce que je deteste</input>
                        </span>
                        <label>lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality</label>
                        <span>
                            <input type= "radio" name="personnaliteMe1">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti2">Ce que je deteste</input>
                        </span>
                        <label>lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality</label>
                        <span>
                            <input type= "radio" name="personnaliteMe1">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti2">Ce que je deteste</input>
                        </span>
                        <label>lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality lorem ipsum personnality</label>
                        <span>
                            <input type= "radio" name="personnaliteMe1">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti2">Ce que je deteste</input>
                        </span>
                        <input type= "submit" name="submitPersonnality">
                    </form>
                </div>

                <div class = "questionnaireQuestion">
                    <p>Comment personnifirais tu tes désirs ? Quelle personnification détesterait tu avoir à faire ?</p> 
                    <button>Click-ici ♥</button>
                </div>

                <div>
                    <form  method="POST" action='TEMPORAIRE.php'>
                        <label>Lorem Ipsum desire Lorem Ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire</label>
                        <span>
                            <input type= "radio" name="desireMe">Ce que je suis</input>
                            <input type= "radio" name="desireHaiti">Ce que je deteste</input>
                        </span>
                        <label>Lorem Ipsum desire Lorem Ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire</label>
                        <span>
                            <input type= "radio" name="desireMe">Ce que je suis</input>
                            <input type= "radio" name="desireHaiti">Ce que je deteste</input>
                        </span>
                        <label>Lorem Ipsum desire Lorem Ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire  </label>
                        <span>
                            <input type= "radio" name="desireMe">Ce que je suis</input>
                            <input type= "radio" name="desireHaiti">Ce que je deteste</input>
                        </span>
                        <label>Lorem Ipsum desire Lorem Ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire lorem ipsum desire  </label>
                        <span>
                            <input type= "radio" name="desireMe">Ce que je suis</input>
                            <input type= "radio" name="desireHaiti">Ce que je deteste</input>
                        </span>
                        <input type= "submit" name="submitPersonnality">
                    </form>
                </div>


                <div class = "questionnaireQuestion">
                    <p>Quel flirter(euse) es-tu ? Quel flirter(euse) détesterais tu rencontrer ? Ca yes, t'a compris ou je voulais en venir ein ?</p>
                    <button>Click-ici ♥</button>
                </div>

                <div>
                    <form  method="POST" action='TEMPORAIRE.php'>
                        <label for="personnalite1"> lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter </label>
                        <span>
                            <input type= "radio" name="personnaliteMe">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti">Ce que je deteste</input>
                        </span>
                        <label for="personnalite2">  lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter</label>
                        <span>
                            <input type= "radio" name="personnaliteMe">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti">Ce que je deteste</input>
                        </span>
                        <label for="personnalite3">  lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter</label>
                        <span>
                            <input type= "radio" name="personnaliteMe">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaiti">Ce que je deteste</input>
                        </span>
                        <label for="personnalite4">  lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter lorem ipsum flirter</label>
                        <span>
                            <input type= "radio" name="personnaliteMe">Ce que je suis</input>
                            <input type= "radio" name="personnaliteHaitit">Ce que je deteste</input>
                        </span>
                        <input type= "submit" name="submitPersonnality">
                    </form>
                </div>
            </div>
    
            <!---------------------------------
                Placement du Tips
            --------------------------------->
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
            <!-------------------------------------
                Placement des manies personnelles
            -------------------------------------->
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
            <!-------------------------------------
                Placement des manies detestées
            -------------------------------------->
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

            <!-------------------------------------
                Placement du nuage de mots clefs
            -------------------------------------->
            <div id = "nuageMotsClefs">
                <h3>Tag qui tu es !</h3>
                <div >
                    <img src="../img/nuage_exemple.png"> </img>
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