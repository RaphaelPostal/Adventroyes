<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?php echo base_url() ?>/assets/css/Etape1.css" rel="stylesheet">
    
    <script src="<?php echo base_url() ?>/assets/js/Etape1.js" type="text/javascript" ></script>
    <title>Étape 1</title>
</head>
<body id="body_etape1">

<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/next.svg" width="30px"/></a>
<div id="texte1">
    <p id="autotext"></p>
</div>
<div id="texte2">
    <p>Il y a 5 paires de gargouilles. Tu n'as besoin d'en rassembler qu'une seule. Auras-tu de la chance ?</p>
</div>

<img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_narra_cyan.png" id="garg_narra" width="12%">

<div id="garg_marron_jeu">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron1.png" id="gg1" width="8%">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron10.png" id="gd1" width="8%">

    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron2.png" id="gg2" width="8%">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron20.png" id="gd2" width="8%">

    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron3.png" id="gg3" width="8%">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron30.png" id="gd3" width="8%">

    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron4.png" id="gg4" width="6%">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron40.png" id="gd4" width="6%">

    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron5.png" id="gg5" width="6%">
    <img src="<?php echo base_url() ?>/assets/images/image_etape1/garg_marron50.png" id="gd5" width="6%">
</div>



<div id="texte3">
    <p>
        <b id="gras_enigme">Sauras-tu trouver le mot de passe ? </b><br>
        Pense bien au bâtiment derrière toi.
    </p>
</div>
<form id="reponsetmtc" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
    <input type="text" name="soluce" placeholder="Réponse">
    <input type="submit" name="envoyer" style="font-size: 20px; font-weight: bold;">
</form>
<script>

    const title = document.getElementById('autotext');
    const text = " Hmmm c’est donc toi qui crois être la personne la plus apte à sauver la ville de Troyes ? Nous n’allons pas perdre plus de temps, relie les gargouilles de couleurs entre elles. ";

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
        $("#garg_narra").show();
        $("#reponsetmtc").hide();
        $("#sendreponse").hide();
        $("#texte3").hide();
        $("#garg_marron_jeu").hide();
        $("#lien").click(function(){

            numero++;
            console.log(numero);
            if(numero==1){
                $("#texte1").hide();
                $("#texte2").show();
                $("#garg_narra").hide();
                $("#garg_marron_jeu").show();
                $("#lien").hide();
            };


        });

    });


</script>


</body>
</html>