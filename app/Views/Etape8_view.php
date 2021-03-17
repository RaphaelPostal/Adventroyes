<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="<?php echo base_url() ?>/assets/css/Etape8.css" rel="stylesheet">
	<title>Étape 8</title>
</head>
<body id="body_etape8">

	<a id="flechelien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_etape8/next.svg" width="30px"/></a>
	<div id="texte1">
		<p id="autotext"></p>
	</div>

	<video controls preload="auto" id="videoetape8" >
  <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/image_etape8/gargouille_mymy_5.mp4"></source> </video>


	<div id="texte2">
		<p>Ha, c’est bien toi. J’espère que tu es au courant que tu ne pourras pas sauver tous les bâtiments dans le temps imparti ! Voilà ma question :</p>
	</div>
	<div id="texte3">
		<p><b id="gras_enigme">
                Le mot de passe est un haut-lieu de cette citée.
			</b><br />
			Quelle étrange énigme ! Pour ne pas dormir debout, regardez votre carte postale !
		 </p>
	</div>
		<form id="reponsetmtc" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
			<input type="text" name="soluce" placeholder="Réponse">
            <input type="submit" name="envoyer" style="font-size: 20px; font-weight: bold;">
		</form>

	<img src="<?php echo base_url() ?>/assets/images/image_etape8/gargouillejaune.png" id="gargouillejaune" width="15%">
<script>

	const title = document.getElementById('autotext');
	const text = "L’heure tourne, il est 22h55 ! Tu vas devoir être efficace sur les prochaines épreuves, désormais tu te trouves sur la place devant l’Hôtel-de-Ville ! Des tas de gargouilles s’y trouvent et protègent les lieux. Il t’est impossible de t’y rendre sans pousser les gargouilles. Les gargouilles savent qui tu es, elles préviennent donc celle qui va poser l’énigme. ";

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

		$("#texte2").hide();
		$("#texte3").hide();
		$("#gargouillejaune").hide();
		$("#reponsetmtc").hide();
		$("#sendreponse").hide();
		$("#videoetape8").hide();

		$("#flechelien").click(function(){

			numero++;
			console.log(numero);
			if(numero==1){
				
				$("#texte1").hide();
				$("#videoetape8").show();
			};

			if(numero==2){
				
				$("#texte1").hide();
				$("#texte2").show();
				$("#horloge_proche").hide();
				$("#gargouillejaune").show();
				$("#videoetape8").hide();
			};  

			if(numero==3){
				
				$("#gargouille").show();
				$("#texte2").hide();
				$("#texte3").show();
				$("#reponsetmtc").show();
				$("#sendreponse").show();
				$("#flechelien").hide();
			}
		});

	});

</script>


</body>
</html>