<?php

class Objectif extends CI_Controller
{
    public function __construct(){
        parent::__construct();

    }

    public function index(){
        parent::__construct();
        $this->load->helper(array('url','assets'));
        $this->load->model('admin_model','adminManager');
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
        $this->objectif();
    }

    public function objectif(){
        $data_view = array();
        $this->load_view('objectifs',$data_view);

    }

}