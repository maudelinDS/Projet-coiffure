<?php 
include('date_time.php');
include('connexion.php');


session_start();

if(isset($_POST['update_student_btn']))
{
    $idUser = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $nom_utilisateur = $_POST['nom_utilisateur'];


    try {

        $sql = "UPDATE users SET first_name=:first_name, last_name=:last_name, email=:email, phone_number=:phone_number, nom_utilisateur=:nom_utilisateur WHERE id=:id LIMIT 1";
        $sql = $pdo->prepare($sql);

        $data = [
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':phone' => $phone_number,
            ':id' => $id,
            ':nom_utilisateur' => $nom_utilisateur


        ];
        
        $sql_execute = $sql->execute($data);

        if($sql_execute)
        {
            $_SESSION['message'] = "Updated Successfully";
            header('Location: page_user.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Updated";
            header('Location: page_user.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
