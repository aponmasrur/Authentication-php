<?php
// echo "showing of " .$_SERVER['PHP_SELF']. "<br>";
// include"autoloader.php";
if(isset($_POST['signup'])){
    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass' ];
    $repass = $_POST['repass'];
    $check  = $_POST['check'];

    // print_r([$fname,$lname,$email,$pass,$repass]);
    //instantiating signup_contr class
    include "../classes/Dbh.class.php";
    include "../classes/Signup.class.php";
    include "../classes/Signup_contr.class.php";
    $Signup = new Signup_contr($fname,$lname,$email,$pass,$repass,$check);
    //Running Error handlers and user signup
    $Signup->signup_user();
    // echo 'hello';
    // going  to login page
    header("location: ../pages/login.php");
}else{
    echo "<br> signup is not pressed";
}