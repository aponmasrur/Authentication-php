<?php
// echo "showing of " .$_SERVER['PHP_SELF']. "<br>";
// include"autoloader.php";
session_start();
if(isset($_POST['login'])){
    $email  = $_POST['email'];
    $pass   = $_POST['pass' ];
    $_SESSION['flemail']=$email;
    $_SESSION['flpass']=$pass;
    // print_r([$email,$pass]);
    //instantiating Login_contr class
    include "../classes/Dbh.class.php";
    include "../classes/Login.class.php";
    include "../classes/Login_contr.class.php";
    $Login = new Login_contr($email,$pass);
    //Running Error handlers and user login
    $Login->login_user();
    // echo 'hello';
    // going  to login page
    header("location:../pages/landing_page.php");
}else{
    echo "<br> login is not pressed";
}