<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- POPPER POUR PLUS DE FONCTIONNALITES -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<!-- JS DE BOOTSTRAP -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/adminStyle.css">
<link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

    <div>
        <a id="retour" href='<?php echo base_url()?>/Gestion/AccueilAdmin'>Retour au back-office</a>

    </div>

<div class="container-fluid ml-0 mr-0">

    <div style='height:20px;'></div>
    <div style="padding: 10px">
        <?php echo $output; ?>
    </div>


<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

</div>

<script type="text/javascript">

    $(document).ready(function(){

        //ajout de l'upload photo dans nouvel enregistrement
        $('#file-photo').change(function(){
            console.log($('#file-photo').val())
            formdata = new FormData();
            file =$(this).prop('files')[0];
            formdata.append("fichierphoto", file);
            $.ajax( { url: "<?php echo base_url() ?>/Gestion/Telechargement", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {
                console.log('fini');
                console.log(result);
                $("#miniature").attr("src","<?php echo base_url() ?>/assets/photos/enigmes/"+result);
                $("#enigme-photo").val(result);
            } });//fin ajax

        })

        
    })
</script>
