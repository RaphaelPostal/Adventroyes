<?php
namespace App\Controllers;



use CodeIgniter\Controller;
use App\Libraries\GroceryCrud;

class Gestion extends Controller
{


	protected $helpers = [];


	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->mesSessions = \Config\Services::session();


	}

	public function index(){
	    $this->mesSessions->admin=0;
        $data['connecte']=$this->mesSessions->joueur;
	    echo view('Header_view.php', $data);
	    echo view('LoginAdmin_view');
	    echo view('Footer_view.php');
}

public function AccueilAdmin(){
	    if($this->mesSessions->admin == 0){
            return redirect()->to(base_url().'/Gestion');
        }else{
            $data['connecte']=$this->mesSessions->joueur;

	        echo view('AccueilAdmin_view');

        }

}

public function Verification(){
	    if( $_POST['username'] == "admin" && $_POST['pass']=="password@admin"){
	        $this->mesSessions->admin=1;
	        return redirect()->to(  base_url().'/Gestion/AccueilAdmin');
        }else{
            return redirect()->to(base_url().'/Gestion');
        }
}


    public function JoueursAdmin(){
        if($this->mesSessions->admin == 0){
            return redirect()->to(base_url().'/Gestion');
        }else{

            $participants_model = new \App\Models\ParticipantsModel();
            $data['profil']= $participants_model->recupProfilSeul($this->mesSessions->username);
            $crud = new GroceryCrud();

            $crud->setTheme('datatables');


            $crud->displayAs('gamer_nom', 'Nom');
            $crud->displayAs('gamer_prenom', 'Prénom');
            $crud->displayAs('gamer_email', 'E-mail');
            $crud->displayAs('gamer_etat', 'État');
            $crud->displayAs('gamer_enigme_en_cours', 'Progression');
            $crud->displayAs('gamer_photo', 'Photo');
            $crud->displayAs('gamer_pass', 'Mot de passe');
            $crud->displayAs('nb_essais', 'Nombre d\'essais');
            $crud->displayAs('nb_essais_total', 'Nombre d\'essais total');
            

            $crud->setTable('gamers');

            $crud->unsetExport(); //enlève le bouton export
            $crud->unsetPrint(); //enleve le bouton imprimer

            $crud->callbackColumn('gamer_photo', array($this, 'showImage'));


            $crud->callbackAddField('gamer_photo', function(){
                return '<input type="hidden" name="gamer_photo" id="gamer-photo"><input type="file" name="file_photo" id="file-photo"><img src="" id="avatar" width="100px" />';
            });

            $crud->callbackEditField('gamer_photo', function(){

                return '<input name="gamer_photo" id="gamer-photo"> <input type="file" name="file_photo" id="file-photo"><img src="" id="avatar" height="100px">';
            });

            $output = $crud->render();


            $data['connecte']=$this->mesSessions->joueur;

            echo view('JoueursAdmin_view', (array)$output, $data);


        }

    }


    public function EnigmesAdmin(){
        if($this->mesSessions->admin == 0){
            return redirect()->to(base_url().'/Gestion');
        }else{

            $crud = new GroceryCrud();

            $crud->setTheme('datatables');

            $crud->displayAs('enigme_titre', 'Titre de l\'énigme');
            $crud->displayAs('enigme_photo', 'Aperçu');
            $crud->displayAs('enigme_lien', 'Lien de l\'énigme');
            $crud->displayAs('enigme_etat', 'Etat');
            $crud->displayAs('enigme_texte', 'Enoncé');
            $crud->displayAs('enigme_ordre', 'Numéro de l\'énigme');
            $crud->displayAs('enigme_mot_magique', 'Solution');



            $crud->setTable('enigmes');

            $crud->unsetExport(); //enlève le bouton export
            $crud->unsetPrint(); //enleve le bouton imprimer

            $crud->callbackColumn('enigme_photo', array($this, 'showImage2'));
            $crud->callbackAddField('enigme_photo', function(){
                return '<input type="hidden" name="enigme_photo" id="enigme-photo"><input type="file" name="file_photo" id="file-photo"><img src="" id="miniature" width="100px" />';
            });
            $crud->callbackEditField('enigme_photo', function(){
                return '<input type="hidden" name="enigme_photo" id="enigme-photo"> <input type="file" name="file_photo" id="file-photo"><img src="" id="miniature" height="100px">';
            });


            $output = $crud->render();

            $data['connecte']=$this->mesSessions->joueur;

            echo view('EnigmesAdmin_view', (array)$output);
            

        }

    }

    function showImage($value){
        return "<img src='".base_url()."/assets/photos/gamers/".$value."'width=100>";
    }

    function showImage2($value){
        return "<img src='".base_url()."/assets/photos/enigmes/".$value."'width=100>";
    }

    public function Telechargement(){
        if($this->mesSessions->admin == 0) return redirect()->to(base_url().'/Gestion');

        $image= $this->request->getFile('fichierphoto');
        //pour Adventroyes, tester si c'est vide, faire un return.
        $nom_image= 'test'.date("Ymd-H-i-s").$image->getName();
        if ($image->getMimeType() != 'image/jpeg' && $image->getMimeType() !='image/png'){

           echo "erreur";
           return;
        }
            echo $nom_image;
            $image->move( "./assets/photos/enigmes/", $nom_image );



    }

    public function TelechargementJoueur(){
        if($this->mesSessions->admin == 0) return redirect()->to(base_url().'/Gestion');

        $image= $this->request->getFile('fichierphoto');

        $nom_image= 'testjoueur'.date("Ymd-H-i-s").$image->getName();
        if ($image->getMimeType() != 'image/jpeg' && $image->getMimeType() !='image/png'){

            echo "erreur";
            return;
        }
        echo $nom_image;
        $image->move( "./assets/photos/gamers/", $nom_image );



    }

}


