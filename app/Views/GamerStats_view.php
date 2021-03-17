<title>Statistiques</title>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>/assets/css/GamerStats_view.css">
<link rel="icon" type="image/x-icon" href="<?php echo base_url()  ?>/assets/images/logoadven.ico">
<body id="gamer_stats">

<a id="retour-profil" href="<?php echo base_url() ?>/Gamer/AccueilGamer">Retour sur votre profil</a>

	<h2 id="informations_pseudo">Statistiques de <?php  echo $_SESSION['pseudo'] ?></h2>


			<div id="container_photo">
				<div><img id="avatar_gamer_stats" src="<?php echo base_url()?>/assets/photos/gamers/<?php echo $_SESSION['photo'] ?>"></div>
				<div id="container_infos_joueur">
					<div class="infos_joueur"><?php echo $_SESSION['prenom'].' '.$_SESSION['nom']?></div>
					<div class="infos_joueur"><?php echo $_SESSION['email']?></div>
				</div>
			</div>

    <div id="big-container">
        <div id="container_historique_parties"><h4 id="titre-histo">Historique des parties :</h4>


            <?php



            foreach ($_SESSION['tab_parties'] as $key => $value){ // RECUPERATION DES DONNEES

                echo '<div id="container_parties1" class="container_partie">';
                echo '<div class="numero_partie">Partie n°'.$value['partie_id'].'</div>';
                echo'<div class="infos_partie">Début : '.$value['date_debut'].'</div>';
                if($value['date_fin']=='0000-00-00'){
                    echo '<div class="infos_partie">Fin : Partie non terminée</div>';
                }else{
                    echo '<div class="infos_partie">Fin : '.$value['date_fin'].'</div>';
                }

                echo'<div class="infos_partie">Temps passé : '.$value['temps_total'].' secondes</div>';
                if($value['score']==0){
                    echo '<div class="infos_partie">Score total : Partie non terminée</div>';
                }else{
                    echo '<div class="infos_partie">Score total : '.$value['score'].' points</div>';
                }

                if($value['classement']==1){
                    echo '<div class="infos_partie">Classement : 1<sup>er</sup></div>';
                }else{
                    if($value['classement']==0){
                        echo '<div class="infos_partie">Classement : Partie non terminée</div>';
                    }else{
                        echo '<div class="infos_partie">Classement : '.$value['classement'].'<sup>e</sup></div>';
                    }

                }




            echo '</div>';

            }
            //var_dump($_SESSION['tab_parties'][$key]);
            ?>


    </div>

    <div id="container_gamer_stats">
			<div id="container_stats">
				<div class="titre_container">Statistiques de la partie en cours :</div>
				<div id="container_partie_en_cours">
                    <?php if($_SESSION['tab_parties']!=null){
                        echo'<div class="numero_partie">Partie n°'.$_SESSION["partie_id"].'</div>';
                        echo'<div class="infos_partie">Commencée le: '.$_SESSION["date_debut"].'</div>';
                        echo '<div class="infos_partie">Temps passé : '.$_SESSION["temps_total"] .' secondes</div>';
                        if ($profil[0]['gamer_enigme_en_cours']==12){
                            echo '<div class="infos_partie">Étape actuelle : Partie terminée</div>';
                        }else{
                            echo '<div class="infos_partie">Étape actuelle : '.$profil[0]['gamer_enigme_en_cours'].'</div>';
                        }
                        if($profil[0]['gamer_enigme_en_cours']<=2){
                            echo '<div class="infos_partie">Pièces récupérées : 0/9 </div>';
                        }else{
                            $num= $profil[0]['gamer_enigme_en_cours']-=2;
                            if($num<10){
                                echo '<div class="infos_partie">Pièces récupérées : '.$num.'/9</div>';
                            }else{
                                echo '<div class="infos_partie">Pièces récupérées : 9/9</div>';
                            }

                        }
                    }else{
                        echo '<div class="numero_partie">Pas de partie en cours</div>';
                    } ?>

				</div>
			</div>

			<div id="coupe"><img src="<?php echo base_url() ?>/assets/images/coupe.png" alt="coupe" width="110px"></div>
			<div id="classement">Classement :

                <?php /*var_dump($_SESSION['tab_classement'][0]['gamer_prenom']);*/
                $top=0;
                foreach ($_SESSION['tab_classement'] as $key => $value) { // RECUPERATION DES DONNEES
                    $top++;
                    echo'<div class="container_classement">';
                    switch ($top){
                        case 1:
                        echo '<div class="pseudo_classement" id="numero1">'.$top.' '.$value['gamer_pseudo'].'</div>';
                        break;

                        case 2:
                            echo '<div class="pseudo_classement" id="numero2">'.$top.' '.$value['gamer_pseudo'].'</div>';
                            break;

                        case 3: echo '<div class="pseudo_classement" id="numero3">'.$top.' '.$value['gamer_pseudo'].'</div>';
                        break;

                        default:
                            echo '<div class="pseudo_classement">'.$top.' '.$value['gamer_pseudo'].'</div>'; ;
                    }

                    echo '<div class="Score"> | '.$value['score'].' points</div>';

                    echo '</div>';
                }
                ?>


			</div>
	</div>
    </div>
</body>