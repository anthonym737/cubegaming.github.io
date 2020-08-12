<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../CreationCSS.css" />
		<title>Cube-Gaming - Bienvenue</title>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("../header_two.php"); ?>

			<?php
			if (isset($_POST['surname']) AND isset($_POST['name']) AND isset($_POST['signin_email']) AND isset($_POST['signin_password']) AND isset($_POST['signin_passwordconfirm']) AND isset($_POST['confirmage']) AND isset($_POST['confirmgeneralconditionscustom'])) 
			{
			 ?>
				<p>Tu t'appelle <?php echo htmlspecialchars($_POST['surname']) . ' ' . htmlspecialchars($_POST['name']); ?>,
				<?php echo htmlspecialchars($_POST['signin_email']); ?> est ton adresse email, ton mot de passe est <?php echo htmlspecialchars($_POST['signin_passwordconfirm']); ?>, tu as plus de quinze ans et tu a accepté les conditons générales de vente</p>
				<?php
			}
			else
			{
				echo "<p>Tu n'as pas renseigné toutes les informations.</p>";
			}
			?>

			<?php include("../footer_two.php"); ?>

		</div>
	</body>
</html>