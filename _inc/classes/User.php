<?php
require_once('Database.php');

    class User extends Database{
        
        private $db;

        public function __construct()
        {
            $this->db = $this->connect();
        }

        public function login($username, $password){
            //$username a $password došli z $_POST 
            try{
                $data = array(
                    'user_email'=>$username,
                    'user_password'=>($password),
                );
                
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                if($query_run->rowCount() == 1) {
                    
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] = $query_run->fetch()->role;
                    return true;
                } else {
                    return false;
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }
        public function register($email, $password){
            try{
             
                $hashed_password = $password;
           
                $data = array(
                    'user_email' => $email,
                    'user_password' => ($hashed_password),
                    'user_role'=>'0'
                );
                
                $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                
                return true;
            } catch(PDOException $e){
                
                echo "Chyba pri registrácii: " . $e->getMessage();
                return false;
            }
        }
    }
?>
