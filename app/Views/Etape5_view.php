<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="<?php echo base_url() ?>/assets/css/Etape5.css" rel="stylesheet">
	<title>Étape 5</title>
</head>
<body id="body_etape5">

	<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_etape5/next.svg" width="30px"/></a>
	<div id="texte1">
		<p id="autotext">ddd</p>
	</div>
	<div id="texte2">
		
			<h2>Tu penses avoir trouvé la solution ?<br></h2>
			<h3>Cette ruelle est pleine d'indices !</h3>
		
		<form method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
			<input type="texte" name="soluce" placeholder="réponse">
			<input type="submit" name="envoyer">
		</form>
	</div>
	<img src="<?php echo base_url() ?>/assets/images/image_etape5/horloge.png" id="horloge" width="10%">
	<img src="<?php echo base_url() ?>/assets/images/image_etape5/horloge_proche.png" id="horloge_proche" width="40%">
	<img src="<?php echo base_url() ?>/assets/images/image_etape5/gargouille.png" id="gargouille" width="5%">
	<img src="<?php echo base_url() ?>/assets/images/image_etape5/croix.png" id="croix" width="3%">


	<script type="text/javascript">

	$(document).ready(function() {

		var numero=0;

		$("#texte2").hide();
		$("#horloge").hide();
		$("#horloge_proche").hide();
		$("#gargouille").hide();
		$("#croix").hide();


		$("#lien").click(function(){
			numero++;
			console.log(numero);
			if(numero==1){
				$("#texte1").hide();
				$("#lien").hide();
				$("#horloge").show();
				$("#horloge_proche").hide();
				$("#gargouille").show();
			}; 
		});

		$("#horloge").click(function(){
			$("#horloge").hide();
			$("#horloge_proche").show();
			$("#gargouille").hide();
		})

		$("#horloge_proche").click(function(){
			$("#horloge").show();
			$("#horloge_proche").hide();
			$("#gargouille").show();
		})

		$("#gargouille").click(function(){
			$("#texte2").show();
			$("#croix").show();
		})
		$("#croix").click(function(){
			$("#texte2").hide();
			$("#croix").hide();
		})
	});


	const title = document.getElementById('autotext');
	const text = "Tu cours vite à la ruelle des chats ! La ruelle est bouchée des deux côtés par des gargouilles ! Encore ! Vivement que tu les renvoies toutes… Une ÉNORME gargouille vient vers toi et se pose à tes pieds ! Elle se met à chuchoter quelques mots. Tu supposes que c’est une énigme… Tu dois y répondre.";

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

</script>

</body>
</html>