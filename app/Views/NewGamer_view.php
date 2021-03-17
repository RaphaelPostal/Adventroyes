
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/NewGamer_view.css">
<body id="new_gamer">

    <h2 id="inscrivez_vous">Inscrivez-vous à notre quête !</h2>
    
    <form method="POST" action="<?php echo base_url() ?>/Gamer/Enregistrement"  class="form_new_gamer"  enctype="multipart/form-data">
        <div class="div_new_gamer">
            <label for="prenom">Prénom : </label>
            <input autocomplete="current-password" type="text" name="prenom" id="name" required>
        </div>
      <div class="div_new_gamer">
        <label for="nom">Nom : </label>
        <input autocomplete="current-password" type="text" name="nom" id="name" required>
      </div>

      <div class="div_new_gamer">
        <label for="email">E-mail : </label>
        <input autocomplete="current-password" type="email" name="email" id="email" required>
      </div>
      <div class="div_new_gamer">
        <label for="pseudo">Pseudo : </label>
        <input autocomplete="current-password" type="text" name="pseudo" id="name" required>
      </div>
      <div class="div_new_gamer">
        <label for="pass">Mot de passe : </label>
        <input id="mdp_new_gamer" autocomplete="current-password" type="password" name="pass" id="name" required>
      </div>
        <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
            <input class="input100" type="file" name="photo" placeholder="Votre avatar">
        </div>
        <input type="submit" id="s_inscrire" value="S'inscrire !">
      </div>
    </form>
</body>