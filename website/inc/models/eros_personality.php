<?php

// ---------------------------------------

class ErosPersonality{
    
// ---------------------------------------
            // classes privées
// ---------------------------------------
    PRIVATE 
    $id_EP,
    $txt_EP,
    $wrongTxt_EP,
    $number_EP,
    $wrongNumber_EP;

// ---------------------------------------
                // constructeur
// ---------------------------------------

    PUBLIC function __construct()
    {   
    }

// ---------------------------------------
                // getters
// ---------------------------------------

    PUBLIC function getIdEp(){
        return $this -> id_EP;
    }

    PUBLIC function getTxtEp(){
        return $this -> txt_EP;
    }

    PUBLIC function getWrongTxtEp(){
        return $this -> wrongTxt_EP;
    }

    PUBLIC function getNumberEp(){
        return $this -> number_EP;
    }

    PUBLIC function getWrongNumberEp(){
        return $this -> wrongNumber_EP;
    }


// ---------------------------------------
                // setters
// ---------------------------------------

    PUBLIC function setIdEp($new_id_EP){
        $this -> id_EP = $new_id_EP;
    }

    PUBLIC function setTxtEp($new_txt_EP){
        $this -> txt_EP = $new_txt_EP;
    }

    PUBLIC function setWrongTxtEp($new_wrongtxt_EP){
        $this ->wrongTxt_EP = $new_wrongtxt_EP;
    }

    PUBLIC function setNumberEp($new_number_EP){
        $this -> number_EP = $new_number_EP;
    }

    PUBLIC function setWrongNumberEp($new_wrongNumber_EP){
        $this -> wrongNumber_EP = $new_wrongNumber_EP;
    }

// ---------------------------------------
            // Methodes
// ---------------------------------------

    PUBLIC function modifyErosPersonality(){

    }

    PUBLIC function addErosPersonality(){

    }

    PUBLIC function displayErosPersonality(){

    }

}

?>