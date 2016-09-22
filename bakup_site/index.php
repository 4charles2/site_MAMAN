<?php
$destination =  isset($_GET['destination']) ? $_GET['destination'] : "1page";
echo '
<!doctype html>
<html lang="fr"> <!-- Pour faire des commentaire-->
	<head>
		<meta charset="utf-8"/>
		<link type="text/css" rel="stylesheet" href="site_styleTvous/css/style.css"/>
		<link type="text/css" rel="stylesheet" href="site_styleTvous/css/'. $destination .'.css"/>
		<title>Styles & Vous</title>
	</head>
	<body id="page1">
		<div class="button_up_down_page" id="button_up_page"><a href="#top_page"><img id="up" src="site_styleTvous/fleche_haut.jpg" alt="boutton_fleche_haut" /></a></div>
				<!-- ##### modifier les points encrage ##### -->
		<div class="button_up_down_page" id="button_down_page"><a href="#middle_page"><img id="down" src="site_styleTvous/fleche_bas.jpg" alt="boutton_fleche_bas" /></a></div>
		<header>
			<nav id="top_page">
				<ul id="menu">
					<li><a href="index.php?destination=1page">Acceuil</a></li>
					<li><a href="index.php?destination=Conseil_en_image">Conseil en image</a></li>
					<li><a href="index.php?destination=Style_Morpho">Style / Morpho</a></li>
					<li><a href="index.php?destination=Colometrie">Colometrie</a></li>
					<li><a href="index.php?destination=Maquillage">Maquillage</a></li>
					<li><a href="index.php?destination=Ateliers">Ateliers</a></li>
					<li><a href="index.php?destination=Mes_activites">Mes activites</a></li>
					<li><a href="index.php?destination=Formules & Tarifs">Formules &amp; Tarifs</a></li>
					<li><a href="index.php?destination=Contact">Contact</a></li>
				</ul>
			</nav>
		</header>';
	include('site_styleTvous/'.$destination. '.html'); 
echo '
	</body>
	<footer>
	<!--Cette partie est faite pour etre reduit ultérieurement . il s\'agit de la petite ligne en bas du site . la ou se trouve tous lien du site -->
		<!--Toutes les balises présente cidessous sont les liens du menu afin de se deplacer-->
		<a href="site_styleTvous/Accueil.html">Accueil</a> <a href="Conseil_en_image.html">Conseil en image</a>
		<a href="site_styleTvous/Styles_Morpho.html">Styles / Morpho</a> <a href="Colorimetrie.html">Colometrie</a>
		<a href="site_styleTvous/Maquillage.html">Maquillage</a> <a href="Atelier.html">Ateliers</a>
		<a href="site_styleTvous/Mes_activites.html">Mes activites</a> <a href="Formules & Tarifs.html">Formules & Tarifs</a>
		<a href="site_styleTvous/Contact.html">Contact</a>
	</footer>
</html>';

?>