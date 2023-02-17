<?php
//to change anything in database (add,update data)
// include_once"Login.class.php";
class Login_contr extends Login {
    private $email;
    private $pass;

    function __construct($email,$pass){
        $this->email  = $email; 
        $this->pass   = $pass;
    }

    public function login_user(){
        if($this->empty_input()      == false){
            //echo error input
            header("location: ../pages/login.php?error = one or multiple inputs are empty");
            exit();
        }
        if($this->invalid_email()    == false){
            //echo invalid email
            header("location: ../pages/login.php?error = invalid mail");
            exit();
        }
        if($this->registered_email() == false){
            //echo email not registered
            header("location: ../pages/login.php?error = email not registered");
            exit();
        }
        if($this->invalid_pass() == false){
            //echo email not registered
            header("location: ../pages/login.php?error = password is incorrect");
            exit();
        }
        $this->log_user($this->email);
    }

    public function empty_input(){
        $result = null;
        if(empty($this->email) ||empty($this->pass)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    private function invalid_email(){
        $result = null;
        if(filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    public function registered_email(){
        $result = null;
        if($this->check_registered_email($this->email)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    public function invalid_pass(){
        $result = null;
        if($this->check_pass($this->email,$this->pass)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}

$apple = new Login_contr('bilu@gmail.com','hia212');
$b = $apple->login_user();
// if($b){
//     // $a->log_user('bilu@gmail.com');
//     echo $b."login success".".<br>";
// }else{
//     echo $b."login failed".".<br>";
// }

?>