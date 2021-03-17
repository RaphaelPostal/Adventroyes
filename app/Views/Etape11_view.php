<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/Etape11.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="<?php echo base_url() ?>/assets/css/Etape11.css" rel="stylesheet">
    <title>Étape Finale</title>
</head>
<body id="body_etape11">

<a id="lien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/image_etape11/next.svg" width="30px"/></a>
<div id="texte1">
    <p id="autotext"></p>
</div>
<div id="texte2">
    <p>
        Pour cette dernière épreuve, tu vas devoir être rapide ! Tu vas devoir reconstituer le cœur en très peu de temps !

    </p>
</div>
<div id="texte3">
    <p>Le but du jeu est de faire le puzzle dans l'ordre indiqué par les numéros.</p>
    <img id="puzzle10" src="<?php echo base_url() ?>/assets/images/image_etape11/puzzle10.png" style="width: 28%;">

    <div class="piece">

        <img id="item1" src="<?php echo base_url() ?>/assets/images/image_etape11/piece1.png" style="width: 10%;">
        <img id="item9" src="<?php echo base_url() ?>/assets/images/image_etape11/piece9.png" style="width: 10%;">
        <img id="item4" src="<?php echo base_url() ?>/assets/images/image_etape11/piece4.png" style="width: 10%;">
        <img id="item7" src="<?php echo base_url() ?>/assets/images/image_etape11/piece7.png" style="width: 10%;">
        <img id="item2" src="<?php echo base_url() ?>/assets/images/image_etape11/piece2.png" style="width: 10%;">
        <img id="item6" src="<?php echo base_url() ?>/assets/images/image_etape11/piece6.png" style="width: 10%;">
        <img id="item3" src="<?php echo base_url() ?>/assets/images/image_etape11/piece3.png" style="width: 10%;">
        <img id="item8" src="<?php echo base_url() ?>/assets/images/image_etape11/piece8.png" style="width: 10%;">
        <img id="item5" src="<?php echo base_url() ?>/assets/images/image_etape11/piece5.png" style="width: 10%;">

    </div>

</div>

<div id="texte4">


    <p><a  href="<?php echo base_url() ?>/Gamer/Victoire">Terminer la quête !</a></p>


</div>

<img src="<?php echo base_url() ?>/assets/images/image_etape11/derniere_garg.png" id="lastgarg" width="13%">
<script>

    const title = document.getElementById('autotext');
    const text = "Il te reste 10 minutes pour finir cette épreuve, seras-tu capable de sauver Troyes ? Tous les Troyens sont avec toi !";

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
        $("#texte4").hide()
        $("#texte3").hide();
        $("#lastgarg").hide();
        $("#reponsetmtc").hide();
        $("#sendreponse").hide();

        $("#lien").click(function(){

            numero++;
            console.log(numero);
            if(numero==1){
                $("#texte1").hide();
                $("#texte2").show();
                $("#lastgarg").show();
            };

            if(numero==2){
                $("#texte2").hide();
                $("#texte3").show();
                $("#reponsetmtc").show();
                $("#sendreponse").show();
                $("#lien").hide();
                $("#lastgarg").hide();
            };
        });

    });

</script>


</body>
</html>
