
<?php

// ---------------------------------------

class department{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_department,
    $name_department;

// ---------------------------------------
            // constructeur
// ---------------------------------------

        public function __construct()
        {

        }

// ---------------------------------------
            // getters
// ---------------------------------------

    public function getIdDepartment(){
        return $this -> id_department;
    }

    public function getNameDepartment(){
        return $this -> name_department;
    }


// ---------------------------------------
            // setters
// ---------------------------------------

    public function setIdDepartment($new_id_department){
        $this -> id_department = $new_id_department;
    }

    public function setNameCountry($new_name_department){
        $this -> name_department = $new_name_department;
    }

// ---------------------------------------
        // Methodes
// ---------------------------------------

    PUBLIC function selectDepartment(){

    }

    PUBLIC function modifyDepartment(){

    }

    PUBLIC function displayDepartment(){

    }

}

?>