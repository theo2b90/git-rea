
<?php

// ---------------------------------------

class City{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_city,
    $name_city;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        public function __construct()
        {

        }

// ---------------------------------------
            // getters
// ---------------------------------------

    public function getIdCity(){
        return $this -> id_city;
    }

    public function getNameCity(){
        return $this -> name_city;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdCity($new_id_city){
        $this -> id_city = $new_id_city;
    }

    public function setNameCity($new_name_city){
        $this -> name_city = $new_name_city;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function selectCity(){

    }

    PUBLIC function modifyCity(){

    }

    PUBLIC function displayCity(){

    }

}

?>