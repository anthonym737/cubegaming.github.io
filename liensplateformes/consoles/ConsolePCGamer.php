<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../CreationCSS.css" />
		<title>Cube-Gaming - Console PC Gamer</title>
	</head>

	<body>
		<div id="bloc_page">

			<?php include("../../header_three.php"); ?>

			<section id="produit">
				<h2 class="titre_produit_accessoire">Produit</h2>
				<div id="contenu">
					<div class="photo_detail_produit_console">
						<img src="../../images/consoles/pc_gamer.jfif" alt="Photo de la console PC Gamer">
					</div>
					<div class="presentation_detail_produit_console_pcgamer">
						<h1>Console PC Gamer</h1>
						<div class="contenu_prix_produit_console">
							<div class="prix_produit_console">
								<p>399.99€</p>
							</div>
						</div>
					<div id="description_detail_produit_console">
						<p>PC Gamer<a href="#LienLireLaSuite">Lire la suite</a></p>
					</div>
				</div>
			</section>

			<section>
				<h2 id="LienLireLaSuite">Détails supplémentaires sur le produit</h2>
				<div class="contenu_detail_sup_produit_console">
					<h3 id="details">Details sur le produit</h3>
					<p>- <strong>Date de parution :</strong> 15 Juillet 2019 <br />
					   - <strong>Genre :</strong> Console</p>
					   
					<h3 id="description_sup_console">Description</h3>  
					<div id="description_suite">
						<button onclick="myFunction()" id="myBtn">Read more</button>
					</div>
				</div>
			</section>

			<?php include("../../header_three.php"); ?>
			
		</div>
	</body>
</html>