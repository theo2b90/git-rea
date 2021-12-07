<?php

// ---------------------------------------

class TagsQuirksPersonality{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_TQP,
    $word_TQP;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        public function __construct()
        {
             
        }

// ---------------------------------------
            // getters
// ---------------------------------------

    public function getIdTQP(){
        return $this -> id_TQP;
    }

    public function getWordTQP(){
        return $this -> word_TQP;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdTQP($new_id_TQP){
        $this -> id_TQP = $new_id_TQP;
    }

    public function setWordTQP($new_word_TQP){
        $this -> word_TQP = $new_word_TQP;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function addTQP(){

    }

    PUBLIC function displayTQP(){
        
    }

    PUBLIC function deleteTQP(){
        
    }

    PUBLIC function selectTQP(){
        
    }

}

?>