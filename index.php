<?php
require 'PHP/date_time.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script src="https://kit.fontawesome.com/b75d74c466.js" crossorigin="anonymous"></script> -->

    <link href="../CSS/Style_sheet_Projet_Coiffure.css" rel="stylesheet">
    <link href="../CSS/Police_de_Texte_Projet_Coiffure.css" rel="stylesheet">
    <link href="../CSS/Emplacement_Grid_Projet_Coiffure.css" rel="stylesheet">

    <title>Projet Coiffure</title>

</head>

<body>
    <?php
    session_start();

    if (empty($_SESSION['count'])) {
        $_SESSION['count'] = 1;
    } else {
        $_SESSION['count']++;
    }

    ?>
    <div class="container_responsive">
        <div class='button'>
            <div class="login">

                <!-- <button onclick="location.href='PHP/login.php'">Se Connecter (clic ici)</button> -->
                <button>
                    <a href="PHP/login.php"> Se Connecter (clic ici)</a>
                </button>
            </div>
            <div class="profile">
                <button> <a href="../PHP/page_user.php"> Voir profil (clic ici)</a>
                </button>

                <!--
                <button>
                    <a href="../PHP/page_user.php"> Voir Profil (clic ici)</a>
                </button>
                -->

            </div>
        </div>

        <div class="h1eth2">
            <H1>Coiffure Mode</H1>
            <h2>Coiffure, Couture</h2>
            <br><br>

            <p>
                Bonjour , vous avez vu cette page <?php echo $_SESSION['count']; ?> fois.
            </p>
        </div>

        <div class="container">

            <div class="left_side">


                <div class="gender">
                    <h3>Coiffure pour Hommes /Femme </h3>
                    <div class="custom_select">
                        <ul>
                            <li>Enfant</li>
                            <li>Etudiant</li>
                            <li>Adulte</li>
                        </ul>
                    </div>
                </div>
                <div class="time_table">
                    <h3>Horraire</h3>

                    <ul>
                        <li>Lundi 08H30 à 12h00 - 13h30 à 18h00</li><br>
                        <li>Mardi 08H30 à 12h00 - 13h30 à 18h00</li><br>
                        <li>Mercredi 08H30 à 12h00 - 13h30 à 18h00</li><br>
                        <li>Jeudi 08H30 à 12h00 - 13h30 à 18h00</li><br>
                        <li>Vendredi 08H30 à 12h00 - 13h30 à 18h00</li><br>
                        <li>Samedi 08H30 à 12h00 - 13h30 à 18h00</li>


                    </ul>

                    <!-- 
                    <select>
                        <option>Choisir le jour</option>
                        <option>Lundi</option>
                        <option>Mardi</option>
                        <option>Mercredi</option>
                        <option>Jeudi</option>
                        <option>Vendredi</option>
                        <option>Samedi</option>
                    </select>
                -->
                    <Script>

                    </Script>
                </div>

                <div class="contact">
                    <h3>Contact</h3>

                    <ul>
                        <li>Phone : +41 00 000 00 00</li>
                    </ul>
                </div>

                <div class="place">
                    <h3>Lieux / Adresse</h3>
                    <ul>
                        <li>Rue de la plaine 3, Yverdon-les-Bains</li>
                        <br><a href="https://www.instantstreetview.com/@46.778316,6.64218,91.67h,-18.91p,2.58z,Ct31hu3WnQbHIIJyCgYi9Q" style="max-width:100%;height:auto ;">Lien Street View (clic ici)</a>
                    </ul>
                    <!-- 
                <div class="map1">
                
                <iframe src="https://www.google.com/maps/embed?pb=!4v1654587672630!6m8!1m7!1sCAoSLEFGMVFpcE5UeDBOeWhfaGhXWm9Majl1ODZmVmNkdy05LWJ1TlNhYnFKNmJE!2m2!1d46.778181802301!2d6.6423213766425!3f27.11584278572238!4f2.8338606172812177!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                -->

                    <div class="map2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d683.0802541119299!2d6.641841829294134!3d46.77827849869619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478dcf85334531af%3A0x26c43f8d4cf352b0!2sRue%20de%20la%20Plaine%203%2C%201400%20Yverdon-les-Bains!5e0!3m2!1sen!2sch!4v1654625336131!5m2!1sen!2sch" width="715" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <!--
       <form method="post" action="traitement.php">
            <p class="titre">Adresse</p>
            <fieldset id="coordonnees">Rue de la plaine 3, Yverdon-les-Bains  <a href="https://www.instantstreetview.com/@46.778237,6.642233,91.67h,-18.91p,2.58z,Ct31hu3WnQbHIIJyCgYi9Q">Lien Street View (clic ici)</a></fieldset>
            <p class="titre">Coordonnées</p>
            <fieldset id="message">
            </fieldset>
        
        
        
        </form>
-->



            </div>


            <div class="right_side">
                <br>
                <h2>Bienvenue Chez Afrique Mode</h2>
                <p>Ici, nous vous proposon une large game dans le domaine de la coiffure tout autant dans la couture. </p>




                <div class="photo">
                    <div class="contener_slideshow">
                        <div class="contener_slide">
                            <div class="slid_1"><img src="image/coiffure femme 4.jpg"></div>
                        </div>

                    </div>
                </div>
                <div class="Low">

                </div>
                <!--
<div class="low_right">


    <div class="contener_slideshow2">
        <div class="contener_slide2">
            <div class="slid_2"><img src="image/coiffure femme 6.jpg"></div>
        </div>
        
    </div>

</div>

<div class="low_left">


    <div class="contener_slideshow3">
        <div class="contener_slide3">
            <div class="slid_3"><img src="image/coiffure femme 7.jpg"></div>
        </div>
        
    </div>

</div>
</!-->


            </div>


        </div>
    </div>

</body>


</html>