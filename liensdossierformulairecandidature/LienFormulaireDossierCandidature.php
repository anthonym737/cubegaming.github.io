<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../CreationCSS.css" />
		<title>Cube-Gaming - Création du compte</title>
	</head>

	<body>
		<div id="bloc_page">

			<?php include("header_two.php"); ?>

			<section id="dossiers_informations_inscription">
				<h3 class="titre_important">Dossier d'inscription</h3>
				<div id="contenu_dossier_inscription">
					<section id="dossier_inscription_formulaire">
						<form id="contenu_dossier_inscription_formulaire">
							<div id="contenu_dossier_inscription_partie_un">
								<div id="completion_champs_dossier_inscription_partie_un">
									<div id="contenu_civilite_dossier_inscription_partie_un">
										<div id="saisie_civilite_partie_un">
											<div id="contenu_civilite">
												<p>Civilité:</p>
												<label for="mister">Monsieur</label>
												<input type="radio" name="civility" id="civilite_dossier_inscription_monsieur">
												<label for="miss">Madame</label>
												<input type="radio" name="civility" id="civilite_dossier_inscription_madame">
											</div>
										</div>
									</div>
									<div id="completion_champs_nom_prenom_age_date_naissance_formulaire_dossier_inscription_partie_un">
										<div id="contenu_saisie_nom_formulaire_dossier_inscription_partie_un">
											<div id="saisie_nom_formulaire_dossier_inscription_partie_un">
												<div id="contenu_nom_partie_un">
													<input type="text" name="nom" id="nom_partie_un_dossier_inscription" placeholder="Nom">
												</div>
											</div>
										</div>
										<div id="contenu_saisie_prenom_formulaire_dossier_inscription_partie_un">
											<div id="saisie_prenom_formulaire_dossier_inscription_partie_un">
												<div id="contenu_prenom_partie_un">
													<input type="text" name="prenom" id="prenom_partie_un_dossier_inscription" placeholder="Prénom">
												</div>
											</div>
										</div>
										<div id="contenu_saisie_age_formulaire_dossier_inscription_partie_un">
											<div id="saisie_age_formulaire_dossier_inscription_partie_un">
												<div id="contenu_age_partie_un">
													<label for="age">Votre age</label>
													<input type="number" name="age" step="1">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>

			<?php include("footer_two.php"); ?>
			
		</div>
	</body>
</html>