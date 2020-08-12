<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../CreationCSS.css" />
		<title>Cube-Gaming - Casque Sans Fil Nintendo Switch</title>
	</head>

	<body>
		<div id="bloc_page">

			<?php include("../header_two.php"); ?>

			<section id="produit">
				<h2 class="titre_produit_accessoire">Produit</h2>
				<div id="contenu">
					<div class="photo_detail_produit_accessoire">
						<img src="../images/accessoires/casque_sans_fil_switch.jpg" alt="Photo d'accessoire casque sans fil pour Nintendo Switch" />
					</div>
					<div class="presentation_detail_produit_accessoire">
						<h1>Casque sans fil Switch</h1>
						<div class="contenu_prix_produit_accessoire">
							<div class="prix_produit_accessoire">
								<p>9.99€</p>
							</div>
						</div>
						<div id="description_detail_produit_accessoire">
							<p>Casque sans fil Nintendo Switch.<a href="#LienLireLaSuite">Lire la suite</a></p>
						</div>
					</div>
				</div>
			</section>

			<section class="section_page_accessoire">
				<h2 id="LienLireLaSuite">Détails supplémentaires sur le produit</h2>
				<div id="contenu_detail_sup_produit_accessoire">
					<h3 id="details">Details sur le produit</h3>
					<p>- <strong>Date de parution :</strong> 30 Octobre 2018 <br />
					   - <strong>Genre :</strong> Accessoire</p>
					   
					<h3 id="description_sup_jeu">Description</h3>   
					<button onclick="myFunction()" id="myBtn">Read more</button>
				</div>
			</section>

			<?php include("../footer_two.php"); ?>
			
		</div>
	</body>
</html>