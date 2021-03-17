<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/GamerWin.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Félicitations</title>
</head>
<body>
<a id="flechelien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_GamerWin/next.svg" width="30px" /></a>

<video controls autoplay preload="auto" id="videofinal" >
  <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/image_GamerWin/adventroyesfinal.mp4"></source> </video>
<div id="content-win">

    <h1>Félicitations, tu as réussi à libérer la ville.</h1>
    <h2>Ta quête s'arrête ici.</h2>

        <div id="link-win">
            <a class="linkwinpages" href="<?php echo base_url() ?>/Gamer/AccueilGamer">Retour au profil</a>
            <a class="linkwinpages" href="<?php echo base_url() ?>/Gamer/Stats">Voir les statistiques</a>
        </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {

	 	var numero=0;
	
		$("#content-win").hide();
        $("#flechelien").show();

		$("#flechelien").click(function(){
			numero++;
			console.log(numero);
			if(numero==1){
				$("#videofinal").hide();
                $("#content-win").show();
                $("#flechelien").hide();
			}; 

			
		});
		
    

	})//fin doc ready 
</script>
</body>
</html>