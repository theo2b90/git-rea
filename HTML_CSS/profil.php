<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
    include 'header.php';
?>


<div class ="divMargMiddle" id ="profil">

    <div id = "divPhoto">
        <div>
            <img src ="https://i.picsum.photos/id/1/200/200.jpg?hmac=jZB9EZ0Vtzq-BZSmo7JKBBKJLW46nntxq79VMkCiBG8"></img>
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

    <div>
        <form method = "POST" action = "phpscript.php">
        <textarea placeholder = "Bonjour cher utilisateur. Ce champ est destiné à se décrire succinctement. Bien que je pourrais te raconter ma vie, je suis sur que tu n'en a rien à faire, alors je vais t'épargner ce supplice. J'espère que tu vas en faire autant avec tes prétendant(es). Tiens d'ailleurs, cela me fait penser à ma grand mère... Hiers soir quand elle est allé chercher une baguette chez le boulanger, elle est tombé sur un gars, le genre de gars avec un t'shirt et un pull, ce genre de gars. Bref, il lui a dit bonjour et elle lui a même répondu. C'est une histoire que je souhaitais te faire partager... Voila..." rows="13"></textarea>
        </form>
    </div>

    <h3>Questionnaire</h3>
    <p>Remplire ce questionnaire permettra à tes prétendant(es) de te voir s'il ne te détestes pas trop.  Complète le au maximum et tu auras accès à l'ensemble des profils<p>
    <div id = "questionnaire">

        <p>Comment de décrirais tu ?</p>  <button href= "script.js" id ="buttonid1">Afficher questionnaire</button>
        <div id = "displayJSid1" style ="display:none">
            <form  method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="description1" id="description1">
                <label for="description1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="description2" id="description2">
                <label for="description2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="description3" id="description3">
                <label for="description3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="description4" id="description4">
                <label for="description4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>            
            </form>
        </div>

        <p>Quel dragueur est tu ?</p> <button href= "script.js" id ="buttonid2">Afficher questionnaire</button>
        <div id = "displayJSid2" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="dredger1" id="dredger1">
                <label for="dredger1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="dredger2" id="dredger2">
                <label for="dredger2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="dredger3" id="dredger3">
                <label for="dredger3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="dredger4" id="dredger4">
                <label for="dredger4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>


        <p>Et sinon, comment te soigne tu ?</p> <button href= "script.js" id ="buttonid3">Afficher questionnaire</button>
        <div id = "displayJSid3" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="hygiene1" id="hygiene1"><label for="hygiene1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="hygiene2" id="hygiene2"><label for="hygiene2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="hygiene3" id="hygiene3"><label for="hygiene3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="hygiene4" id="hygiene4"><label for="hygiene4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>

        
        <p>Quel est le romatique qui se cache en toi ?</p> <button href= "script.js" id ="buttonid4">Afficher questionnaire</button>
        <div id = "displayJSid4" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'  >
                <input type= "checkbox" name="romantic1" id="romantic1"><label for="romantic1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="romantic2" id="romantic2"><label for="romantic2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="romantic3" id="romantic3"><label for="romantic3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="romantic4" id="romantic4"><label for="romantic4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>

        <p>Tu es drôle à ta manière, mais drôle comment ?</p> <button href= "script.js" id ="buttonid5">Afficher questionnaire</button>
        <div id = "displayJSid5" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="humorist" id="humorist"><label for="humorist">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="humorist" id="humorist"><label for="humorist">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="humorist" id="humorist"><label for="humorist">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="humorist" id="humorist"><label for="humorist">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>

        <p>Quel animal es tu quand on parle sexe ?</p> <button href= "script.js" id ="buttonid6">Afficher questionnaire</button>
        <div id = "displayJSid6" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="sexuality" id="sexuality"><label for="sexuality">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="sexuality" id="sexuality"><label for="sexuality">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="sexuality" id="sexuality"><label for="sexuality">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="sexuality" id="sexuality"><label for="sexuality">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>

        <p>Quel est ton style de vie ?</p> <button href= "script.js" id ="buttonid7">Afficher questionnaire</button>
        <div id = "displayJSid7" style ="display:none">
            <form method="POST" action='TEMPORAIRE.php'>
                <input type= "checkbox" name="lifestyle1" id="lifestyle1"><label for="lifestyle1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="lifestyle2" id="lifestyle2"><label for="lifestyle2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="lifestyle3" id="lifestyle3"><label for="lifestyle3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                <input type= "checkbox" name="lifestyle4" id="lifestyle4"><label for="lifestyle4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
            </form>
        </div>
    <!-- Le style display:none est placé dans l'HTML Car dans le CSS, Il ne répond pas et les fenêtres ne sont pas fermées par défault -->
    </div>

    <h3>Tips : Son avis sur ta gueule contre un tips</h3>
    <div>
        <form method = "POST" action = "phpscript.php">
        <textarea placeholder = "Ici place ton tips, si les prétendant(e)s votent pour leurs photo préférée, ils auront l'un de tes conseils avisés pour t'aborder" rows="5"></textarea>
        </form>
    </div>

    <h3>Nuage de tags : Insère les mots qui te resemblent le plus !</h3>
    <div>
        <div>
            <form method = "POST" action = "phpscript.php">
            <textarea placeholder = "Sur ce site petit profil, peu d'informations, tout est caché. Place tes mots clefs ici et ton ou ta prétendante te remerciera de te trouver une bonne phrase d'accroche." rows="8"></textarea>
            </form>
        </div>
        <div>
            <p>TEMPORAIRE : INSERTION D'UN NUAGE DE MOTS CLEFS</p>
            <button>Ajouter mots</button>
            <button>Modifier</button>
            <button>Thème</button>
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
                            <input type= "checkbox" name="description1" id="description1">
                        </div>
                        <div>
                            <label for="description1">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type= "checkbox" name="description2" id="description2">
                        </div>
                        <div>
                            <label for="description2">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <input type= "checkbox" name="description3" id="description3">
                        </div>
                        <div>
                            <label for="description3">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type= "checkbox" name="description4" id="description4">
                        </div>
                        <div>
                            <label for="description4">Une personne Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit est, cursus ut magna porttitor, ultrices iaculis felis. Phasellus lorem enim, imperdiet in porta quis, tincidunt vitae ante. Suspendisse tempus nulla sed nulla tincidunt dignissim. Quisque arcu nunc, placerat ac tristique eu, finibus quis sapien. Duis ornare interdum quam, at pellentesque ex iaculis et. Etiam vitae neque accumsan, fringilla mauris a, bibendum dui. Cras non eros lectus. Integer sit amet quam faucibus, ullamcorper nunc eu, cursus tortor. Nam ullamcorper rutrum consectetur. Etiam ut mi pellentesque, euismod risus quis, cursus velit. Donec dictum ante eu velit mollis tincidunt. Aliquam a imperdiet justo. Nulla cursus augue neque. Morbi vitae dui at elit rhoncus tempus et vitae neque. Cras eget ultricies massa.  </label>   
                        </div>
                    </div>
                </div>
            </form>
        </div> -->
