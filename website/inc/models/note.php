
<?php

// ---------------------------------------

class Note{
    
// ---------------------------------------
        // classes privées
// ---------------------------------------
    PRIVATE 
    $id_note,
    $send_note,
    $date_note;

// ---------------------------------------
            // constructeur
// ---------------------------------------

   PUBLIC function __construct()
   {   
   }

// ---------------------------------------
            // getters
// ---------------------------------------

   PUBLIC function getIdNote(){
      return $this -> id_note;
   }

   PUBLIC function getSendNote(){
      return $this -> send_note;
   }

   PUBLIC function getDateNote(){
      return $this -> date_note;
   }


// ---------------------------------------
            // setters
// ---------------------------------------

   PUBLIC function setIdNote($new_id_note){
      $this -> id_note = $new_id_note;
   }

   PUBLIC function setSendNote($new_send_note){
      $this -> send_note = $new_send_note;
   }

   PUBLIC function setDateNote($new_date_note){
      $this -> date_note = $new_date_note;
   }

// ---------------------------------------
        // Methodes
// ---------------------------------------

   PUBLIC function sendMessage(){

   }

   PUBLIC function writeMessage(){

   }

   PUBLIC function displaySendMessage(){

   }

   PUBLIC function displayReceiveMessage(){

   }

}

?>