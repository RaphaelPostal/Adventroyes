<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/LoginAdmin_view.css">
<body id="login_admin">


    <div class="login-page">
  <div class="form">
    <p>Connectez-vous en tant qu'administrateur</p>
    <form class="login-form" method="POST" action="<?php echo base_url()  ?>/Gestion/Verification">
      <input type="text" name="username" placeholder="Administrateur"/>
      <input type="password" name="pass" placeholder="Mot de passe"/>
      <input type="submit" value="Connexion" />
    </form>
  </div>
</div>
</body>