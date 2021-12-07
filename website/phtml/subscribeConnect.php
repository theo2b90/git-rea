<?php session_start() ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Bootstrap Carousel</title>
      <link rel="stylesheet" href="../css/subscribeConnect.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
       
        <div class="container-fluid" > <!-- initialisation caroussel Bootstrap-->
            <div id="myCarousel" class="carousel slide border" data-interval="false">
               <div class="carousel-inner" id="carouselInner">
                  <div class="carousel-item active" id="carouselItem">
                
                   <!-----------------------------------------------------
                        Première partie du caroussel (La connection)
                    ----------------------------------------------------->
                     <img class="d-block w-100" src="../img/yeti_caroussel2.jpg">
                     <div class="carousel-caption d-none d-sm-block" id="field1">
                        <form action="../inc/controler/createConnectUser.php" method="POST" id ="caca">
                            <fieldset id ="carousel1">
                            <h5>Connection</h5>
                            <label>Adresse email</label>
                            <input type="email" name="emailS_user">
                            <label>Mot de passe</label>
                            <input type="password" name="passwordS_user">
                            <input type ="submit" id="connect">
                            </fieldset>
                        </form>
                        
                        <?php 
                        echo $_SESSION["alert"];
                        $_SESSION["alert"] = null;
                        ?>
                     </div>
                    
                </div>
                    <!----------------------------------------------------
                    Deuxième partie du caroussel (L'inscription)
                    ----------------------------------------------------->
                    <!---------------
                        Inscription 1
                    ----------------->

                <form action="../inc/controler/createConnectUser.php" method="POST" id="carouArrow">
                    <div class="carousel-item">
                    <img class="d-block w-100" src="../img/yeti_caroussel.jpg">
                        <div class="carousel-caption d-none d-sm-block" id="field2">
                            <fieldset id ="carousel2">
                            <h5>Inscription 1/4</h5>
                            <div>
                                <label>Nom</label>
                                <input type="text" name="lastname_user"></input>
                            </div>
                            <div>
                                <label>Prenom</label>
                                <input type="text"  name="firstname_user"></input>
                            </div>
                            <div>
                                <label>Date_naissance</label>
                                <input type="date" name="birth_user"></input>
                            </div>            
                            </fieldset>
                            <a href="">retour accueil</a>
                        </div>
                    </div>

                    <!---------------
                      Inscription 2
                    ---------------->

                    <div class="carousel-item">
                    <img class="d-block w-100" src="../img/yeti_caroussel.jpg">
                        <div class="carousel-caption d-none d-sm-block" id="field2">
                                <fieldset id ="carousel3">
                                <h5>Inscription 2/4</h5>
                            <div>
                                <label>Identifiant</label>
                                <input type="text" name="identifyI_user"></input>
                            </div>
                            <div>
                                <label>Adresse email</label>
                                <input type="email" name="emailI_user"></input>
                            </div>
                            <div>
                                <label>mot de passe</label>
                                <input type="password" name="passwordI_user"></input>
                            </div>
                            <div>
                                <label>Verification mdp</label>
                                <input type="password" name="passwordI2_user"></input>
                            </div>
                                <a href=""></a>
                                <a href="">retour accueil</a>
                            </fieldset> 
                        </div>
                    </div>

                    <!---------------
                      Inscription 3
                    ---------------->

                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/yeti_caroussel.jpg">
                        <div class="carousel-caption d-none d-sm-block" id="field3">
                            <fieldset id ="carousel4">
                            <h5>Inscription 3/4</h5>
                            <p>tu es un(e) :</p>
                            <div>
                                <label>Homme</label>
                                <input type="radio" name ="gender_user" value="homme">
                            </div>
                            <div>
                                <label>Femmes</label>
                                <input type="radio" name="gender_user" value="femme">
                            </div>
                            <p>Veux-tu rencontrer</p>
                            <div>
                                <label>Des hommes</label>
                                <input type="radio" name ="gender2_user" value="homme">
                            </div>
                            <div>
                                <label>Des femmes</label>
                                <input type="radio" name="gender2_user" value="femme">
                            </div>
                            <a href="">retour accueil</a>
                            </fieldset>  
                        </div>
                    </div>

                    <!---------------
                      Inscription 4
                    ---------------->

                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img/yeti_caroussel.jpg">
                        <div class="carousel-caption d-none d-sm-block" id="field4">
                        <h5>Inscription 4/4</h5>
                            <p class = "field2">Après avoir validé tes informations et confirmé la création de ton compte, n'oublie pas de compléter ton profil pour avoir accès aux prétendant(es)</p>
                            <input type ="submit" value ="valider"></input>
                            <a href="">retour accueil</a>
                        </div>
                       
                        <p id="errorZone"></p>
                        </div>
                    </div>
                </form>

                    <!----------------------------------------------------
                        Affichage des flèches directrices du caroussel
                    ----------------------------------------------------->
                </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> -->
            </div>
        </div>  

                    <!------------------
                        FW : Bootstrap
                    ------------------->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
     
</html>
         <!------------------------------------------------------------------------------------------------
                                            OBSERVATIONS EVOLUTION :
                                            
                Améliorations : Aspect esthétique ; Amélioration ergonomie & Expérience utilisateur ; fond
        --------------------------------------------------------------------------------------------------->

      