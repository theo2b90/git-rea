

<?php

// ---------------------------------------

class Country{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_country,
    $name_country;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        public function __construct()
        {

        }

// ---------------------------------------
            // getters
// ---------------------------------------

    public function getIdCountry(){
        return $this -> id_country;
    }

    public function getNameCountry(){
        return $this -> name_country;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdCountry($new_id_country){
        $this -> id_country = $new_id_country;
    }

    public function setNameCountry($new_name_country){
        $this -> name_country = $new_name_country;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function selectCountry(){

    }

    PUBLIC function modifyCountry(){

    }

    PUBLIC function displayCountry(){

    }

}

?>