
<?php

// ---------------------------------------

class ArchetypPersonality{
    
// ---------------------------------------
            // classes privées
// ---------------------------------------
    PRIVATE 
    $id_AP,
    $txt_AP,
    $wrongTxt_AP,
    $number_AP,
    $wrongNumber_AP;

// ---------------------------------------
                // constructeur
// ---------------------------------------

    PUBLIC function __construct()
    {   
    }

// ---------------------------------------
                // getters
// ---------------------------------------

    PUBLIC function getIdAp(){
        return $this -> id_AP;
    }

    PUBLIC function getTxtAp(){
        return $this -> txt_AP;
    }

    PUBLIC function getWrongTxtAP(){
        return $this -> wrongTxt_AP;
    }

    PUBLIC function getNumberAp(){
        return $this -> number_AP;
    }

    PUBLIC function getWrongNumberAp(){
        return $this -> wrongNumber_AP;
    }


// ---------------------------------------
                // setters
// ---------------------------------------

    PUBLIC function setIdAp($new_id_AP){
        $this -> id_AP = $new_id_AP;
    }

    PUBLIC function setTxtAp($new_txt_AP){
        $this -> txt_AP = $new_txt_AP;
    }

    PUBLIC function setWrongTxtAp($new_wrongtxt_AP){
        $this -> wrongTxt_AP = $new_wrongtxt_AP;
    }

    PUBLIC function setNumberAp($new_number_AP){
        $this -> number_AP = $new_number_AP;
    }

    PUBLIC function setWrongNumberAp($new_wrongNumber_AP){
        $this -> wrongNumber_AP = $new_wrongNumber_AP;
    }

// ---------------------------------------
            // Methodes
// ---------------------------------------

    PUBLIC function modifyArchetypPersonality(){

    }

    PUBLIC function addArchetypPersonality(){

    }

    PUBLIC function displayArchetypPersonality(){

    }

}

?>