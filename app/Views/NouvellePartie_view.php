
    <title>Nouvelle Partie</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/NouvellePartie.css">

<body>


<div id="page_etape_win">
    <h1>Voulez-vous commencer une nouvelle partie, <?php echo $_SESSION['pseudo']?> ?</h1><br /> <!-- <?php /*echo $profil[0]['gamer_prenom'] */ ?> --><!-- <?php /*echo $profil[0]['gamer_nom'] */ ?> -->
    <h2>Veuillez rentrer le code d'accès présent sur votre <a id="lien_boutique" href="<?php echo base_url() ?>/Accueil/Boutique">carte</a></h2><br />
    <form method="POST" action="<?php echo base_url() ?>/Gamer/ValideCode">
        <input type="text" name="code" placeholder="Code">
        <input type="submit" name="submit" value="Commencer">
    </form>
</div>






