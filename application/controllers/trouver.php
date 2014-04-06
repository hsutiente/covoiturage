<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trouver extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('trouver_model','trouverManager');
        $this->load->model('admin_model','adminManager');
        $verifSession = $this->session->userdata('pseudoConnecte');
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
        $this->trouver();
    }

    public function trouver(){
        $view_data=array();
        $this->load_view('trouver',$view_data);
    }
}
