<!DOCTYPE html>
<html>
<head>
	<title>changer de mdp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/GamerChangeMDP.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
</head>
<body id="body_change_mdp">
	<div id="haut_page_mdp">
		<img src="<?php echo base_url() ?>/assets/images/gargbleu.png" width="12%" id="garg_change_mdp">
		<div id="cadreoklm">
			<div>Sur cette page tu peux modifier ton mot de passe. <br></div>
			<div>Pour voir toutes les informations te concernant, <a href="<?php echo base_url() ?>/Gamer/AccueilGamer">clique ici</a></div><br >
            <div>Attention, une modification entraînera une déconnexion !</div>
		</div>
	</div>

		<form method="POST" action="<?php echo base_url() ?>/Gamer/VerificationModifMDP">
            <label for="pass">Mot de passe actuel : </label><input type="password" name="pass" id="password">&nbsp&nbsp
            <label for="new_pass">Nouveau mot de passe : </label><input type="password" name="new_pass" id="password2">&nbsp&nbsp
            <button  type="submit" name="envoyer" id="boutton_envoyer">Valider</button>
		</form>


	<script>
		document.getElementById( 'eye' ).addEventListener( "click", function() {
 
   		document.getElementById( 'password' ).setAttribute( 'type', 'text' );
 
});

		document.getElementById( 'eye2' ).addEventListener( "click", function() {
 
   		document.getElementById( 'password2' ).setAttribute( 'type', 'text' );
 
});
	</script>

</body>
</html>