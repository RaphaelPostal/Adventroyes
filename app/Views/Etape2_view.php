
<!DOCTYPE html>
<html>
<head>
	<title>Étape 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
	<link href="<?php echo base_url() ?>/assets/css/Etape2_view.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body id="etape4">
	<div id="texte1">
		<p id="autotext"></p>
	</div>
	<div id="texte2">	
		<img src="<?php echo base_url() ?>/assets/images/Etape2_img/garg.png">

		<p> Bienvenue à toi cher aventurier, es-tu prêt pour mon épreuve ? Tu vas devoir être rapide ! J’espère que tu connais les mélanges des couleurs, bonne chance à toi voyageur.</p>
	</div>
	<div id="jeu">
		<h3 id="phrase1">Compose nous du vert avec les différentes couleurs des gargouilles.</h3>
		<h3 id="phrase2">Maintenant nous voulons du orange. ATTENTION, vous devez finaliser votre choix en plaçant une gargouille en haut à gauche.</h3>
		<h3 id="phrase3">Et pour finir, nous voulons du bleu foncé.</h3>

		<div id="scene">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/b.png" id="b1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/c.png" id="c1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/m.png" id="m1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/o.png" id="o1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/r.png" id="r1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/j.png" id="j1">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/v.png" id="v1">

			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/b.png" id="b2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/c.png" id="c2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/m.png" id="m2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/j.png" id="j2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/o.png" id="o2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/r.png" id="r2">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/v.png" id="v2">

			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/b.png" id="b3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/c.png" id="c3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/m.png" id="m3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/j.png" id="j3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/o.png" id="o3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/r.png" id="r3">
			<img src="<?php echo base_url() ?>/assets/images/Etape2_img/v.png" id="v3">

		</div>
	</div>
	<script src="<?php echo base_url() ?>/assets/js/Etape2_view.js" type="text/javascript" ></script>

	<div id="texte3">	
		<img src="<?php echo base_url() ?>/assets/images/Etape2_img/garg.png">

		<p> HAAAA Mais comment as-tu pu réussir mon épreuve !! Tu as triché j’en suis sûr ! Mais il en est ainsi, je te laisse continuer ta quête. Un ultime mélange est la clé pour continuer. </p>
	</div>

	<div id="reponse">
		<div class="Wrapper">
			<P>   </P>
			<form id="formetape6" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
				<input id="reponse-etape2" type="text" name="soluce" placeholder="Réponse">
				<input id="envoyer-etape2" type="submit" name="valider" value="J'ai trouvé" >
			</form>
		</div>
	</div>

	<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/Etape2_img/next.svg" width="30px" /></a>

</body>
<script type="text/javascript">


	// animation text 


	const title = document.getElementById('autotext');
	const text = "Pour ta deuxième épreuve tu te rends place des Halles, plein de gargouilles y sont installées… Une gargouille vient te parler.";

	let index = 0;

	const play = () => {
		title.innerHTML = text.slice(0, index)
		index++;

    //Décommenter si je veux que le texte se réécrive à chaque fois
   // if(index > text.length) {
       // index = 0
    //}
}

let timer = setInterval(play, 100)

$(document).ready(function() {

	var numero=0;

	$("#texte2").hide();
	$("#texte3").hide();
	$("#reponse").hide();
	$("#jeu").hide();
	$("#etape-suivante").hide();


	$("#suite").click(function(){
		numero++;
		console.log(numero);
		if(numero==1){
			$("#texte1").hide();
			$("#texte2").show();
		}; 

		if(numero==2){
			$("#texte2").hide();
			$("#jeu").show();
			$("#lien").hide();


		}

		if(numero==3){
			$("#texte3").hide();
			$("#reponse").show();
			$("#lien").hide();


		}

		if(numero==4){
			$("#lien").attr("href", "EtapeWin_view");
		}


	});
	

	})//fin doc ready
</script>
</html>