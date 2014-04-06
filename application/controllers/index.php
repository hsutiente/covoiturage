<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('index_model','indexManager');
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

        $this->accueil();
    }

    public function accueil(){

        $verifSession = $this->session->userdata('pseudoConnecte');
        $resultat = $this->adminManager->getAdmin($verifSession);
        $admin = 0;
        foreach($resultat as $ligne){
            $admin = $ligne ->admin;
        }

        $view_data = array();
        $view_data['admin'] = $admin;

        $resultat = $this->indexManager->getDernierTrajet();
        $cpt = 0;
        $listeDate = array();
        $listeId = array();
        $listeVille = array();
        foreach($resultat as $ligne){
            $date_fr = explode('-',$ligne->dateDepart);
            $date = $date_fr[2]."-".$date_fr[1]."-".$date_fr[0];
            $listeVille[] = $ligne->villeDepart;
            $listeId[] = $ligne->id;
            $listeDate[] = $date;
            $cpt++;

        }
        for($i = 0 ; $i<$cpt ; $i++){
            $j = $i+1;
            if(isset($listeDate[$i]))$view_data['date'.$j] = $listeDate[$i];
            if(isset($listeVille[$i]))$view_data['ville'.$j] = $listeVille[$i];
            if(isset($listeId[$i]))$view_data['id'.$j] = $listeId[$i];
        }
        $view_data['cpt'] = $cpt;
        $this->load_view('index',$view_data);
    }

}
