<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Participants extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->mesSessions = session();
    }



    public function index(){


    $participants_model = new \App\Models\ParticipantsModel();
		$data['les_participants'] = $participants_model->findAll();
        $data['connecte']=$this->mesSessions->joueur;
		echo view('Entete_view', $data);
		echo view('Participants_view',$data);
		echo view('Pied_view');
	}

}