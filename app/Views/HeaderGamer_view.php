<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacale=1.0">
	<title>Votre profil</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/HeaderGamer_view.css">
    <!--CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/Footer_view.css">
	<!-- typo -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

	<header class="header">

		<nav class="menu">
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<label class="logo">
                <a href="<?php echo base_url() ?>/Accueil"><img src="<?php echo base_url() ?>/assets/images/image_headerGamer/logo.png"></a>
				<div class="profil"><a href="<?php echo base_url() ?>/Gamer/AccueilGamer"><?php echo $_SESSION['prenom'] ?> <br /> <?php echo $_SESSION['nom'] ?></div></a>
			</label>
		
			<ul class="nav">
				<li class="center"><a href="<?php echo base_url() ?>/Accueil">ADVENTROYES</a></li>
				<li class="bot"><a href="<?php echo base_url() ?>/Gamer/Stats"><i class="fas fa-trophy" style="font-size: 40px;"></i></a></li>
				<li class="bot"><a href="<?php echo base_url() ?>/Gamer/ModifProfil"><i class="fas fa-cog" style="font-size: 40px;"></i></a></li>
				
			</ul>
		</nav>

	</header>

</body>
</html>