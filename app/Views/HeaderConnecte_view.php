<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacale=1.0">
	<title>AdvenTroyes</title>


	<!-- typo -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">

    <!--CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/HeaderConnecte_view.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/accueil.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/Footer_view.css">



    <!-- typo -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--JS  -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.localScroll.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $.localScroll();

        });

    </script>

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

	<header class="header">

		<nav class="menu">
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<label class="logo"><a href="<?php echo base_url()  ?>/Accueil"><img src="<?php echo base_url() ?>/assets/images/image_header/logo.png"></a></label>
		
			<ul class="nav">
				<li class="top"><a href="<?php echo base_url() ?>/Accueil">ADVENTROYES</a></li>
                <div id="liens_nav">
				<li class="bot"><a href="<?php echo base_url() ?>/Accueil">Accueil</a></li>
				<li class="bot"><a href="<?php echo base_url() ?>/Gamer/AccueilGamer">Profil</a></li>
				<li class="bot"><a href="<?php echo base_url() ?>/Gamer">Déconnexion</a></li>
				<li class="bot"><a href="<?php echo base_url() ?>/Accueil/Boutique">Boutique</a></li>
                </div>
			</ul>
		</nav>

	</header>

