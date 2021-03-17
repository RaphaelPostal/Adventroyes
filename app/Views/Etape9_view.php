<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="<?php echo base_url() ?>/assets/css/Etape9.css" rel="stylesheet">
	<title>Étape 9</title>
</head>
<body id="body_etape9">

	<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_etape9/next.svg" width="30px"/></a>
	<div id="texte1">
		<p id="autotext"></p>
	</div>
	<div id="texte2">
		<p>
			Alors c’est toi qui as eu l’audace de venir répondre à mon énigme ? Je suis sûr que tu ne feras pas le poids. Je vais honorer notre accord, je veux que tu répondes à ma question :
		</p>
	</div>
	<div id="texte3">
		<p><b id="gras_enigme">
			Ce bâtiment est vieux, mais pas autant que nous. Sais-tu pourquoi ?
		 </p>
	</div>
		<form id="reponsetmtc" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
			<input type="text" name="soluce" placeholder="Réponse">

                <input type="submit" name="envoyer" style="font-size: 20px; font-weight: bold;">
		</form>


	<img src="<?php echo base_url() ?>/assets/images/image_etape9/gargchef.png" id="gargchef" width="13%">
<script>

	const title = document.getElementById('autotext');
	const text = "Te voilà à la basilique Saint-Urbain. Il est 23h20. Plusieurs gargouilles sont en train de veiller sur l’imposant édifice. 10, 20 peut-être même 100, il est impossible de les compter, elles ne cessent de bouger. L’une d’elle s’approche de toi. Elle te regarde dans les yeux et te guide à l’intérieur de la basilique. Et t’amène devant leur chef.";

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
		$("#gargchef").hide();
		$("#reponsetmtc").hide();
		$("#sendreponse").hide();

		$("#lien").click(function(){

			numero++;
			console.log(numero);
			if(numero==1){
				$("#texte1").hide();
				$("#texte2").show();
				$("#gargchef").show();
			};

			if(numero==2){
				$("#texte2").hide();
				$("#texte3").show();
				$("#reponsetmtc").show();
				$("#sendreponse").show();
				$("#lien").hide();
			};  
		});

	});

</script>


</body>
</html>