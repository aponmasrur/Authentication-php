<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
    <link rel="stylesheet" href="stylesheets/style.css">
</head>

<body>
    <!-- <div class="toast">
        <?php
        if (isset($_POST['signup'])) {
            echo " first name: {$_POST['fname']}" . '<br>';
            echo " last name: {$_POST['lname']}" . '<br>';
        } else {
            echo "form not submitted <br>";
        }
        ?>
    </div> -->
    <div class="card">
        <div class="card-title">
            <h1>SIGN UP</h1>
        </div>
        <form class="form1" action="include/signup.inc.php" method="POST">
            <div class="form1-fields">
                <input type="text" id="fname" name="fname" placeholder="first name..">
                <input type="text" id="lname" name="lname" placeholder="last name..">
                <input type="email" id="email" name="email" placeholder="your mail..">
                <input type="password" id="pass" name="pass" placeholder="set a psssword">
                <input type="password" id="pass" name="repass" placeholder="Re-enter psssword">
            </div>

            <div class="form1-terms">
                <input type="checkbox" id="checkbox" name="check" value="checked">
                <label for="checkbox">I agree to these <a href="terms_conditions.php">terms & conditions</a></label>
            </div>

            <div class="form1-btn">
                <!-- <input type="submit" name="submit" value="submit"> -->
                <button type="submit" name="signup" value="submit">sign up</button>
            </div>
        </form>
        <div class="card-member">
            already a memeber? <a href="login.php">login instead</a>
        </div>

    </div>
</body>

</html>