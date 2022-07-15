
<?php

//login_success.php  
session_start();

if (isset($_SESSION["nom_utilisateur"])) {
     echo '<h3>Login Success, Welcome - ' . $_SESSION["nom_utilisateur"] . '</h3>';


     echo '<br /><br /><button><a href="logout.php">Logout</a></button>';
     echo '<br /><br /><button><a href="page_user.php">Profile</a></button>';
} else {
     header("location:login.php");
}

?> 


