<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../CreationCSS.css" />
		<title>Cube-Gaming - Jeu Maneater Day Edtion PC</title>
	</head>

	<body>
		<div id="bloc_page">

			<?php include("../header_two.php"); ?>

			<section id="produit">
				<h2 class="titre_produit_jeu">Produit - Le 22 Mai 2020</h2>
				<div id="contenu">
					<div class="photo_detail_produit_jeu">
						<img src="..\images\prochaines_sorties\maneater_day_one_edition_pc.jpg" alt="Photo du Jeu Maneater Day Edition PC" />
					</div>
					<div class="presentation_detail_produit_jeu_mde">
						<h1>Maneater Day Edition PC</h1>
						<div class="contenu_prix_produit_jeu">
							<div class="prix_produit_jeu">
								<p>25.99€</p>
							</div>
						</div>
						<div id="description_detail_produit_jeu">
							<p>Maneater Day Edition PC.<a href="#LienLireLaSuite">Lire La Suite</a></p>
						</div>
					</div>	
				</div>
			</section>

			<section>
				<h2 id="LienLireLaSuite">Détails supplémentaires sur le produit</h2>
				<div class="contenu_detail_sup_produit_jeu">
					<h3 id="details">Details sur le produit</h3>
					<p>- <strong>Date de sortie :</strong> 22 Mai 2020 <br />
					   - <strong>Genre :</strong> Jeu d'action</p>

					<h3 id="description_sup_jeu">Description</h3>
					<div id="description_suite">
						<button onclick="myFunction()" id="myBtn">Read more</button>
					</div>
				</div>
			</section>

			<?php include("../footer_two.php"); ?>
			
		</div>
	</body>
</html>