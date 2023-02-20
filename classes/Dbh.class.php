<?php
//to change anything in database (connect to a database)
class Dbh{
    protected function connect(){
        try {
            $username = 'id20327913_admin';
            $password = 'NOcO@EC59KPqxwy9';
            $dbh = new PDO('mysql:host=localhost;dbname=id20327913_phpooplogin', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            //throw $e;
            echo "Error! " . $e->getMessage() ."<br>";
            die();
        }
    }
    // public function check(){
    //     echo "class checked without database connect <br>";  
    // }
    // public function read_check($user_id){
    //     $sql = 'SELECT * FROM `users` WHERE user_id=?;';
    //     $stmt = $this->connect()->prepare($sql);
    //     if(!$stmt->execute($user_id)){
    //         echo "query could not  be executed"; 
    //     }
    //     // $result = $stmt->execute($user_id);
    //     $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $result1 = $stmt->fetchAll();
    //     print_r($result1);
    // }
    // public function create_check($fname,$lname,$email,$pass){
    //     $sql = "INSERT INTO users (user_id,fname,lname,email,pass)
    //     VALUES (NULL,?,?,?,?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     if(!$stmt->execute([$fname,$lname,$email,$pass])){
    //         echo "query could not  be executed"; 
    //     }
    //     echo 'record created <br>';
    // } 
}

// $a= new Dbh();
// $a->check();
// $a->create_check('nilu','sark','nilu@gmail.com','rod942');
?>