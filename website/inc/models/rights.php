
<?php

// ---------------------------------------

class Rights{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_rights,
    $user_rights;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        PUBLIC function __construct()
        { 

        }

// ---------------------------------------
            // getters
// ---------------------------------------

    PUBLIC function getIdRights(){
        return $this -> id_rights;
    }

    PUBLIC function getUserRights(){
        return $this -> user_rights;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    PUBLIC function setIdRights($new_id_rights){
        $this -> id_rights = $new_id_rights;
    }

    PUBLIC function setUserRights($new_user_rights){
        $this -> user_rights = $new_user_rights;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

PUBLIC function addRights(){

}

PUBLIC function modifyRights(){

}

}

?>