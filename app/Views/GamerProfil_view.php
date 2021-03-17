
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/GamerProfil.css">
<body id="corps-profil"><br /><br />
<h1 id="titre">Bienvenue <?php echo $profil[0]['gamer_prenom'].' '.$profil[0]['gamer_nom'] ?> </h1>
        <section id="bienvenue">

                <article id="presentation-profil">
                        <img id="avatar-gamer-profil" src="<?php echo base_url() ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo'] ?>" alt="">
                        <div id="infoperso">
                                <h4>Informations personnelles</h4>
                                <p>Pseudo : <?php echo $_SESSION['pseudo'] ?></p>
                                <p>Mail : <?php echo $_SESSION['email'] ?></p>
                            <?php if($_SESSION['enigme_en_cours']==0){
                                echo'<p>Vous n\'avez pas commencé le jeu !</p>';
                            }elseif($_SESSION['enigme_en_cours']==12){
                                echo'<p>Vous avez terminé le jeu !</p>';

                            }else{
                                echo'<p>Vous en êtes à l\'étape '.$_SESSION["enigme_en_cours"].' </p>';
                            }
                            ?>
                            
                                
                        </div>
                </article>
                
        </section>

        <section id="suite">
                <article id="premierpara">
                        <h2 class="sous-titres">Règles du jeu</h2>
                        <h3>Scénario:</h3>
                        <p class="text">La ville de Troyes s’est faite attaquée par des gargouilles. Les gargouilles ont pris possession des plus beaux bâtiments 
                de la ville. Après plusieurs heures de négociations, les Troyens sont parvenus à trouver un accord. Une personne 
                devra réaliser 10 quêtes. Il se trouve que c’est toi qui as été choisi. Si tu réussis à passer les 10 étapes tu libèreras 
                la ville de Troyes. Seras-tu capable de réussir ces épreuves ? L’avenir de la ville est entre tes mains.</p>

                        <p class="text" id="temps"> <strong>Durée de jeu moyen: </strong>30 minutes</p>

                        <h3>Fonctionnement :</h3>
                        <p class="text">Les règles du jeu sont simples, tu devras réaliser des mini-jeux et répondre aux questions qui te seront posées. 
                                Le principe de chaque jeu te sera expliqué avant de le commencer, certains d’entre eux sont limités en temps alors agis stratégiquement et rapidement. Des cartes postales sont à disposition, elles te seront peut-être utiles, ne les oublie pas.
                                En réussissant chaque étape, tu obtiendras une récompense spéciale qui te servira pour la fin de la quête.<br>
                                Bonne chance.</p>
                </article>

                <article id="deuxiemepara">
                        <h2 class="sous-titres">AdvenTroyes n'attend que toi !</h2>
                        <div id="buttons">
                        <div class="container">

                            <?php
                                if($_SESSION['tab_parties']!=null){
                                    echo '<a href="'.base_url().'/Gamer/CommencePartie" class="button">COMMENCER UNE NOUVELLE PARTIE</a>';
                                    echo '<a href="'.base_url().'/Gamer/Jouer" class="button">CONTINUER LA PARTIE EN COURS</a>';
                                }else{
                                    echo '<a href="'.base_url().'/Accueil/Boutique" class="button">SE PROCURER LES CARTES POSTALES</a>';
                                    echo '<a href="'.base_url().'/Gamer/CommencePartie" class="button">COMMENCER UNE NOUVELLE PARTIE</a>';
                                }
                            ?>
</div>  
                        </div>
                </article>
        </section>
</body>
</html>
    