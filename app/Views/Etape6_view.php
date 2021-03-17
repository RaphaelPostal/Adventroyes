<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Étape 6</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/Etape6.css">
</head>
<body>
<a id="flechelien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/images/next.svg" width="30px" /></a>
    <div id="texte1">
    	<p id="autotext">Suite de l'étape</p>
	</div>
	
    <div id="texte2">
		<img id="gargouilleetape6" src="<?php echo base_url() ?>/assets/images/images/gargouilles1etape6.png" alt="">
		<p id="autotext2">Nous ne laisserons pas notre bâtiment si facilement...  Des lettres à récolter peuvent t'aider. Quelle est le mot magique ? 
			 <em>Es-tu amateur de football ?</em></p>
			 
			 <img id="cross" src="<?php echo base_url() ?>/assets/images/images/cross.svg" alt="">
			 <div id="cartes">
				<img src="<?php echo base_url() ?>/assets/images/images/scarte.png" alt="" class="cartes" id="scarte">
				<img src="<?php echo base_url() ?>/assets/images/images/tcarte.png" alt="" class="cartes" id="tcarte">
				<img src="<?php echo base_url() ?>/assets/images/images/acarte.png" alt="" class="cartes" id="acarte">
				<img src="<?php echo base_url() ?>/assets/images/images/dcarte.png" alt="" class="cartes" id="dcarte">
				<img src="<?php echo base_url() ?>/assets/images/images/ecarte.png" alt="" class="cartes" id="ecarte">
				<img src="<?php echo base_url() ?>/assets/images/images/mauvaisecarte.png" alt="" class="cartes" id="mauvaisecarte">
			 </div> 

			 <img src="<?php echo base_url() ?>/assets/images/images/s.png" alt="" class="lettres" id="s">
			 <img src="<?php echo base_url() ?>/assets/images/images/t.png" alt="" class="lettres" id="t">
			 <img src="<?php echo base_url() ?>/assets/images/images/a.png" alt="" class="lettres" id="a">
			 <img src="<?php echo base_url() ?>/assets/images/images/d.png" alt="" class="lettres" id="d">
			 <img src="<?php echo base_url() ?>/assets/images/images/e.png" alt="" class="lettres" id="e">
			 <img src="<?php echo base_url() ?>/assets/images/images/i.png" alt="" class="lettres" id="i">
			 <img src="<?php echo base_url() ?>/assets/images/images/u.png" alt="" class="lettres" id="u">
			 <img src="<?php echo base_url() ?>/assets/images/images/w.png" alt="" class="lettres" id="w">
			 <img src="<?php echo base_url() ?>/assets/images/images/y.png" alt="" class="lettres" id="y">
			 <img src="<?php echo base_url() ?>/assets/images/images/n.png" alt="" class="lettres" id="n">
		
			 


		<form id="formetape6" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
			<input id="reponse-etape6" type="text" name="soluce" placeholder="Réponse">
			<input id="envoyer-etape6" type="submit" name="valider" value="J'ai trouvé" action="EtapeWin_view.php" >
		</form>
	
    </div>
    

	
</div>

    <script src="<?php echo base_url() ?>/assets/js/Etape6.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {

	 	var numero=0;
	
		$("#texte2").hide();
		$("#etape-suivante").hide();
		$("#cross").hide();
		$(".cartes").hide();


		$("#flechelien").click(function(){
			numero++;
			console.log(numero);
			if(numero==1){
				$("#texte1").hide();
				$("#texte2").show();
				$("#flechelien").hide();
			}; 

			if(numero==2){
				$("#texte2").hide();
				
			}

			if(numero==3){
				$("#flechelien").attr("href", "GamerWin_view");
			}
			
			
		});
		
		$("#s").click(function(){
			$("#scarte").show();
			$("#cross").show();
		});
		$("#t").click(function(){
			$("#tcarte").show();
			$("#cross").show();
		});
		$("#a").click(function(){
			$("#acarte").show();
			$("#cross").show();
		});
		$("#d").click(function(){
			$("#dcarte").show();
			$("#cross").show();
		});
		$("e").click(function(){
			$("#ecarte").show();
			$("#cross").show();
		});
		$("#e").click(function(){
			$("#ecarte").show();
			$("#cross").show();
		});
		$("#i").click(function(){
			$("#mauvaisecarte").show();
			$("#cross").show();
		});
		$("#u").click(function(){
			$("#mauvaisecarte").show();
			$("#cross").show();
		});
		$("#y").click(function(){
			$("#mauvaisecarte").show();
			$("#cross").show();
		});
		$("#w").click(function(){
			$("#mauvaisecarte").show();
			$("#cross").show();
		});
		$("#n").click(function(){
			$("#mauvaisecarte").show();
			$("#cross").show();
		});

		$("#cross").click(function(){
			$(".cartes").hide();
			$("#cross").hide();
		});
	})//fin doc ready 
</script>
<script type="text/javascript" src="js/puzzle.js" charset="utf-8"></script>
</body>
</html>