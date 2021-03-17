<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- POPPER POUR PLUS DE FONCTIONNALITES -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<!-- JS DE BOOTSTRAP -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/adminStyle.css">
<link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">

<?php

foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

	<div>
		<a id="retour" href='<?php echo base_url()?>/Gestion/AccueilAdmin'>Retour au back-office</a>

	</div>
<div class="container-fluid ml-0 mr-0">
    <div class="row">
        
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>


    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    </div>
</div>
<?php
$url= $_SERVER['PATH_TRANSLATED'];
$tab=str_split($url,1);
for($i=0; $i<=52; $i++){
    unset($tab[$i]);
}
$gamer_id=implode("", $tab);
$participants_model = new \App\Models\ParticipantsModel();
$photo= $participants_model->recupPhotoById($gamer_id);
if(isset($photo[0])){
    echo'<script type="text/javascript">$(document).ready(function(){$("#avatar").attr("src", "'.base_url().'/assets/photos/gamers/'.$photo[0]["gamer_photo"].'");$("#gamer-photo").val("");console.log($("#gamer-photo").val());if($("#gamer-photo").val()==""){$("#gamer-photo").val("'.$photo[0]["gamer_photo"].'");};$("#file-photo").change(function(){console.log($("#file-photo").val());formdata = new FormData();file =$(this).prop("files")[0];formdata.append("fichierphoto", file);$.ajax( { url: "'.base_url().'/Gestion/TelechargementJoueur", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {console.log("fini");console.log(result);$("#avatar").attr("src","'.base_url().'/assets/photos/gamers/"+result);$("#gamer-photo").val(result);console.log($("#gamer-photo").val());} });});})</script>';
}
?>




<script type="text/javascript">
        //ajout de l'upload photo dans nouvel enregistrement
        $('#file-photo').change(function(){
            console.log($('#file-photo').val())
            formdata = new FormData();
            file =$(this).prop('files')[0];
            formdata.append("fichierphoto", file);
            $.ajax( { url: "<?php echo base_url() ?>/Gestion/TelechargementJoueur", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {
                    console.log('fini');
                    console.log(result);
                    $("#avatar").attr("src","<?php echo base_url() ?>/assets/photos/gamers/"+result);
                    $("#gamer-photo").val(result);
                    console.log($('#gamer-photo').val());
                } });//fin ajax

            });




        })

</script>