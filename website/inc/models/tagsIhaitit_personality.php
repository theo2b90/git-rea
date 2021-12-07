<?php

// ---------------------------------------

class TagsIhaititPersonality{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_TIP,
    $word_TIP;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        public function __construct()
        {
             
        }

// ---------------------------------------
            // getters
// ---------------------------------------

    public function getIdTCP(){
        return $this -> id_TIP;
    }

    public function getWordTCP(){
        return $this -> word_TIP;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdTCP($new_id_TIP){
        $this -> id_TIP = $new_id_TIP;
    }

    public function setWordTCP($new_word_TIP){
        $this -> word_TIP = $new_word_TIP;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function addTIP(){

    }

    PUBLIC function displayTIP(){
        
    }

    PUBLIC function deleteTIP(){
        
    }

    PUBLIC function selectTIP(){
        
    }

}

?>