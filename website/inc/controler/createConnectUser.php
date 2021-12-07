<?php
// ----------------------------------------------------------------------------------------
// Insertion de la classe membre et de la structure html concernée (inscription connection)
// -----------------------------------------------------------------------------------------
include '../models/members.php';
session_start();

// ------------------------------------------------------------------------------------
// Verification des champs si complétés. ! = Verifier si imbrication !=null necessaire
// ------------------------------------------------------------------------------------

if(isset($_POST['lastname_user']) 
 && isset($_POST['firstname_user']) 
  && isset($_POST['birth_user']) 
   && isset($_POST['identifyI_user']) 
    && isset($_POST['emailI_user']) 
     && isset($_POST['passwordI_user']) 
      && isset($_POST['passwordI2_user']) 
       && isset($_POST['gender_user']) 
        && isset($_POST['gender2_user'])
        )
    {  

    // -------------------------------------------------------------------------------
    // Acces BDD / Creation, Setting de l'objet membre/ Sécurisation des attributs 
    // -------------------------------------------------------------------------------

    include '../utils/connexionbdd.php';
    if($_POST['passwordI_user'] == $_POST['passwordI2_user']){ 
        $newMembers = new Members();
        $newMembers->setLastnameMembers(htmlspecialchars($_POST['lastname_user']));
        $newMembers->setFirstnameMembers(htmlspecialchars($_POST['firstname_user']));
        $newMembers->setAgeMembers($_POST['birth_user']);
        $newMembers->setPseudoMembers(htmlspecialchars($_POST['identifyI_user']));
        $newMembers->setAdresseEmailMembers(htmlspecialchars($_POST['emailI_user']));
        $newMembers->setPasswordMembers(htmlspecialchars($_POST['passwordI_user']));
        $newMembers->hashPassword(5);
        $newMembers->setSexeMembers($_POST['gender_user']);
        $newMembers->setSexuelOrientationMembers($_POST['gender2_user']);
        $newMembers->subscriptionDateWebSite();
        $newMembers->createMember($bdd);
    }
}

// ------------------------------------------
    // Connection du membre au site internet
// ------------------------------------------

if(($_POST['emailS_user'])
 && ($_POST['passwordS_user'])){
    include '../utils/connexionbdd.php';

    // ---------------------------------------------------------------------
    //   ajout du login du formulaire à l'objet + sécurité htmlspecialchars
    // ---------------------------------------------------------------------
        $members = new Members();
        $members->setAdresseEmailMembers(htmlspecialchars($_POST['emailS_user']));
        $members->setPasswordMembers(htmlspecialchars($_POST['passwordS_user']));
        $mdp = $members->getPasswordMembers();
        $members->hashPassword(5);
    
    // -------------------------------------------------------------------------------------------------------------------
        //Verification d'existence du compte et comparaison (Si Null -> compte inexistant, connexion échouée) + verif MDP
    // -------------------------------------------------------------------------------------------------------------------
        $cpt = $members->getCpt($bdd);
        if($cpt == null){
            $_SESSION["alert"] = '<p>Veuillez vérifier vos informations</p>';
            header('Location: ../../phtml/subscribeConnect.php');
            die();       
        }
        else{
            if($members->hashVerify($mdp, $cpt)){
                $_SESSION["mdp"] = $cpt;
                header('Location: ../../phtml/decouvrir.php');
                die();
                   }
            else{
                $_SESSION["alert"] = '<p>Veuillez vérifier vos informations</p>';
                header('Location: ../../phtml/subscribeConnect.php');
                die();
            }   
        }  
    }

    // -----------------------------------------------------------------------------------------------------
    //   retour au 1er if : Σ de tous les champs non remplis (Permet de vérifier quel formulaire es remplit)
    // -----------------------------------------------------------------------------------------------------
    else{
        header('Location: ../../phtml/subscribeConnect.php');
        $_SESSION["alert"] = '<p>Veuillez vérifier vos informations</p>';
    }
?>