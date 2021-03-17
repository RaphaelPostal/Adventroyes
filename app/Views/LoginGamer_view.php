
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/LoginGamer.css">


<h2 id="connectez_vous">Connectez-vous pour partir à l'aventure !</h2>

<form action="<?php echo base_url() ?>/Gamer/Verification" method="POST" class="form_connexion">

    <div class="div_new_gamer">
        <label for="email">E-mail : </label>
        <input autocomplete="current-password" type="email" name="useremail" id="email" required>
    </div>
    <div class="div_connexion">
        <label for="mdp">Mot de passe : </label>
        <input id="mdp_connexion" type="password" name="pass" id="name" required>
    </div>

    <div>
        <input type="submit" id="connecter" value="Se connecter">
    </div><br><br>

    <a class="lien_login" href="<?php echo base_url() ?>/Gamer/Oubli" id="oubli"> J'ai oublié mon mot de passe</a>
</form>


<footer class="footer">

    <nav class="fin">
        <ul class="liste">
            <li class="gauche"><img src="<?php echo base_url() ?>/assets/images/image_footer/logo.png"></li>
            <li class="center">Created by Architek <br> <a href="http://149.91.80.57/architek"><img src="<?php echo base_url() ?>/assets/images/image_footer/architek.png"></a></li>
            <li class="droite"><a id="lien-admin" href="<?php echo base_url() ?>/Gestion">Administration</a><br> ©Architek2020 <br> Tous droits réservés</li>
        </ul>
    </nav>

</footer>

</body>
</html>
