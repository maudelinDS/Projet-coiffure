<?php
function get_connection()
{
    $db_name     = 'Maudelin';
    $db_host     = 'localhost';
    $db_username = 'root';
    $db_password = 'root';
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name;charset=utf8mb4", $db_username, $db_password);
    $message = "";
    return $conn;
}


function save_connexion($users)
{




if (isset($_POST['Submit'])) {

    $hash = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
    $conn = get_connection();

    $db = $conn->prepare("INSERT INTO users (first_name, last_name, email, age, gender, phone_number, nom_utilisateur, mot_de_passe)
    VALUES(:first_name,:last_name,:email, :age, :gender, :phone_number,:nom_utilisateur,:mot_de_passe, ?)");

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
    return $conn->lastInsertId();

}
}