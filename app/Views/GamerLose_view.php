<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/GamerLose.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
</head>
<body>

<div id="content_gamer_lose">
    <div id="image_loser">
        <img src="<?php echo base_url() ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo'] ?>" width="100%">
        <p><?php echo $_SESSION['pseudo']?></p>
    </div>
    <div id="gamer_lose_text">
        <h1>Mince, vous avez perdu.</h1>
        <h2>Un administrateur a été averti, attendez qu'il vous débloque.</h2>
        <p><a href="<?php echo base_url() ?>/Accueil"><img src="<?php echo base_url() ?>/assets/images/home.png" style="width: 20px;"><b>   Retour à l'accueil</b></a></p><!--<?php //echo base_url(); ?>/Accueil">-->
        <p> | </p>
        <p><a href="<?php echo base_url() ?>/Gamer/AccueilGamer"><img src="<?php echo base_url() ?>/assets/images/profil.png" style="width: 25px;"><b>Accéder à votre profil</b></a></p>
    </div>
</div>

</body>
</html>
















