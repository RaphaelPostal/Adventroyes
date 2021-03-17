<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<h1 id="titre">Liste des participants</h1>


 <?php

 echo '<table id="myTable"><thead><tr><td class="p">Pseudo</td><td class="prog">Progression</td><td class="ph">Photo</td></tr></thead><tbody>';
    foreach ( $les_participants as $item):?>

        <?php echo '<tr><td> '.$item['gamer_pseudo'].'</td><td>Énigme n°'.$item['gamer_enigme_en_cours'].'</td><td><img class="photo" src="'.base_url().'/assets/photos/gamers/'.$item['gamer_photo'].'" alt="photo_participant"></td></tr>';


        ?>

   <?php endforeach;?>
<?php
    echo'</tbody>';
    echo '</table>';
?>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
</script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>