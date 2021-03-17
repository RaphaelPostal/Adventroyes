<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/JeuFini.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
</head>
<body>

<div id="page_etape_win">
	<h1>Cette partie est terminée !</h1> <!--<?php /*echo base_url(); ?>../IMAGES/ <?php echo $profil[0]['puzzle_images']*/ ?>-->
	<h2>Nous espérons vous retrouver dans une nouvelle aventure ! </h2> <!-- <?php /*echo $profil[0]['enigme_temps'] */ ?> -->
	<img src="<?php echo base_url() ?>/assets/images/image_jeufini/coupe.png" width="20%" id="coupe">
	<div id="etape_win_text">
		<p><a href="<?php echo base_url() ?>/Gamer/AccueilGamer"> <img src="<?php echo base_url() ?>/assets/images/image_jeufini/profil.png" style="width: 20px;"><b>Accéder à votre profil</b></a></p><!--<?php //echo base_url(); ?>/EnigmeSuivante">-->
		<p>|</p>
		<p><a href="<?php echo base_url() ?>/Accueil"> <img src="<?php echo base_url() ?>/assets/images/image_jeufini/maison.png" style="width: 20px;"><b> Retour à l'accueil</b></a></p><!--<?php //echo base_url(); ?>/Accueil">-->
	</div>
</div>

</body>
</html>






