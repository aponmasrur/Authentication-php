
<header>
        <div></div>
        <nav>
			<ul class="navbar">
				<li><a class="active" href="home1.php">Home</a></li>
				<li><a href="page_not_found.php">About</a></li>
				<li><a href="page_not_found.php">Contact</a></li>

                <!-- toggle betwn logout & login -->
                <?php
                    if(!$_SESSION['logged_in']==true){
                ?>
                    <li><a class="active" href="login.php">Login</a></li>
                <?php } else{ ?>
                    <li><a class="active" href="../include/logout.inc.php">Logout</a></li>
                <?php } ?>

			</ul>
        </nav>
        <div class="user">
            <div class="user-icon">
                <img src="..\images\user_icon.jpg" alt="user_icon">
            </div>
            <?php
                if(isset($_SESSION['logged_in'])){
            ?>
            <div class="user-name">
                    <p><?php echo $_SESSION['fname'];?></p>
            </div>
            <?php }
            ?>
        </div>
</header>