<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/GamerRecupMDP_view.css">
<body>
	<div id="recup_mdp">
        <?php
        if (!empty($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset ($_SESSION['message']);
        }
        ?>
		<h1 id="titre-recup">Mot de passe oublié ?</h1>
		<h2 id="titre-recup2">Indiquez l’adresse Email à laquelle sera envoyé un mot de passe provisoire</h2>
		<form method="POST" action="<?php echo base_url() ?>/Gamer/RecupMDP">
			<input id="email-recup" class="input-recup" placeholder="Email" type="email" name="email" tabindex="1" required autofocus id="email">
			<input id="envoi-recup" class="input-recup" type="submit" name="envoyé" id="submit">
		</form>
		<h3 id="mdp"></h3>

		<p><a href="<?php echo base_url() ?>/Gamer"><b>Retour</b></a> à la page de connexion</p>
	</div>

	<script>
		$(function(){
			$('#mdp').hide();
		   	$('#submit').click(function(){
		   		$("#mdp").val($("#email").val());
		   		console.log($("#email").val())
		      	$('#mdp').show(); // AFFICHE ET CACHE A CHAQUE CLIQUE SUR LE BOUTTON
		   });
		});
	</script>
</body>
</html>






