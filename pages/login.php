<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login </title>
    <link rel="stylesheet" href="../stylesheets/style.css">
</head>

<body>
    <!-- <div class="toast">
        <?php
        if (isset($_POST['submit'])) {
            echo " first name: {$_POST['fname']}" . '<br>';
            echo " last name: {$_POST['lname']}" . '<br>';
        } else {
            echo "form not submitted <br>";
        }
        ?>
    </div> -->
    <div class="card">
        <div class="card-title">
            <h1>LOG IN</h1>
        </div>
        <form class="form1" action="../include/login.inc.php" method="POST">
            <div class="form1-fields">
                <input type="email" id="email" name="email" placeholder="your mail.." value>
                <input type="password" id="pass" name="pass" placeholder="set a psssword">
            </div>

            <div class="form1-btn">
                <!-- <input type="submit" name="submit" value="submit"> -->
                <button type="submit" name="login" value="login">log in</button>
            </div>
        </form>
        <div class="card-member">
            forgot password? <a href="page_not_found.php">click to reset</a>
        </div>
        <div class="card-member">
            not a member? sign up instead <a href="index1.php">Sign Up</a>
        </div>
    </div>
</body>

</html>