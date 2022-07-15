	<?php
require 'date_time.php';
	//connexion base de données
	require "connexion.php";

	if (isset($_POST['Submit'])) {

		// mot de passe Hash 

		$hash = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
	
		//Insérer les données du formulaire  dans la   base de données 

		$db = $pdo->prepare("INSERT INTO users (first_name, last_name, email, age, gender, phone_number, nom_utilisateur, mot_de_passe, id, img, creation_date)
		VALUES(:first_name,:last_name,:email, :age, :gender, :phone_number, :nom_utilisateur, :mot_de_passe, :id, :img, :creation_date)");

		$db->execute([
			'first_name' => $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email'],
			'age' => $_POST['age'],
			'gender' => $_POST['gender'],
			'phone_number' => $_POST['phone_number'],
			'nom_utilisateur' => $_POST['nom_utilisateur'],
			'id' => $_POST['id'],
			'img' => ['img'],
			'creation_date' => $_GET['creation_date'],


			'mot_de_passe' => $hash
			
		]);
		
		echo (' ! Le compte a bien été créer');

	}
	?>



	<html>

	<head>
		<meta charset="utf-8">

		<script src="https://kit.fontawesome.com/b75d74c466.js" crossorigin="anonymous"></script>

		<title>Formulaire</title>
		<link href="../CSS/form_style.css" rel="stylesheet">
	</head>

	<body>

		<!-- Body of Form starts -->
		<div class="container">
			<form action="form.php" method="post" autocomplete="on">
				<!--First name-->

				<div class="box">
					<label for="first_name" class="fl fontLabel"> First Name: </label>
					<div class="new iconBox">
						<i class="fa-solid fa-user fa-2x"></i>
					</div>
					<div class="fr">
						<input type="text" name="first_name" placeholder="first_name" class="textBox" autofocus="on">
					</div>
					<div class="clr"></div>
				</div>
				<!--First name-->


				<!--Second name-->
				<div class="box">
					<label for="last_name" class="fl fontLabel"> Last Name: </label>
					<div class="fl iconBox"><i class="fa-solid fa-user fa-2x"></i></div>
					<div class="fr">
						<input type="text" name="last_name" placeholder="last_name" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!--Second name-->


				<!---Phone No.------>
				<div class="box">
					<label for="phone_number" class="fl fontLabel"> Phone number.: </label>
					<div class="fl iconBox"><i class="fa-solid fa-phone fa-2x"></i></div>
					<div class="fr">
						<input type="tel" required name="phone_number" maxlength="10" placeholder="phone_number." class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!---Phone No.---->


				<!---Email ID---->
				<div class="box">
					<label for="email" class="fl fontLabel"> Email : </label>
					<div class="fl iconBox"><i class="fa-solid fa-at fa-2x"></i></div>
					<div class="fr">
						<input type="email" required name="email" placeholder="email" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!--Email ID----->
				<!-- User Name --->
				<div class="box">
					<label for="nom_d_utilisateur" class="fl fontLabel"> UserName: </label>
					<div class="fl iconBox"><i class="fa-solid fa-user fa-2x"></i></div>
					<div class="fr">
						<input type="text" name="nom_utilisateur" placeholder="nom_utilisateur" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!-- User Name --->

				<!---Password------>
				<div class="box">
					<label for="mot_de_passe" class="fl fontLabel"> Password </label>
					<div class="fl iconBox"><i class="fa-solid fa-key fa-2x"></i></div>
					<div class="fr">
						<input type="Password" required name="mot_de_passe" placeholder="mot_de_passe" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!---Password---->

				<!---Gender----->
				<div class="box radio">
					<label for="gender" class="fl fontLabel"> Gender: </label>
					<div class="fl iconBox"><i class="fa-solid fa-mars-and-venus fa-2x"></i></div>
					<div class="fr">
						<input type="radio" name="gender" value="M" placeholder="gender" required> Male &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
						<input type="radio" name="gender" value="F" placeholder="gender" required> Female
					</div>
					<div class="clr"></div>
				</div>
				<!---Gender--->

				<!---age--->

				<div class="box radio">
					<label for="age" class="fl fontLabel"> age: </label>
					<div class="fl iconBox"><i class="fa-regular fa-calendar fa-2x"></i></div>
					<div class="fr">
						<input type="date" required name="age" id="day" size="2" />

					</div>
					<div class="clr"></div>

				</div>
				<!---age--->

				<!--Terms and Conditions------>
				<div class="box terms">
					<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
				</div>
				<!--Terms and Conditions------>



				<!---Submit Button------>
				<div class="box" style="background: #2d3e3f">
					<a href="#"><input type="Submit" name="Submit" class="submit" value="SUBMIT">

						<a href="login.php"><input type="button" class="GoBack" value="Go Back"></a>

				</div>
				<!---Submit Button----->
			</form>

		</div>
		<!--Body of Form ends--->
	</body>

	</html>