<?php

// ---------------------------------------

class Members{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_members,
    $pseudo_members,
    $lastname_members,
    $firstname_members,
    $age_members,
    $password_members,
    $sexe_members,
    $sexuelOrientation_members,
    $adresseEmail_members,
    $admin_comments_members,
    $subscriptionDate_members,
    $lastConnection_members,
    $unsubscribe_members,
    $description_members,
    $tips_members;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        PUBLIC function __construct()
        {   
        }

// ---------------------------------------
            // getters
// ---------------------------------------

    PUBLIC function getIdUsers(){
        return $this->id_members;
    }

    PUBLIC function getPseudoMembers(){
        return $this->pseudo_members;
    }

    PUBLIC function getLastnameMembers(){
        return $this -> lastname_members;
    }

    PUBLIC function getFirstnameMembers(){
        return $this->firstname_members;
    }

    PUBLIC function getAgeMembers(){
        return $this->age_members;
    }

    PUBLIC function getPasswordMembers(){
        return $this->password_members;
    }

    PUBLIC function getSexeMembers(){
        return $this->sexe_members;
    }

    PUBLIC function getSexuelOrientationMembers(){
        return $this->sexuelOrientation_members;
    }

    PUBLIC function getAdresseEmailMembers(){
        return $this->adresseEmail_members;
    }

    PUBLIC function getAdminCommentsMembers(){
        return $this->admin_comments_members;
    }

    PUBLIC function getSubscriptionDateMembers(){
        return $this->subscriptionDate_members;
    }

    PUBLIC function getlastConnectionMembers(){
        return $this->lastConnection_members;
    }

    PUBLIC function getUnsubscribeMembers(){
        return $this->unsubscribe_members;
    }

    PUBLIC function getDescriptionMembers(){
        return $this->description_members;
    }

    PUBLIC function getTipsMembers(){
        return $this->tips_members;
    }

// ---------------------------------------
            // setters
// ---------------------------------------

    PUBLIC function setIdUsers($new_id_members){
        $this->id_members = $new_id_members;
    }

    PUBLIC function setPseudoMembers($new_pseudo_members){
        $this->pseudo_members = $new_pseudo_members;
    }

    PUBLIC function setLastnameMembers($new_lastname_members){
        $this->lastname_members = $new_lastname_members;
    }

    PUBLIC function setFirstnameMembers($new_firstname_members){
        $this->firstname_members = $new_firstname_members;
    }

    PUBLIC function setAgeMembers($new_age_members){
        $this->age_members = $new_age_members;
    }

    PUBLIC function setPasswordMembers($new_password_members){
        $this->password_members = $new_password_members;
    }

    PUBLIC function setSexeMembers($new_sexe_members){
        $this->sexe_members = $new_sexe_members;
    }

    PUBLIC function setSexuelOrientationMembers($new_sexuelOrientation_members){
        $this->sexuelOrientation_members = $new_sexuelOrientation_members;
    }

    PUBLIC function setAdresseEmailMembers($new_adresseEmail_members){
        $this->adresseEmail_members = $new_adresseEmail_members;
    }

    PUBLIC function setAdminCommentsMembers($new_admin_comments_members){
        $this->admin_comments_members = $new_admin_comments_members;
    }

    PUBLIC function setSubscriptionDateMembers($new_subscriptionDate_members){
        $this->subscriptionDate_members = $new_subscriptionDate_members;
    }

    PUBLIC function setlastConnectionMembers($new_lastConnection_members){
        $this->lastConnection_members = $new_lastConnection_members;
    }

    PUBLIC function setUnsubscribeMembers($new_unsubscribe_members){
        $this->unsubscribe_members = $new_unsubscribe_members;
    }

    PUBLIC function setDescriptionMembers($new_description_members){
        $this->description_members = $new_description_members;
    }

    PUBLIC function setTipsMembers($new_tips_members){
        $this->tips_members = $new_tips_members;
    }

// ---------------------------------------
            // Methodes
// ---------------------------------------
    
    PUBLIC function hashVerify($mdp, $hash){
                                            if (password_verify($mdp, $hash)) { 
                                                return true;
                                            } else {
                                                return false;
                                            }
                                        }
     
    PUBLIC function hashPassword($cost){    //Methode hashage d'un mot de mot de passe en Bcrypt : passer le cout du hash en paramétre (10)
                                            //variable tableau du cout du hashage
                                            $options = [
                                                'cost' => $cost,
                                            ];
                                            $this->setPasswordMembers(password_hash($this->getPasswordMembers(), PASSWORD_BCRYPT, $options));
                                        }

    PUBLIC function createMember($bdd)
                                    {   

                                        try
                                        {   
                                            // ------------------------------------------------------------------
                                            //requête (Préparation) : ajout des attributs à la BDD par pointage
                                            // ------------------------------------------------------------------

                                            $req = $bdd->prepare('INSERT INTO members(members_pseudo, members_lastname, members_firstname, 
                                            members_age, members_password, members_sexe, members_sexualOrientation, members_addressEmail, 
                                            members_subscriptionDate) 

                                            VALUES (:members_pseudo, :members_lastname, :members_firstname, 
                                            :members_age, :members_password, :members_sexe, :members_sexualOrientation, :members_addressEmail, :members_subscriptionDate)');

                                            // ---------------------------------------------------------------------------------------------------------------------
                                            // exécution de la requête SQL(Récuparation des valeurs de l'objet et insertion des attributs dans la BDD avec pointeur)
                                            // ----------------------------------------------------------------------------------------------------------------------
                            
                                            $req->execute(array(
                                            'members_pseudo' => $this->getPseudoMembers(),
                                            'members_lastname' => $this->getLastnameMembers(),
                                            'members_firstname' => $this->getFirstnameMembers(),                                                                
                                            'members_age' => $this->getAgeMembers(),
                                            'members_password' => $this->getPasswordMembers(),
                                            'members_sexe' => $this->getSexeMembers(),
                                            'members_sexualOrientation' => $this->getSexuelOrientationMembers(),                                                            
                                            'members_addressEmail' => $this->getAdresseEmailMembers(),
                                            'members_subscriptionDate' => $this->getSubscriptionDateMembers()                                                    
                                            ));
                                            }
                                            // ------------------------------------------------------------
                                            // Récupération des erreurs du try
                                            // ------------------------------------------------------------

                                            catch(Exception $e)
                                            {
                                            //affichage d'une exception en cas d’erreur
                                            die('Erreur : '.$e->getMessage('erreurDeMerde'));
                                            }        
                                        }

    PUBLIC function subscriptionDateWebSite(){
                                            $this->setSubscriptionDateMembers(date('Y-m-d H:i:s'));
                                        }

    public function getCpt($bdd){
                               
                                        try
                                        { 
                                        // --------------------------------------
                                            // comme create Member (preparation)
                                        // --------------------------------------
                                            // IMPORTANT : Mémoriser la manière de créer l'alias (:emailS_user) qui es different de l'inscription   
                                            $req = $bdd->prepare('SELECT * FROM members where members_addressEmail = :emailS_user LIMIT 1');

                                            $req->execute(array(
                                            'emailS_user' => $this->getAdresseEmailMembers()                                                                                                                    
                                        ));

                                        // ---------------------------------------
                                        //    parcours du résultat de la requête
                                        //----------------------------------------
                                            while($donnees = $req->fetch())
                                            {

                                        // ---------------------------------------
                                        //    test si le compte correspond
                                        // ---------------------------------------
                                                if($donnees['members_addressEmail'] == $this->getAdresseEmailMembers())
                                                {
                                                    //retourne le mdp hashé en bcrypt, si l'adresseEmail n'existe pas renvoi null
                                                    return $donnees['members_password'];
                                                }
                                            }         
                                        }
                                            catch(Exception $e)
                                            {
                                            die('Erreur : '.$e->getMessage());
                                            }          
                                        }

    public function sendMail($bdd){
                
        
                                        }

// ---------------------------------------
        // Methodes
// ---------------------------------------

// PUBLIC function displayTargetByPersonality(){
    
// }

// PUBLIC function modifyOwnProfil(){
    
// }

// PUBLIC function deleteOwnProfil(){
    
// }

// PUBLIC function signalProfils(){
    
// }

// PUBLIC function displayTipsTarget(){
    
// }

// PUBLIC function showTargetByCountry(){
    
// }

// PUBLIC function showTargetByPersonality(){
    
// }

}

?>


