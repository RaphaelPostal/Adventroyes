<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Étape 10</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/Etape10.css">
</head>
<body>
<a id="flechelien" href="#"><img id="suite" src="<?php echo base_url() ?>/assets/images/next.svg" width="30px" /></a>
<div id="texte1">
    <p id="autotext">Il est 23h40 le temps presse !! Tu cours au bâtiment le plus proche de la basilique, tu vas donc à la cathédrale Saint-Pierre-Saint-Paul ! Il y a une nuée de gargouilles qui gardent l’entrée. Tu cries pour que quelqu’un te mette à l’épreuve. Une grosse gargouille se met sur la tour manquante et te met face à l’énigme suivante.</p>
</div>

<div id="texte2">
    <img id="gargouilleetape10" src="<?php echo base_url() ?>/assets/images/gargouille1etape10.png" alt="">
    <p id="autotext2">Je cherche un prénom, celui qui manque en ce lieu.<em>Cette cathédrale te donnera peut-être la réponse.</em></p>



    <form id="formetape10" method="POST" action="<?php echo base_url() ?>/Gamer/ValideReponse">
        <input id="reponse-etape10" type="text" name="soluce" placeholder="Réponse">
        <input id="envoyer-etape10" type="submit" name="valider" value="J'ai trouvé" action="EtapeWin_view.php" >
    </form>

</div>



</div>

<script src="<?php echo base_url() ?>/assets/js/Etape10.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        var numero=0;

        $("#texte2").hide();
        $("#etape-suivante").hide();
        $("#cartes").hide();
        $("#close").hide();


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



    })//fin doc ready
</script>
<script type="text/javascript" src="<?php echo base_url() ?>/assets/js/puzzle.js" charset="utf-8"></script>
</body>
</html>
