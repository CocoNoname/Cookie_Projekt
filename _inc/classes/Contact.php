<?php
require_once('Database.php');
    class Contact extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->connect();
        }

        function insert(){
          if ($this->db) {
              echo '';
          }
          
          if (isset($_POST['meno']) && isset($_POST['email']) && isset($_POST['sprava']) && isset($_POST['suhlas'])) {
              echo '';
              
              $data = array(
                  'contact_name' => $_POST['meno'],
                  'contact_email' => $_POST['email'],
                  'contact_message' => filter_var($_POST['sprava'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                  'contact_acceptance' => $_POST['suhlas']
              );
      
              try {
                  $query = "INSERT INTO contact (name, email, message, acceptance) VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                  $query_run = $this->db->prepare($query);
                  $query_run->execute($data);
                  echo '';
              } catch (PDOException $e) {
                  echo 'Chyba pri vložení dát do databázy: ' . $e->getMessage();
              }
          } else {
              echo 'Niečo chýba vo formulári';
          }
      }
      

        public function select(){
          try{
            $sql = "SELECT * FROM contact";
            $query =  $this->db->query($sql);
            $contacts = $query->fetchAll();
            return $contacts;
          }catch(PDOException $e){
            echo($e->getMessage());
          }
        }

        public function delete(){

          try {
            $data = array(
                'contact_id' => $_POST['delete_contact']
            );
            $query = "DELETE FROM contact WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
          }catch (PDOException $e) {
            echo $e->getMessage();
          }
        }

        public function edit($contact_id, $new_data){
          try{
            
            $data = array(
                'contact_id' => $contact_id,
                'contact_name' => $new_data['name'], 
                'contact_email' => $new_data['email'],
                'contact_message' => $new_data['message']
            );
            
             $query = "UPDATE contact SET name = :contact_name, email = :contact_email, message = :contact_message WHERE id = :contact_id";
             $query_run = $this->db->prepare($query);
             $query_run->execute($data);
             
    
        } catch(PDOException $e){
            
            echo $e->getMessage();
        }
        }

        public function select_single($contact_id){
            try {
              $data = array('contact_id'=>$contact_id);
              $query = "SELECT * FROM contact WHERE id = :contact_id";
              $query_run = $this->db->prepare($query);
              $query_run->execute($data);
              
              $contact_data = $query_run->fetch();
              
              return $contact_data; 

          } catch(PDOException $e) {
           
              echo $e->getMessage();    
          }
        }
    }
?>