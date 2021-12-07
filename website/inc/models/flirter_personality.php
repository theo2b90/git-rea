<?php

// ---------------------------------------

class FlirterPersonality{
    
// ---------------------------------------
            // classes privées
// ---------------------------------------
    PRIVATE 
    $id_FP,
    $txt_FP,
    $wrongTxt_FP,
    $number_FP,
    $wrongNumber_FP;

// ---------------------------------------
                // constructeur
// ---------------------------------------

    PUBLIC function __construct()
    {   
    }

// ---------------------------------------
                // getters
// ---------------------------------------

    PUBLIC function getIdFp(){
        return $this -> id_FP;
    }

    PUBLIC function getTxtFp(){
        return $this -> txt_FP;
    }

    PUBLIC function getWrongTxtFp(){
        return $this -> wrongTxt_FP;
    }

    PUBLIC function getNumberFp(){
        return $this -> number_FP;
    }

    PUBLIC function getWrongNumberFp(){
        return $this -> wrongNumber_FP;
    }


// ---------------------------------------
                // setters
// ---------------------------------------

    PUBLIC function setIdFp($new_id_FP){
        $this -> id_FP = $new_id_FP;
    }

    PUBLIC function setTxtFp($new_txt_FP){
        $this -> txt_FP = $new_txt_FP;
    }

    PUBLIC function setWrongTxtFp($new_wrongtxt_FP){
        $this -> wrongTxt_FP = $new_wrongtxt_FP;
    }

    PUBLIC function setNumberFp($new_number_FP){
        $this -> number_FP = $new_number_FP;
    }

    PUBLIC function setWrongNumberFp($new_wrongNumber_FP){
        $this -> wrongNumber_FP = $new_wrongNumber_FP;
    }

// ---------------------------------------
            // Methodes
// ---------------------------------------

    PUBLIC function modifyFlirterPersonality(){

    }

    PUBLIC function addFlirterPersonality(){

    }

    PUBLIC function displayFlirterPersonality(){

    }

}

?>