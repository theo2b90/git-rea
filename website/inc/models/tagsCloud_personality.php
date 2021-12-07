
<?php

// ---------------------------------------

class TagsCloudPersonality{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_TCP,
    $word_TCP;

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
        return $this -> id_TCP;
    }

    public function getWordTCP(){
        return $this -> word_TCP;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdTCP($new_id_TCP){
        $this -> id_TCP = $new_id_TCP;
    }

    public function setWordTCP($new_word_TCP){
        $this -> word_TCP = $new_word_TCP;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function addTCP(){

    }

    PUBLIC function displayTCP(){
        
    }

    PUBLIC function deleteTCP(){
        
    }

}

?>