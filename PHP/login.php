<?php

require 'date_time.php';
// connexion à la base de donnée
session_start();
$db_name     = 'Maudelin';
$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'rootroot';
$message = "";

try {


     $connect = new PDO("mysql:host=$db_host; dbname=$db_name;charset=utf8mb4", $db_username, $db_password);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if (isset($_POST["login"])) {

          $mot_de_passe = $_POST['mot_de_passe'];
          // vérifier si l'utilisateur est dans la base de donnée

          if (empty($_POST["nom_utilisateur"]) || empty($_POST["mot_de_passe"])) {
               $message = '<label>All fields are required</label>';
          } else {
               $query = "SELECT * FROM users WHERE nom_utilisateur = :nom_utilisateur";
               $statement = $connect->prepare($query);
               $statement->execute(
                    array(
                         'nom_utilisateur'  =>     $_POST["nom_utilisateur"],
                    )
               );
               $count = $statement->fetch(PDO::FETCH_ASSOC);
               if ($count > 0) {

                    // vérifier si le mot de passe correspond au mot de passse hash dans la base de donnée
                    // si les information correspond 

                    if (password_verify($mot_de_passe,  $count['mot_de_passe'])) {

                         echo "la connexion a fonctionner";

                         $_SESSION["nom_utilisateur"] = $count["nom_utilisateur"];
                         $_SESSION["id"] = $count["id"];

                         //  header("location:page_user.php");
                         header("Location:page_user.php?id=" . $count['id'] . $count['nom_utilisateur']);
                    } else {
                         $message = '<label>Wrong Data</label>';
                    }
               } else {
                    $message = '<label>Wrong Data</label>';
               }
          }
     }
} catch (PDOException $error) {
     $message = $error->getMessage();
}



?>

<html>

<head>
     <meta charset="utf-8">
     <!-- importer le fichier de style -->
     <link rel="stylesheet" href="../CSS/style.css" media="screen" type="text/css" />
</head>

<body>
     <div id="container">
          <?php
          if (isset($message)) {
               echo '<label class="text-danger">' . $message . '</label>';
          }
          ?>
          <!-- zone de connexion -->

          <form method="post">
               <h1>Connexion</h1>
               <label>Username</label>
               <input type="text" name="nom_utilisateur" class="form-control" />
               <br />
               <label>Password</label>
               <input type="password" name="mot_de_passe" class="form-control" />
               <br />
               <input type="submit" name="login" class="btn btn-info" value="Login" />

               <div class="button_goback_user">

                    <div class="button_go_back">
                         <a href="../index.php"><input type="button" class="GoBack" value="Go Back"></a>
                    </div>
                    <div class="button_new_user">
                         <a href="form.php"><input type="button" class="newUser" value="New User"></a>
                    </div>
               </div>

          </form>
     </div>
</body>

</html>