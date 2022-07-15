<?php


require 'date_time.php';
require 'connexion.php';



//login_success.php  
session_start();

if (isset($_GET["id"])) {

	echo '<h3>Login Success, Welcome - ' . $_SESSION["nom_utilisateur"] . '</h3>';
} else {
	header("location:login.php");

	//header("Location:login.php?id=" . $_SESSION['id']);
}
$idUser = ($_GET['id']);

$sql = $pdo->prepare("SELECT * FROM users where id = :id");

$sql->execute(['id' => $_SESSION["id"]]);
/*
$sql->execute([
	'id' => $_GET['id'],
]);
*/

$fetch = $sql->fetch();





?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../CSS/page_user_style.css" rel="stylesheet">
	<hr>
	<br>
	<div class="container rounded bg-white mt-5 mb-5">
		<div class="row">
			<div class="col-md-3 border-right">
				<div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $fetch['nom_utilisateur']; ?></span><span class="text-black-50"><?php echo $fetch['email']; ?></span><span> </span></div>
			</div>
			<div class="col-md-5 border-right">

				<div class="p-3 py-5">
					<div class="d-flex justify-content-center align-items-center mb-3">
						<h4 class="titreh4">Profile Settings</h4>
					</div>
					<hr>
					<br>

					<h1>User : <?php echo $fetch['first_name']; ?> </h1>
					<div class="row mt-2">
						<div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="<?php echo $fetch['first_name']; ?>"></div>
						<div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="<?php echo $fetch['last_name']; ?>"></div>
						<div class="col-md-6"><label class="labels">Id</label><input type="text" class="form-control" placeholder="<?php echo $fetch['id']; ?>"></div>

					</div>
					<div class="row mt-3">
						<div class="col-md-12"><label class="labels"> Gender</label><input type="text" class="form-control" placeholder="gender" value="<?php echo $fetch['gender']; ?>"></div>

						<div class="col-md-12"><label class="labels">Phone Number</label><input type="tel" class="form-control" placeholder="enter phone number" value="<?php echo $fetch['phone_number']; ?>"></div>
						<div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email id" value="<?php echo $fetch['email']; ?>"></div>
						<div class="col-md-12"><label class="labels">Age</label><input type="date" class="form-control" placeholder="enter password " value="<?php echo $fetch['age']; ?>"></div>
						<div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="enter username " value="<?php echo $fetch['nom_utilisateur']; ?>"></div>
						<div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control" placeholder="enter password " value="<?php echo $fetch['mot_de_passe']; ?>"></div>
					</div>
					<br>
					<hr>
					<br>


				</div>

			</div>

		</div>

		<div class="profileButtons">


			<!--
		<a href="../PHP/profile_edit_form.php?id= ">
			<div class="editButton"><button class="btn btn-primary profile-button" type="button">Edit My Profile</button></div>
			-->
			<td>
				<a href="../PHP/profile_edit_form.php?id=<?= $fetch ['id'] .$fetch['nom_utilisateur']?>">
					<div class="editProfile"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
				</a>
			</td>
			<!--<select>
				<option> edit First name</option>
				<option>edit Last name</option>
				<option>edit Email</option>
				<option>edit Phone Number</option>
				<option>40-50ans</option>
				<option>+ 60ans </option>
			</select>
-->
			<td>

				</a>
				<a href="../PHP/logout.php">
					<div class="logoutButton"><button class="btn btn-primary profile-button" type="button">Log Out</button></div>
				</a>
			</td>
			<td>

				<a href="../index.php">
					<div class="acceuilleButton"><button class="btn btn-primary profile-button" type="button"> Retour Acceuille</button></div>
				</a>
			</td>
			<td>

				<a href="../PHP/home.php">
					<div class="userListButton"><button class="btn btn-primary profile-button" type="button">Users List</button></div>
				</a>
			</td>
			<td>

				<a href="../PHP/change_password.php?id=<?= $fetch['id'] ?>">
					<div class="updapteButton"><button class="btn btn-primary profile-button" type="button">Change Password </button></div>
				</a>
			</td>
			<td>

				<a href="../PHP/login.php">
					<div class="backButton"><button class="btn btn-primary profile-button" type="button">Go Back </button></div>
				</a>
			</td>

		</div>
	</div>
	</div>
</body>

</html>