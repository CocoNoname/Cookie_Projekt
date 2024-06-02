<?php
require_once('Database.php');

    class Qna extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->connect();        
        }

        public function select(){
            try{
                $query =  $this->db->query("SELECT * FROM qna");
                $qna = $query->fetchAll();
                return $qna;
              }catch(PDOException $e){
                echo($e->getMessage());
            }   
        }


        public function select_single($qna_id){
            try {
                $data = array('qna_id' => $qna_id);
                $query = "SELECT * FROM qna WHERE id = :qna_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
                
                $qna_data = $query_run->fetch();
                
                return $qna_data;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function edit($qna_id, $new_data){
            try {              
                $data = array(
                    'qna_id' => $qna_id,
                    'question' => $new_data['question'],
                    'answer' => $new_data['answer']
                );
                
                $query = "UPDATE qna SET question = :question, answer = :answer WHERE id = :qna_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        public function delete(){
            try{
                $data = array(
                    'qna_id' => $_POST['delete_qna']
                );
                $query = "DELETE FROM qna WHERE id = :qna_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>