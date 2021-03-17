<!DOCTYPE html>
<html>
<head>
    <title>Adventroyes</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/style.css">
</head>
<body>
<header>

    <h1 id="logo">Adventroyes</h1>
    <nav>
        <a href="<?php echo base_url()?>">Accueil</a>
        <a href="<?php echo base_url()?>/Participants">Participants</a>
        <a href="#">Contactez-nous</a>

        <?php if( $connecte==0 ): ?>
            <a href="<?php echo base_url()?>/Gamer">Connexion</a>
        <?php else: ?>
            <a href="<?php echo base_url()?>/Gamer">Déconnexion</a>
            <a href="<?php echo base_url()?>/Gamer/AccueilGamer">Profil</a>
        <?php endif ?>





    </nav>
</header>