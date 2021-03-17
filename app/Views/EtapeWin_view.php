
<!DOCTYPE html>
<html>
<head>
    <title>Adventroyes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/EtapeWin.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
</head>
<body>

<div id="page_etape_win">

    <h1>Bravo, vous avez résolu l'énigme !</h1>
    <?php //var_dump($profil[0]['gamer_enigme_en_cours']);
    $image=$profil[0]['gamer_enigme_en_cours'];
    $image-=1;
    if($image==1){
        echo '<h2>Vous remportez le socle du puzzle !</h2>';
    }elseif($image==10){
        echo '<h2>Vous remportez la dernière pièce du puzzle !</h2>';
    }else{
        echo '<h2>Vous remportez une nouvelle pièce du puzzle !</h2>';
    }
    ?>
    <img src="<?php echo base_url() ?>/assets/images/puzzle/puzzle_<?php echo $image ?>.png" width="20%">
    <h2>Vous avez mis <?php echo $_SESSION['temps_enigme'] ?> secondes.</h2>
    <div id="etape_win_text">
        <p><a href="<?php echo base_url() ?>/Gamer/Jouer"><b>Accéder à l'énigme suivante &nbsp</b></a></p>
        <p>&nbsp|&nbsp</p>
        <p>&nbsp<img src="<?php echo base_url() ?>/assets/images/home.png" style="width: 20px;"><a href="<?php echo base_url() ?>/Gamer/AccueilGamer"><b>   Retour à votre profil</b></a></p>
    </div>
</div>

</body>
</html>





