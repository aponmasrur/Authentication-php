<?php
session_start();
// include"Dbh.class.php";

class Login extends Dbh {
    public function check_registered_email($email){
        $stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = ?;');
        if(!$stmt->execute([$email])){
            header("location: ../pages/login.php?error=query failed on check_mail_pass");
            exit();
        }
        $resultcheck = null;
        if($stmt->rowCount() > 0){
            $resultcheck = true;
        }else{
            $resultcheck = false;
        }
        return $resultcheck;
    }
    public function check_pass($email,$pass){
        $stmt = $this->connect()->prepare('SELECT pass FROM users WHERE email = ?;');
        if(!$stmt->execute([$email])){
            header("location: ../pages/login.php?error=query failed on check_pass");
            exit();
        }
        $resultcheck = null;
        if($stmt->rowCount() > 0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result1 = $stmt->fetchAll();
            if($result1[0]['pass']==$pass){
                $resultcheck = true;
            }else{
                $resultcheck = false;
            }
        }else{
            $resultcheck = false;
        }
        return $resultcheck;
    }
    public function log_user($email){
        // $user_id = null;
        $stmt = $this->connect()->prepare('SELECT fname FROM users WHERE email = ?;');
        // $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
        if(!$stmt->execute([$email])){
        //     // $stmt = null;
        //     echo "query could not be executed <br>";
            header("location: ../pages/login.php?error=query failed on log-user");
            exit();
        }else{
            $result1 = $stmt->fetchAll();
            $_SESSION['logged_in'] = true;
            $_SESSION['fname'] = $result1[0]['fname'];
            header("location: ../pages/landing_page.php");
            // echo "query executed successfully <br>";
        }
        // $stmt = null;
        // echo "success!!! you are logged in :)";
        // echo "success!!! you are logged in :)";
    }
}

// $a = new Login;
// // $a->log_user('bilu@gmail.com');
// $b = $a->check_pass('bilu@gmail.com','hia212');
// if($b){
//     // $a->log_user('bilu@gmail.com');
//     echo $b."login success".".<br>";
// }else{
//     echo $b."login failed".".<br>";
// }

?>