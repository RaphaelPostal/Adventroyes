
<!DOCTYPE html>
<html>
<head>
	<title>Étape 3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script type="text/javascript" src="<?php echo base_url() ?>/assets/js/Etape3_view.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="<?php echo base_url() ?>/assets/css/Etape3_view.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body id="etape3" id="etape3_2" >
	<div id="texte1">
		<p id="autotext">
		</p>
	</div>
	<a id="flechelien" id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/Etape3_img/next.svg" width="30px" /></a>

	<video controls preload="auto" id="videoetape3" >
  <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/Etape3_img/anim_etape3.mp4"></source> </video>


	<div id="texte2">	
		<img src="<?php echo base_url() ?>/assets/images/Etape3_img/garg3.png">

		<p> Alors c’est toi, l’humain qui veut sauver Troyes ? Ne crois pas une seconde que tu as tes chances. Ces bâtiments nous reviennent de droit !... Bon assez plaisanté, voici mon épreuve.</p>
	</div>
	<div id="jeu">
		
		<section class="container-fluid content">
			<div class="row">
				<div class="col-md-6">
					<h2 class="he3">Vous devez aider la gargouille à retrouver ses amis! Trouvez-les et sauvez-vous de ce labyrinthe. Vous incarnez la gargouille verte.</h2>
					<br><br>
					<center>
						<div class="col-md-6">
							<table id="labyrinthe">
							</table>
						</div>
					</center>
					<div class="text_center">
						<h4>Conseil pour te déplacer</h4>
						<p class="c">(Z) haut</p>
						<p>(Q) gauche | droite (D)</p>
						<p class="c">(S) bas</p>

					</div>
					<div class="success text-center"></div>
					<p class="errors alert"></p>
				</div>
			</div>
		</section>

	</div>

	<div id="reponse">
		<div class="Wrapper">
			<P> Bravo ! Tu as passé l'épreuve. Mais je crois que le mot de passe est rester sous l'eau. Comment le récupérer ?</P>
			<form id="formetape6" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
				<input id="reponse-etape3" type="text" name="soluce" placeholder="Réponse">
				<input id="envoyer-etape3" type="submit" name="valider" value="J'ai trouvé">
			</form>
		</div>
	</div>

	
</body>
<script type="text/javascript">
	$(document).ready(function() {

		var numero=0;

		$("#texte2").hide();
		$("#texte3").hide();
		$("#reponse").hide();
		$("#jeu").hide();
		
		$("#videoetape3").hide();
		$("#etape-suivante").hide();


		$("#suite").click(function(){
			numero++;
			console.log(numero);
			if(numero==1){
				$("#texte1").hide();
				
				$("#videoetape3").show();

				

			}; 

			if(numero==2){
				
				$("#videoetape3").hide();
				$("#texte1").hide();
				$("#texte2").show();
			}

			if(numero==2){
				$("#texte2").hide();
				$("#jeu").show();
				$("#flechelien").hide();		
			}
			
			
			
		});

		function changeClass() { 
			document.getElementById('etape3').className = "etape3_2"; 
		};
		

	})//fin doc ready



	// animation text 


	const title = document.getElementById('autotext');
	const text = "Tu décides de te rendre au prochain endroit. Il est déjà 21h30. Plus que 2h30 pour sauver les lieux emblématiques de Troyes. Cet endroit n’est autre que la \"Ribambelle Joyeuse\", ce nom ne te parle pas trop, mais tu te diriges avec ta carte et tu comprends alors que ce nom désigne les statues près des quais. Les statues qui plongent dans le canal sont recouvertes de gargouilles. Ni une ni deux tu pars à la rencontre de cette gargouille.";

	let index = 0;

	const play = () => {
		title.innerHTML = text.slice(0, index)
		index++;

    //Décommenter si je veux que le texte se réécrive à chaque fois
   // if(index > text.length) {
       // index = 0
    //}
}

let timer = setInterval(play, 60)

</script>
</html>

