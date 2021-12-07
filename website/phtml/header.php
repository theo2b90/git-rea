
<?php 
session_start();
    //If conventionnel : preferable à ma methode temporaire
// if ("GET" === $_SERVER["REQUEST_METHOD"]) {
    if ($_SESSION["mdp"] != true) {
    // Renvoie l'utilisateur à la racine du serveur
    header('Location: ../../phtml/subscribeConnect.php');
    // Met fin au script par mesure de sécurité
    die();
}

?>
<body>

    <header>
    <img id="banniere" src="../img/banniere.png">
      
    <nav>
        <div></div>

        <img class ="boxnav" id="imgnavexclu" src="../img/logo.png"><img>
        <a class ="boxnav boxnav2" href="decouvrir.php">Decouvrir</a>
        <a class ="boxnav boxnav2" href="visite.php">Visites</a>
        <a class ="boxnav boxnav2" href="recherche.php">Recherche</a>
        <a class ="boxnav boxnav2" href="messagerie.php">Messagerie</a>
        <a id ="anavexclu"></a>
        <a class ="boxnav boxnav2" href="profil.php">Mon profil</a>
        <a class ="boxnav boxnav2"href="compte.php">Mon compte</a>
        <div></div>
    </nav>
    </header>

        <section id = "divBody">
            <div class = "divMargSides"></div>

