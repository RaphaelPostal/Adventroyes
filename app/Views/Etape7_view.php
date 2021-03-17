<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="<?php echo base_url() ?>/assets/css/Etape7.css" rel="stylesheet">
	<title>Étape 7</title>
</head>
<body id="body_etape7">

	<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_etape7/next.svg" width="30px"/></a>
	<div id="texte1">
		<p id="autotext"></p>
	</div>

	<video controls preload="auto" id="videoetape4" >
  <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/image_etape7/anim_etape7.mp4"></source> </video>


	<div id="texte3">
		<p><b id="gras_enigme">
			Avez-vous bonne mémoire ?</b><br>
			Rendez-vous au théâtre pour trouver la solution.
		 </p>
	</div>
		<form id="reponsetmtc" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
			<input type="text" name="soluce" placeholder="Réponse">
            <input type="submit" name="envoyer" style="font-size: 20px; font-weight: bold;">
		</form>
	<img src="<?php echo base_url() ?>/assets/images/image_etape7/garg_bordeaux.png" id="gargbord" width="10%">
<script>

	const title = document.getElementById('autotext');
	const text = "Ah ! C’est donc toi, tout le monde parle de toi depuis ce soir. Je compte bien t’arrêter. On va voir si tu brilles encore après cette épreuve… J’ai bien l’intention de garder ce théâtre ! Voici mon énigme :";

	let index = 0;

	const play = () => {
    title.innerHTML = text.slice(0, index)
    index++;

    //Décommenter si je veux que le texte se réécrive à chaque fois
   // if(index > text.length) {
       // index = 0
    //}
	}

	let timer = setInterval(play, 50)

	$(document).ready(function() {

		var numero=0;

		$("#texte3").hide();
		$("#reponsetmtc").hide();
		$("#sendreponse").hide();
		$("#videoetape4").hide();

		$("#lien").click(function(){

			numero++;
			console.log(numero);
			if(numero==1){
				$("#texte3").show();
				$("#texte1").hide()
				$("#reponsetmtc").show();
				$("#sendreponse").show();
				$("#gargbord").hide();
				
				$("#videoetape4").show();
			};  

			
			if(numero==2){
				
				$("#lien").hide();
				$("#texte1").hide();
				$("#texte2").show();
				$("#videoetape4").hide();
				$("#gargbord").show();
				
			}
		});

	});

</script>


</body>
</html>