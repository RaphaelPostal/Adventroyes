<!DOCTYPE html>
<html>
<head>
    <title>Étape 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="<?php echo base_url() ?>/assets/css/Etape4_view.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body id="etape4">
<div id="texte1">
    <p id="autotext"></p>
</div>

<video controls preload="auto" id="videoetape4" >
    <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/image_etape4/anim_etape4.mp4"></source> </video>

<div id="texte2">
    <img src="<?php echo base_url() ?>/assets/images/image_etape4/bleu2.png">

    <p>Pour cette épreuve, tu vas devoir prouver ta rapidité et ta délicatesse ! Tu vas contrôler une gargouille. Cette gargouille va devoir passer entre des poteaux. Avec le clic gauche de ta souris, tu peux la faire remonter. Si tu touches un poteau, tu recommences. C’est très simple… à toi de jouer !</p>
</div>
<div id="jeu">
    <header>
        <h1>Gargoullly</h1>
        <div class="score-container">
            <div id="bestScore"></div>
            <div id="currentScore"></div>
        </div>
    </header>

    <canvas id="canvas" width="431" height="668"></canvas>
    <script src="<?php echo base_url() ?>/assets/js/Etape4_view.js" type="text/javascript" ></script>

</div>

<div id="reponse">

    <P> Bien joué ! Tu as réussis à passer cette épreuve. Le mot de passe ne devrait pas être loin. </P>
    <form id="formetape6" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
        <input id="reponse-etape4" type="text" name="soluce" placeholder="Réponse">
        <input id="envoyer-etape4" type="submit" name="valider" value="J'ai trouvé">
    </form>

</div>

<a id="flechelien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/next.svg" width="30px" /></a>

</body>





<script type="text/javascript">
    $(document).ready(function() {

        var numero=0;

        $("#texte2").hide();
        $("#reponse").hide();
        $("#jeu").hide();
        $("#videoetape4").hide();
        $("#etape-suivante").hide();


        $("#suite").click(function(){
            numero++;
            console.log(numero);
            if(numero==1){

                $("#texte1").hide();
                $("#videoetape4").show();
            };

            if(numero==2){

                $("#texte1").hide();
                $("#texte2").show();
                $("#videoetape4").hide();

            }

            if(numero==3){

                $("#texte2").hide();
                $("#jeu").show();

                $("#flechelien").hide();
            }


            if(numero==4){
            }

        });







    })//fin doc ready
    // animation text



    // animation text


    const title = document.getElementById('autotext');
    const text = "Tu te trouves devant l’hôtel-Dieu, pleins de gargouilles sont sur le portail. Une grosse gargouille vient te parler. Seras-tu capable de sauver Troyes ? Tout le monde compte sur toi souviens-toi en.";

    let mo = 0;

    const plo = () => {
        title.innerHTML = text.slice(0, mo)
        mo++;

        //Décommenter si je veux que le texte se réécrive à chaque fois
        // if(mo > text.length) {
        // mo = 0
        //}
    }

    let timer = setInterval(plo, 70)

</script>
</html>