<?php
//to change anything in database (add,update data)
// include_once"Signup.class.php";
class Signup_contr extends Signup {
    private $fname;
    private $lname;
    private $email;
    private $pass;
    private $repass;
    private $check;

    function __construct($fname,$lname,$email,$pass,$repass,$check){
        $this->fname  = $fname;
        $this->lname  = $lname;
        $this->email  = $email; 
        $this->pass   = $pass; 
        $this->repass = $repass;
        $this->check   = $check;
    }

    public function signup_user(){
        if($this->empty_input()    == false){
            //echo error input
            header("location: ../pages/index1.php?error = one or multiple inputs are empty");
            exit();
        }
        if($this->invalid_name()   == false){
            //echo invalid user first or lastname
            header("location: ../pages/index1.php?error = names should be alpha-numeric");
            exit();
        }
        if($this->invalid_email()  == false){
            //echo invalid email
            header("location: ../pages/index1.php?error = invalid mail");
            exit();
        }
        if($this->invalid_repass() == false){
            //echo invalid re-password
            header("location: ../pages/index1.php?error = passwords don't match");
            exit();
        }
        if($this->already_exists() == true){
            //echo invalid user first or lastname
            header("location: ../pages/index1.php?error = name or email is already taken");
            exit();
        }
        $this->set_user($this->fname, $this->lname, $this->email, $this->pass);
    }

    public function empty_input(){
        $result = null;
        if(empty($this->fname) ||empty($this->lname) ||empty($this->email) ||empty($this->pass) ||empty($this->repass) ||empty($this->check)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    public function invalid_name(){
        $result = null;
        if(preg_match("/[^a-zA-Z0-9]/",$this->fname) || preg_match("/[^a-zA-Z0-9]/",$this->lname)){
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
    public function invalid_repass(){
        $result = null;
        if($this->pass === $this->repass){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    public function already_exists(){
        $result = null;
        if($this->check_user($this->fname,$this->email)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}

// $apple = new Signup_contr('neut','suki','ngu@gmail.com','rod942','rod942');
// $apple->signup_user();
?>