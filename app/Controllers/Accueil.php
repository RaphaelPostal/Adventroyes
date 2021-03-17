<?php
namespace App\Controllers;


use CodeIgniter\Controller;

class Accueil extends Controller
{

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		$this->mesSessions = session();
	}

	public function index(){
	    $data['connecte']=$this->mesSessions->joueur;
	    if($data['connecte']==1){
            echo view('HeaderConnecte_view', $data);
            echo view('Accueil_view');
            echo view('Footer_view');
        }else{
            echo view('Header_view', $data);
            echo view('Accueil_view');
            echo view('Footer_view');
        }

    }

    public function Boutique(){

        $data['connecte']=$this->mesSessions->joueur;
        if($data['connecte']==1){
            echo view('HeaderConnecte_view', $data);
            echo view('Boutique_view');
            echo view('Footer_view');
        }else{
            echo view('Header_view', $data);
            echo view('Boutique_view');
            echo view('Footer_view');
        }

    }

}
