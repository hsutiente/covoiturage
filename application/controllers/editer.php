<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editer extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('editer_model','editerManager');
        $this->editer();
    }

    public function editer()
    {
        $view_data = array();
        $pseudo = $this->session->userdata('pseudoConnecte');
        $resultat = $this->editerManager->getMail();
        foreach($resultat as $ligne){
            if($ligne->login == $pseudo){
                $view_data['email'] = $ligne->email;
            }
        }
        $this->load_view('editerProfil',$view_data);
    }
}
