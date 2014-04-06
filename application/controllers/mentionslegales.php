<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentionslegales extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('index_model','indexManager');
        $this->load->model('admin_model','adminManager');
        $verifSession = $this->session->userdata('pseudoConnecte');
        $resultat = $this->adminManager->getBanni($verifSession);
        $verifSession = $this->session->userdata('pseudoConnecte');
        if(strlen($verifSession)>0){
            $resultat = $this->adminManager->getBanni($verifSession);
            $banni = 0;
            foreach($resultat as $ligne){
                $banni = $ligne->banni;
            }
            if($banni == 1){
                $this->load_view("banni");
                return 0;
            }
        }
        $this->mentionslegales();
    }

    public function mentionslegales(){
        $view_data = array();
        $this->load_view('mentions',$view_data);
    }
}
