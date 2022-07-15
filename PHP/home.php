<?php

require 'date_time.php';
require 'connexion.php';

//login_success.php  
session_start();

if (isset($_SESSION["nom_utilisateur"])) {
    echo '<h3>Login Success, Welcome - ' . $_SESSION["nom_utilisateur"] . '</h3>';

} else {
	header("Location:login.php?id=" . $_SESSION['id']);
    //  header("Location:page_user.php?id=".$_SESSION['id']); 

}

$sql = $pdo->prepare("SELECT * FROM users where 'id' = 'id'");
$sql->execute();
/*$sql->execute([
	'id' => $_GET['id'],
]);
*/
$row = $sql->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Page </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href="../CSS/home_style.css" rel="stylesheet">
    <link href="../CSS/page_user.css" rel="stylesheet">


</head>

<body>

    <section class="section">
        <div class="container">
            <!--<a href="page_user.php"><input type="button" class="GoBack" value="Go Back"></a>-->
            
            <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><input type="button" class="backButton" value=" page précédente" ></a>
            
            <a href="logout.php"><input type="button" class="GoBack" value="Log out"></a>
            
            <h1 class="title">
                Admin Users
            </h1>

            <?php foreach ($sql as $row) { ?>

                <div class="card">
                    <div class="card-content">

                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </div>
                            <div class="media-content">
                                <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="50px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>-->
                                <p class="title is-4"><?php echo $row['first_name']; ?></p>
                                <p class="subtitle is-6">@<?php echo $row['first_name'] . " " .  $row['last_name'] . " id : " .  $row['id']; ?></p>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <p class="title is-4 "> <?php echo $row['first_name'] . " " .  $row['last_name']; ?>
                                    </p>
                                </li>
                                <li>
                                    <p class="title is-4 "><?php echo $row['id'] . "<br>"; ?></p>
                                </li>
                                <li>
                                    <p class="title is-4"><?php echo $row['age'] . "<br>"; ?></p>
                                </li>

                                <li>
                                    <p class="title is-4"><?php echo $row['gender'] . "<br>"; ?></p>
                                </li>
                                <li>
                                    <p class="title is-4"><?php echo $row['phone_number'] . "<br>"; ?></p>
                                </li>
                                <li>
                                    <p class="title is-4"><?php echo $row['email'] . "<br>"; ?></p>
                                </li>
                                <li>
                                    <p class="title is-4 "><?php echo $row['mot_de_passe'] . "<br>"; ?></p>
                                </li>
                                <li>
                                    <p class="title is-4 "><?php echo $row['date_creation'] . "<br>"; ?></p>
                                </li>

                            </ul>
                            <a href="../PHP/profile_edit_form.php">
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
                            </a>
                            
                            <br>

                        </div>
                    </div>
                <?php } ?>

    </section>
</body>

</html>