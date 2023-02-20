<?php

// include"Dbh.class.php";

class Signup extends Dbh {
    public function check_user($fname, $email){
        $stmt = $this->connect()->prepare('SELECT user_id,fname FROM users WHERE fname = ? OR email = ?;');
        if(!$stmt->execute([$fname,$email])){
            header("location: ..index.php?error=query failed on user already exist");
            exit();
        }else{
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result1 = $stmt->fetchAll();
            // print_r($result1);
        }
        $resultcheck = null;
        if($stmt->rowCount() > 0){
            $resultcheck = true;
        }else{
            $resultcheck = false;
        }
        return $resultcheck;
    }
    //check if the table is empty . If empty then set $userid=1.
    protected function check_1stuser(){
        $stmt = $this->connect()->prepare('SELECT fname FROM users WHERE user_id = 1;');
        $resultcheck = null;
        if($stmt->rowCount() > 0){
            $resultcheck = true;
        }else{
            $resultcheck = false;
        }
        return $resultcheck;
    }
    public function set_user($fname,$lname,$email,$pass){
        // if($this->check_1stuser()){
        //     // complete it todayaaaaa
        //     $user_id= 'NULL';
        // }else{
        //     $user_id = 1;
        // }
        $user_id = null; 
        $stmt = $this->connect()->prepare("INSERT INTO users (user_id,fname,lname,email,pass) VALUES (?, ?, ?, ?, ?);");
        // $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
        if(!$stmt->execute([$user_id,$fname, $lname, $email, $pass])){
            // $stmt = null;
            echo "query could not be executed <br>";
            header("location: ..index.php?error=query failed on set_user");
            exit();
        }else{
            //echo "query executed successfully <br>";
            // header("location: ../pages/login.php");
        }
        // $stmt = null;
    }
}

// $a = new Signup;
// $a->set_user('nilu','suki','nilu@gmail.com','rod942');
// $b = $a->check_user('rono','rono@gmail.com');
// echo $b."<br>";


?>