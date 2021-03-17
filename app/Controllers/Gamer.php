<?php
namespace App\Controllers;



use CodeIgniter\Controller;


class Gamer extends Controller
{


	protected $helpers = [];


	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->mesSessions = \Config\Services::session();


	}

	public function index(){
	    $this->mesSessions->joueur=0;
	    $data['connecte']=$this->mesSessions->joueur;
	    //var_dump($this->mesSessions->resultat);
        //var_dump($this->mesSessions->num);
	    echo view('Header_view.php', $data);
	    echo view('LoginGamer_view');
	    echo view('Footer_view.php');
    }


    public function NewGamer(){
        $this->mesSessions->joueur=0;
        $data['connecte']=$this->mesSessions->joueur;
        echo view('Header_view.php', $data);
        echo view('NewGamer_view',$data);
        echo view('Footer_view.php');
    }


    public function Enregistrement(){
        $participants_model = new \App\Models\ParticipantsModel();
        //on verifie que le jouer n'existe pas déjà
        if($participants_model->recupProfil($_POST['email']) != null){
            //echo 'il existe déjà !';
            $this->mesSessions->erreur = '<p class="erreur-file"><strong>Cet utilisateur existe déjà ! Veuillez changer l\'adresse mail.</strong></p>' ;
            return redirect()->to(  base_url().'/Gamer/NewGamer');
        }

        $this->mesSessions->joueur=0;
        $data['connecte']=$this->mesSessions->joueur;
        $image= $this->request->getFile('photo');
        //var_dump($image);
        $nom_image= date("Ymd-H-i-s").$image->getName();
        if ($image->getMimeType() != 'image/jpeg' && $image->getMimeType() !='image/png'){

            $this->mesSessions->erreur='<p class="erreur-file"><strong>Veuillez sélectionner un type de fichier valide !</strong></p><br />';
            return redirect()->to(  base_url().'/Gamer/NewGamer');

        }else{
            $image->move( "./assets/photos/gamers/", $nom_image );
            $mdp_crypt= password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $reponse= $participants_model->enregistrer($_POST['email'], $_POST['nom'], $_POST['prenom'],$_POST['pseudo'],$mdp_crypt, $nom_image);

            ///ENVOI DE MAIL
            $email=$_POST['email'];
            $pseudo=$_POST['pseudo'];
            $destinataire=$email;
            $subject='Adventroyes - Confirmation d\'inscription';
            $headers='From: raphael.postal@etudiant.univ-reims.fr';
            $message='Félicitations '.$_POST['pseudo'].', tu t\'es bien inscrit(e) ! Commence une nouvelle partie dès maintenant !
        - Raphaël Postal, administrateur pour Adventroyes ';
            mail($destinataire, $subject, $message, $headers);
            ///
            return redirect()->to(  base_url().'/Gamer');
        }


    }



    public function Verification(){

	    //******** secu pour le mode dev
        if(!isset($_POST['useremail'])||!isset($_POST['pass'])) return;
        //************

	    //on se connecte au modèle

        $participants_model = new \App\Models\ParticipantsModel();
        $resultat=$participants_model->verif($_POST['useremail']);
        //$reponse = count($participants_model->verif($_POST['useremail']));//on verifie qu'il est bien dans la bdd
        $this->mesSessions->resultat=$resultat;


        if($resultat != null){//le mail a été trouvé
            //
            //$num=0;
            //$this->mesSessions->mailabloque=$_POST['useremail'];
            //$this->mesSessions->oldmailabloque='';

            if (password_verify($_POST['pass'], $resultat[0]['gamer_pass'])) {
                $num=0;
                $this->mesSessions->num=$num;
                $this->mesSessions->joueur = 1;
                $this->mesSessions->username = $_POST['useremail'];//on stocke le useremail
                //var_dump($this->mesSessions->username);

                return redirect()->to(base_url() . '/Gamer/AccueilGamer');
            } else {//pas le bon mdp

                /*$num=$this->mesSessions->num;

                if($_POST['useremail']==$this->mesSessions->oldmailabloque){
                    $num++;
                    $this->mesSessions->num=$num;
                    $this->mesSessions->oldmailabloque=$_POST['useremail'];
                }else{
                    $num=0;
                    $this->mesSessions->num=$num;
                }*/




                return redirect()->to(base_url() . '/Gamer');

            }

        }else{//le mail n'a pas été trouvé

            return redirect()->to(base_url() . '/Gamer');

        }

    }


    public function AccueilGamer(){
        if($this->mesSessions->joueur == 0){
            return redirect()->to(base_url().'/Gamer');
        }else{
            $participants_model = new \App\Models\ParticipantsModel();
            $data['profil']= $participants_model->recupProfil($this->mesSessions->username);// on met les infos recup dans un tableau data;
            $data['connecte']=$this->mesSessions->joueur;
            //variables de session
            //var_dump($data);
            //var_dump($this->mesSessions->username);

            $this->mesSessions->pseudo=$data['profil'][0]['gamer_pseudo'];
            $this->mesSessions->nom=$data['profil'][0]['gamer_nom'];
            $this->mesSessions->prenom=$data['profil'][0]['gamer_prenom'];
            $this->mesSessions->email=$data['profil'][0]['gamer_email'];
            $this->mesSessions->enigme_en_cours=$data['profil'][0]['gamer_enigme_en_cours'];
            $this->mesSessions->photo=$data['profil'][0]['gamer_photo'];
            //

            $id_gamer=$data['profil'][0]['gamer_id'];
            $infos_parties=$participants_model->RecupAllParties($id_gamer);//on recupère les parties faites par le joueur
            $this->mesSessions->tab_parties=$infos_parties;

            echo view('HeaderGamer_view', $data);

            echo view('GamerProfil_view', $data);


            echo view('Footer_view');
        }

    }

    //POUR LE PROFIL

    public function ModifProfil(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($this->mesSessions->username);

        echo view('GamerModifProfil_view', $data);

    }

    public function TelechargementNouvellePhoto(){
        if($this->mesSessions->joueur == 0) return redirect()->to(base_url().'/Gamer');

        $image= $this->request->getFile('fichierphoto');

        $nom_image= date("Ymd-H-i-s").$image->getName();
        if ($image->getMimeType() != 'image/jpeg' && $image->getMimeType() !='image/png'){

            //echo "erreur";
            return;
        }
        echo $nom_image;
        $image->move( "./assets/photos/gamers/", $nom_image );


    }

    public function VerificationModifs(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');
        //******** secu pour le mode dev
        if(!isset($_POST['email'])||!isset($_POST['pass']))return;
        //************

        //on se connecte au modèle

        $participants_model = new \App\Models\ParticipantsModel();

        $resultat=$participants_model->verif($this->mesSessions->username);
        $reponse = count($participants_model->verif($this->mesSessions->username));//on verifie qu'il est bien dans la bdd



        if(password_verify($_POST['pass'], $resultat[0]['gamer_pass'])&&($_POST['pass']!=='')){
            $data['profil']= $participants_model->recupProfil($this->mesSessions->username);

            $new_prenom=$_POST['prenom'];
            $new_nom=$_POST['nom'];
            $new_pseudo=$_POST['pseudo'];
            $new_email=$_POST['email'];

            $image= $this->request->getFile('photo');
            //var_dump($image);


            $nom_image= date("Ymd-H-i-s").$image->getName();
            if ($image->getMimeType() != 'image/jpeg' && $image->getMimeType() !='image/png'){

                //return redirect()->to(  base_url().'/Gamer/ModifProfil');
                $nom_image=$data['profil'][0]['gamer_photo'];
                $this->mesSessions->new_photo=$nom_image;

                $this->mesSessions->new_prenom=$new_prenom;
                $this->mesSessions->new_nom=$new_nom;
                $this->mesSessions->new_pseudo=$new_pseudo;
                $this->mesSessions->new_email=$new_email;
                return redirect()->to(  base_url().'/Gamer/Sauvegarde');

            }else{
                $image->move( "./assets/photos/gamers/", $nom_image );
                /////BOUT DE CODE TEST
                //veririfier que l'email est nouveau
                if($new_email!== $this->mesSessions->email){//si il a modif son email

                    if($participants_model->recupProfil($new_email) != null){//il est déjà dedans!
                        return redirect()->to(base_url().'/Gamer/ModifProfil');
                    }else{
                        $new_email=$_POST['email'];
                        $this->mesSessions->new_prenom=$new_prenom;
                        $this->mesSessions->new_nom=$new_nom;
                        $this->mesSessions->new_pseudo=$new_pseudo;
                        $this->mesSessions->new_email=$new_email;
                        $this->mesSessions->new_photo=$nom_image;
                        return redirect()->to(  base_url().'/Gamer/Sauvegarde');
                    }

                }else{
                    //variables de session:
                    $this->mesSessions->new_prenom=$new_prenom;
                    $this->mesSessions->new_nom=$new_nom;
                    $this->mesSessions->new_pseudo=$new_pseudo;
                    $this->mesSessions->new_email=$this->mesSessions->email;
                    $this->mesSessions->new_photo=$nom_image;


                    return redirect()->to(  base_url().'/Gamer/Sauvegarde');
                }
                ///////FIN TEST
            }




        }else{
            return redirect()->to(base_url().'/Gamer/ModifProfil');
        }
    }


    public function Sauvegarde(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');
        $participants_model = new \App\Models\ParticipantsModel();
        //var_dump($this->mesSessions->username);
        $data['profil']=$participants_model->recupProfil($this->mesSessions->username);
        $id_gamer=$data['profil'][0]['gamer_id'];

        $new_prenom=$this->mesSessions->new_prenom;
        $new_nom=$this->mesSessions->new_nom;
        $new_pseudo=$this->mesSessions->new_pseudo;
        $new_email=$this->mesSessions->new_email;
        $new_photo=$this->mesSessions->new_photo;

        if($new_email!=$this->mesSessions->email){//LE MAIL A CHANGé

            //ENVOI DE MAIL
            $email=$this->mesSessions->email;


            $destinataire=$email;
            $subject='Adventroyes - Modifications de vos informations personnelles';
            $headers='From: raphael.postal@etudiant.univ-reims.fr';
            $message='Bonjour '.$new_pseudo.', tes infos personnelles ont été modifiées. Ton adresse mail a été modifiée en '.$new_email.'. 
               Si tu n\'est pas l\'auteur de ces modifications, contacte moi au plus vite.
        - Raphaël Postal, administrateur pour Adventroyes ';
            mail($destinataire, $subject, $message, $headers);
            ////
            ///
           $participants_model->SaveModifs($new_nom, $new_prenom, $new_email, $new_pseudo, $id_gamer, $new_photo);
            return redirect()->to(base_url().'/Gamer');


        }else{
            $participants_model->SaveModifs($new_nom, $new_prenom, $new_email, $new_pseudo, $id_gamer, $new_photo);
            //ENVOI DE MAIL
            $email=$new_email;


            $destinataire=$email;
            $subject='Adventroyes - Modifications de vos informations personnelles';
            $headers='From: raphael.postal@etudiant.univ-reims.fr';
            $message='Bonjour '.$new_pseudo.', tes informations personnelles ont été modifiées. Si tu n\'es pas l\'auteur de ces modifications, contacte-moi au plus vite.
        - Raphaël Postal, administrateur pour Adventroyes ';
            mail($destinataire, $subject, $message, $headers);
            ////
            ///
            return redirect()->to(base_url().'/Gamer/AccueilGamer');
        }



        //!!! GERER ENVOI DE MAIL à $new_email!!!!!!!
    }

    public function ChangeMDP(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');
	    echo view('HeaderGamer_view');
        echo view('GamerChangeMDP_view');
	    echo view ('Footer_view');
    }


    public function VerificationModifMDP(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']=$participants_model->recupProfil($this->mesSessions->username);
        //$reponse = count($participants_model->verif($this->mesSessions->username));//on verifie qu'il est bien dans la bdd

        if(password_verify($_POST['pass'], $data['profil'][0]['gamer_pass'])&&($_POST['new_pass']!=='')){
            $pass=$_POST['pass'];
            $new_pass=$_POST['new_pass'];

            /////BOUT DE CODE TEST
            //veririfier que l'email est nouveau
            if($new_pass!== $pass){//si il a modif son mot de passe

                    $this->mesSessions->new_pass=password_hash($new_pass, PASSWORD_DEFAULT);;
                    return redirect()->to(  base_url().'/Gamer/SauvegardeMDP');


            }else{

                return redirect()->to(  base_url().'/Gamer/AccueilGamer');
            }
            ///////FIN TEST


        }else{
            return redirect()->to(base_url().'/Gamer/ModifProfil');
        }
    }

    public function SauvegardeMDP(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');
        $participants_model = new \App\Models\ParticipantsModel();
        $email=$this->mesSessions->email;
        $mdp_crypt=$this->mesSessions->new_pass;
        //ENVOI DE MAIL

        $destinataire=$email;
        $subject='Adventroyes - Modifications de votre mot de passe';
        $headers='From: raphael.postal@etudiant.univ-reims.fr';
        $message='Bonjour '.$this->mesSessions->pseudo.', ton mot de passe a été modifié. Si tu n\'es pas l\'auteur de ces modifications, contacte-moi au plus vite.
        - Raphaël Postal, administrateur pour Adventroyes ';
        mail($destinataire, $subject, $message, $headers);

        ///
        $participants_model->NouveauMDP($email, $mdp_crypt);
        return redirect()->to(  base_url().'/Gamer');
    }

    public function Oubli(){

	    echo view ('Header_view');
	    echo view ('GamerRecupMDP_view');
        echo view ('Footer_view');
    }

    public function RecupMDP(){
        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($_POST['email']);
        if(!isset($data['profil'][0])){
            $this->mesSessions->message = '<p class="erreur"><strong>Cet utilisateur n\'est pas inscrit !</strong></p>' ;
            return redirect()->to(base_url().'/Gamer/Oubli');
        }

        $email=$_POST['email'];
        $new_mdp=str_shuffle($data['profil'][0]['gamer_email']);
        //ENVOI DE MAIL
        $destinataire=$email;
        $subject='Adventroyes - Oubli de mot de passe';
        $headers='From: raphael.postal@etudiant.univ-reims.fr';
        $message='Bonjour '.$data['profil'][0]['gamer_pseudo'].', suite à une demande de ta part, un mot de passe provisoire a été attribué à ton compte. Le voici: '.$new_mdp.
            ' . Utilise-le pour te connecter la prochaine fois, après quoi nous t\'invitons à en mettre un nouveau depuis les paramètres de ton profil.
        - Raphaël Postal, administrateur pour Adventroyes ';
        mail($destinataire, $subject, $message, $headers);
        //////
        $mdp_crypt= password_hash($new_mdp, PASSWORD_DEFAULT);
        $participants_model->NouveauMDP($email, $mdp_crypt);
        $this->mesSessions->message = '<p class="erreur"><strong>Un mail vient d\'être envoyé à '.$email.'</strong></p>' ;
        return redirect()->to(base_url().'/Gamer/Oubli');
    }


    //POUR LES PARTIES

    public function CommencePartie(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');
        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($this->mesSessions->username);
        echo view ('HeaderGamer_view', $data);
        echo view ('NouvellePartie_view', $data);
        echo view ('Footer_view');
    }

    public function ValideCode(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        if($_POST['code']=='AAA'){
            $participants_model = new \App\Models\ParticipantsModel();
            //$data['profil']= $participants_model->recupProfil($this->mesSessions->username);

            $participants_model->remiseAzero($this->mesSessions->username);

            //$participants_model->CreerPartie(...);
            return redirect()->to(base_url().'/Gamer/Jouer');

        }else{
            $this->mesSessions->erreur = '<p class="erreur"><strong>Le code est invalide !</strong></p>' ;
            return redirect()->to(base_url().'/Gamer/CommencePartie');
        }

    }

    public function Debut(){// Cette fonction est appelée sur ETAPE0
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($this->mesSessions->username);
        $id_gamer=$data['profil'][0]['gamer_id'];
        $date_debut=date('Y-m-d');
        $etape_actuelle=1;
        $participants_model->DebutEtape($id_gamer, $date_debut, $etape_actuelle);

        return redirect()->to(base_url().'/Gamer/Jouer');
    }


    public function Jouer(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil'] = $participants_model->recupProfil($this->mesSessions->username);
        //var_dump($data['profil'][0]['gamer_enigme_en_cours']);

        if($data['profil'][0]['gamer_enigme_en_cours']==12){
            return redirect()->to(base_url().'/Gamer/JeuFini');
        }

        if($data['profil'][0]['gamer_etat']==1){
            $num_enigme = $data['profil'][0]['gamer_enigme_en_cours'];
            //TEST TEMPS
            $tps1=time();
            $this->mesSessions->tps1= $tps1;
            //var_dump($this->mesSessions->tps1);
            //FIN TEST
            echo view('headerEtape_view');
            echo view('Etape' . $num_enigme . '_view', $data);

        }else{
            echo view('GamerLose_view', $data);
        }


    }


    public function ValideReponse(){

        if($this->mesSessions->joueur == 0){
            return redirect()->to(base_url().'/Gamer');
        }else{

            $participants_model = new \App\Models\ParticipantsModel();
            $data['profil']= $participants_model->recupProfil($this->mesSessions->username);// on met les infos recup dans un tableau data
            $data['connecte']=$this->mesSessions->joueur;

            $reponse= $_POST['soluce'];

            $bonne_rep= $data['profil'][0]['enigme_mot_magique'];

            $id_gamer=$data['profil'][0]['gamer_id'];
            $id_enigme=$data['profil'][0]['enigme_ordre'];

            if($reponse == $bonne_rep){//le joueur répond bien

                $participants_model->EnigmeResolue($id_gamer, $id_enigme);

                //CODE CONCERNANT LA PARTIE
                $data['partie']=$participants_model->RecupPartie($id_gamer);
                $id_partie=$data['partie'][0]['MAX(partie_id)'];
                //var_dump($id_partie);
                $etape_actuelle=$data['profil'][0]['gamer_enigme_en_cours']+=1;

                $tps2=time();
                $tps1=$this->mesSessions->tps1;
                $temps_enigme=$tps2-$tps1;
                $this->mesSessions->temps_enigme=$temps_enigme;
               // echo $temps_enigme.'s';
                $data['temps']=$participants_model->RecupTempsTotal($id_partie);
                $ancien_tps_tot=$data['temps'][0]['temps_total'];
                $temps_total=$ancien_tps_tot+=$temps_enigme;
                //echo' temps depuis le debut du jeu:'.$temps_total;


                $participants_model->MAJPartie($id_partie, $etape_actuelle, $temps_total);
                /////


                echo view('EtapeWin_view', $data);


            }else{ //le joueur se trompe

                $participants_model->EnigmeErronee($id_gamer, $id_enigme);
                $this->mesSessions->erreur='<p style="color: #DD4814"><strong>Vous n\'avez pas répondu correctement ...
                                            Retentez votre chance !</strong></p><br />';

                //CODE CONCERNANT LA PARTIE
                $data['partie']=$participants_model->RecupPartie($id_gamer);
                $id_partie=$data['partie'][0]['MAX(partie_id)'];
                //var_dump($id_partie);
                $etape_actuelle=$data['profil'][0]['gamer_enigme_en_cours']+=1;

                $tps2=time();
                $tps1=$this->mesSessions->tps1;
                $temps_enigme=$tps2-$tps1;

                echo $temps_enigme.'s';
                $data['temps']=$participants_model->RecupTempsTotal($id_partie);
                $ancien_tps_tot=$data['temps'][0]['temps_total'];
                $temps_total=$ancien_tps_tot+=$temps_enigme;
                echo' temps depuis le debut du jeu:'.$temps_total;

                $participants_model->MAJPartie($id_partie, $etape_actuelle, $temps_total);
                //////

                if($data['profil'][0]['nb_essais'] >= 1){
                    $this->mesSessions->erreur='<p style="color: #DD4814"><strong>Vous n\'avez pas répondu correctement ...
                                            C\'est votre dernière chance !</strong></p><br />';

                }

                if($data['profil'][0]['nb_essais'] == 2){
                    $participants_model->BlocageJoueur($id_gamer);
                    ///ENVOI DE MAIL
                    $destinataire=$this->mesSessions->email;
                    $subject='Adventroyes - Vous ne pouvez plus jouer';
                    $headers='From: raphael.postal@etudiant.univ-reims.fr';
                    $message='Bonjour '.$this->mesSessions->pseudo.'. Tu as échoué à ta quête, tu ne peux plus continuer ta partie. Je viendrai te débloquer dans les heures qui viennent.
        - Raphaël Postal, administrateur pour Adventroyes ';
                    mail($destinataire, $subject, $message, $headers);

                    ///

                }
                return redirect()->to(base_url().'/Gamer/Jouer');


            }

            
        }


    }

    public function Victoire(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($this->mesSessions->username);// on met les infos recup dans un tableau data
        $data['connecte']=$this->mesSessions->joueur;
        $id_gamer=$data['profil'][0]['gamer_id'];
        $id_enigme=$data['profil'][0]['enigme_ordre'];



        if($data['profil'][0]['gamer_enigme_en_cours']==11){
            $participants_model->EnigmeResolue($id_gamer, $id_enigme);//il passe à l'étape 12 dans la bdd, c'est a dire la victoire

            //Mise à jour de sa partie
            $data['partie']=$participants_model->RecupPartie($id_gamer);
            $id_partie=$data['partie'][0]['MAX(partie_id)'];
            //var_dump($id_partie);
            $etape_actuelle=$data['profil'][0]['gamer_enigme_en_cours']+=1;

            $tps2=time();
            $tps1=$this->mesSessions->tps1;
            $temps_enigme=$tps2-$tps1;

            //echo $temps_enigme.'s';
            $data['temps']=$participants_model->RecupTempsTotal($id_partie);
            $ancien_tps_tot=$data['temps'][0]['temps_total'];
            $temps_total=$ancien_tps_tot+=$temps_enigme;
           // echo' temps depuis le debut du jeu:'.$temps_total;

            //CALCUL DU SCORE
            $nb_essais_tot=$data['profil'][0]['nb_essais_total'];
            $score=4000-($temps_total+10*$nb_essais_tot);
             if($score<0){
                 $score=100;
             }






            //MISE A JOUR DE FIN DE PARTIE
            $date_fin=date('Y-m-d');
            $participants_model->MAJPartieFin($id_partie, $etape_actuelle,$temps_total ,$date_fin,$score, 0 );

            //RECUPERATION DU CALSSEMENT DU JOUEUR
            $classement_general=$participants_model->RecupClassementGeneral();
            /*$this->mesSessions->tab_classement_general=$classement_general;*/

            /*var_dump($classement_general);*/
            /*var_dump($id_partie);*/
            /*$mon_classement=array_search($id_partie, $classement_general);*/
            $nouveau_tab=array();
            foreach ($classement_general as $key => $value){
                $nouveau_tab[$key]=$value['partie_id'];
            }
            $mon_classement= array_search($id_partie, $nouveau_tab);
            $mon_classement++;

            //on refait la maj de la partie
            $participants_model->MAJPartieFin($id_partie, $etape_actuelle,$temps_total ,$date_fin,$score, $mon_classement );
            /*$this->mesSessions->mon_classement=$mon_classement;*/
            echo view('GamerWin_view', $data);

        }else{
            return redirect()->to(base_url().'/Gamer/Jouer');
        }

    }

    public function JeuFini(){
	    echo view ('JeuFini_view');
    }

    //STATS
    public function Stats(){
        if($this->mesSessions->joueur == 0)return redirect()->to(base_url().'/Gamer');

        $participants_model = new \App\Models\ParticipantsModel();
        $data['profil']= $participants_model->recupProfil($this->mesSessions->username);
        $id_gamer=$data['profil'][0]['gamer_id'];
        $data['partie'][0]['partie_id']=$participants_model->RecupPartie($id_gamer);
        $id_partie=$data['partie'][0]['partie_id'][0]['MAX(partie_id)'];

        $derniere_partie= $participants_model->DernierePartie($id_partie);
        if(isset($derniere_partie[0])){
            foreach ($derniere_partie[0] as $key => $value){
                $this->mesSessions->$key=$derniere_partie[0][$key];
                //fonctionne, créé toutes mes variables de session
        }

        }



        $infos_parties=$participants_model->RecupAllParties($id_gamer);//on recupère les parties faites par le joueur
        $this->mesSessions->tab_parties=$infos_parties;

        $classement=$participants_model->RecupTop10();
        $this->mesSessions->tab_classement=$classement;

        echo view('GamerStats_view', $data);


    }

    //fonction peut être inutile ?

    public function Recommencer(){

    $participants_model = new \App\Models\ParticipantsModel();
    $data['profil']= $participants_model->recupProfilSeul($this->mesSessions->username);
    $id_gamer=$data['profil'][0]['gamer_id'];
    $participants_model->remiseAzero($id_gamer);
    return redirect()->to(base_url().'/Gamer/AccueilGamer');
}

}
