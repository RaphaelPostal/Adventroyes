<title>Profil</title>
<h1 id="titre">Bienvenue sur la page profil de <?php echo $profil[0]['gamer_prenom'].' '.$profil[0]['gamer_nom']; ?></h1>

<p>Voici votre profil</p><br />
<p><img class="photo-profil" src="<?php echo base_url() ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo']  ?>" alt="photo du joueur"></p>

<p>Félicitations, vous avez gagné !!!</p>
<p>Vous avez terminé le jeu en faisant <?php echo $profil[0]['nb_essais_total'] ?> erreurs. Bien joué !</p>

<p><a href="<?php echo base_url() ?>/Gamer/Recommencer">Recommencer une partie</a></p>







