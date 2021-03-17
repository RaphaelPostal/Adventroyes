
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <title>Départ</title>
    
</head>
<body>
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        top: 0;
        color: white;
        font-family: 'Roboto', sans-serif;
        background-color: #1A213E;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #videoetape0{
        width: 75%;
        border-radius: 50px;
        margin-top: 7%;
    }

   #commencer{
       color: white;
       text-decoration: none;
       position: absolute;
       right: 5px;
       bottom: 20px;
   }
</style>


<video controls preload="auto" id="videoetape0" >
    <source type="video/mp4" src="<?php echo base_url() ?>/assets/images/animation_debut.mp4"></source> </video>


<a id="commencer" href="<?php echo base_url() ?>/Gamer/Debut">Passer à la suite</a>



<script type="text/javascript">
    $(document).ready(function() {

        var numero=0;

        $("#videoetape0").hide();
        $("#etape-suivante").hide();


        $("#suite").click(function(){
            numero++;
            console.log(numero);
            if(numero==1){

                $("#texte1").hide();
                $("#videoetape4").show();
            };


        });







    })//fin doc ready
</script>
</script>
</body>
</html>