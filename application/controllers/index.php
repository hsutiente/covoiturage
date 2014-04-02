<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('index_model','indexManager');
        $this->accueil();
    }

    public function accueil(){
        $view_data = array();
        $resultat = $this->indexManager->getDernierTrajet();
        $i=0;
        foreach($resultat as $ligne){
            if($i<30){
                $date_fr = explode('-',$ligne->dateDepart);
                $date = $date_fr[2]."-".$date_fr[1]."-".$date_fr[0];
                $view_data[$i] = $date;
                $view_data[$i+1] = $ligne->villeDepart;
                $view_data[$i+2] = $ligne->id;
                $i = $i + 3;
            }
        }
        $view_data['trajetundate'] = $view_data[0];
        $view_data['trajetunville'] = $view_data[1];
        $view_data['trajetunid'] = $view_data[2];
        $this->load_view('index',$view_data);
    }

}
