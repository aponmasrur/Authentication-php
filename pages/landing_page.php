<?php
session_start();
if(!isset($_SESSION['logged_in'])){
    header("location: req_login.php");
}

if(isset($_POST['logout'])){
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header("location: req_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing_page</title>
    <link rel="stylesheet" href="../stylesheets/landing_style.css" >
</head>
<body>
    <section class="landing_main_div">
        <?php
            include "../templates/navbar.php";
        ?>
        <div class="card">
        <h1> Welcome !!!</h1>
            <img src="..\images\human-icon.jpg" alt="profile picture" style="width:50px;height:50px;">
            <p>
                Hello there... 
                <?php 
                    echo $_SESSION['fname'];
                ?>
            </p>
            <div>
                <form action="landing_page.php" method="POST">
                    <button type="submit" name="logout" value="submit" class="logout-btn"> log out </button>
                </form>
            </div>
            <div class="member">
                want to take a tour? <a href="home1.php">Explore now</a>
            </div>
        </div>
    </section>
</body>
</html>
