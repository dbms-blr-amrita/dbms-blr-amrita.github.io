<?php
    session_start();
?>
<div class="navbar">
        <div class="logo">
        </div>
        <div class="content">
            <a href="index.php">Home</a>
            <a href="index.php#service">Services</a>
            <a href="index.php#team">Team</a>
            <a href="policy.php">Policy</a>
        </div>
    <?php
    if(isset($_SESSION['id'])){
        require_once "greet.php";
        echo '
        <div class="login">
            <a href="logout.php">Logout</a>
        </div>
    '; 
    }
    else{
        echo '
            <div class="login">
                <a href="Customer_Login.php">Login/Signup</a>
            </div>
        ';
    }
    ?>
</div>