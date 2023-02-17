<?php
function my_autoloader($class) {
    $r = '../classes/' .$class.'.class.php';
    include $r;
}

spl_autoload_register('my_autoloader');
$a = new Signup();
$a->set_user('nilu','suki','nilu@gmail.com','rod942');

// $vars = new IUarts(); 
// print($vars->data);    
?>