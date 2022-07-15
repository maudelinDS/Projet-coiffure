<?php

require "connexion.php";

if (isset($_POST['Submit'])) {

    $hash = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    $db = $pdo->prepare("INSERT INTO users (first_name, last_name, email, age, gender, phone_number, nom_utilisateur, mot_de_passe)
    VALUES(:first_name,:last_name,:email, :age, :gender, :phone_number,:nom_utilisateur,:mot_de_passe)");

    $db->execute([
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'age' => $_POST['age'],
        'gender' => $_POST['gender'],
        'phone_number' => $_POST['phone_number'],
        'nom_utilisateur' => $_POST['nom_utilisateur'],
        'mot_de_passe' => $hash
    ]);


    $id_user = $pdo->lastInsertId();
}

?>

