
<?php

// ---------------------------------------

class Media{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_media,
    $date_media,
    $link_media;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        PUBLIC function __construct()
        {   
        }

// ---------------------------------------
            // getters
// ---------------------------------------

    PUBLIC function getIdMedia(){
        return $this -> id_media;
    }

    PUBLIC function getDateMedia(){
        return $this -> date_media;
    }

    PUBLIC function getLinkMedia(){
        return $this -> link_media;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    PUBLIC function setIdMedia($new_id_media){
        $this -> id_media = $new_id_media;
    }

    PUBLIC function setDateMedia($new_date_media){
        $this -> date_media = $new_date_media;
    }

    PUBLIC function setLinkMedia($new_link_media){
        $this -> link_media = $new_link_media;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function displayMedia(){

    }

    PUBLIC function addMedia(){

    }

    PUBLIC function deleteMedia(){

    }

    PUBLIC function selectPrincipalMedia(){

    }

}

?>