<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de profil</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/GamerModifProfil.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
</head>
<body>
    <h1 id="titremodif">Modifier mon profil</h1>
    <a id="retour-profil" href="<?php echo base_url() ?>/Gamer/AccueilGamer">Retour sur votre profil</a>
    <div id="contenu-modif">
        <div id="ModifPhoto">   
            <img id="avatarmodif" src="" alt="">
            <!--<button id="buttonmodifphoto" action="" >Modifier la photo</button>-->
        </div>

        <form method="POST" id="form-modifs" action="<?php echo base_url() ?>/Gamer/VerificationModifs" enctype="multipart/form-data">
            <div><label for="prenom">Prénom :</label> <input type="text" value="<?php echo $_SESSION['prenom'] ?>" name="prenom" id="prenom" class="inputmodif"></div>
            <div><label for="nom">Nom :</label> <input type="text" value="<?php echo $_SESSION['nom'] ?>" name="nom" id="nom" class="inputmodif"></div>
            <div><label for="pseudo">Pseudo :</label> <input type="text" value="<?php echo $_SESSION['pseudo'] ?>" name="pseudo" id="pseudo" class="inputmodif"></div>
            <div><label for="email">Mail :</label> <input type="mail" value="<?php echo $_SESSION['email'] ?>" name="email" id="mail" class="inputmodif"></div>
            <div><label for="photo">Modifier votre photo :</label><input class="inputmodif" id="file-photo" type="file"  name="photo" value="Votre avatar"></div>
            <!--<input type="text" id="gamer-photo">-->
            <div><label for="pass">Mot de passe :</label> <input type="password" name="pass" id="pass" class="inputmodif"></div>



            <p>Tapez votre mot de passe pour enregistrer. Attention, une modification de l'email entrainera une déconnexion</p>
            <a id="linkmdp" href="<?php echo base_url() ?>/Gamer/ChangeMDP">MODIFIER LE MOT DE PASSE</a>
            <input type="submit" action="" value="ENREGISTRER" id="validermodif">
        </form>

    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            $("#avatarmodif").attr("src", "<?php echo base_url() ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo'] ?>");
            //$("#gamer-photo").val('');
            //console.log($("#gamer-photo").val());
            if($("#gamer-photo").val()==''){
                $("#gamer-photo").val('<?php echo $profil[0]["gamer_photo"] ?>');
            };


            //ajout de l'upload photo dans nouvel enregistrement
            $('#file-photo').change(function(){
                console.log($('#file-photo').val());
                formdata = new FormData();
                file =$(this).prop('files')[0];
                formdata.append("fichierphoto", file);
                $.ajax( { url: "<?php echo base_url() ?>/Gamer/TelechargementNouvellePhoto", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {
                        console.log('fini');
                        console.log(result);
                        $("#avatarmodif").attr("src","<?php echo base_url() ?>/assets/photos/gamers/"+result);
                        //$("#gamer-photo").val(result);
                        //console.log($('#gamer-photo').val());
                    } });//fin ajax

            });




        })

    </script>



</body>


</html>