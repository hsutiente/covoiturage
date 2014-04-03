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
        $view_data['trajetdeuxdate'] = $view_data[3];
        $view_data['trajetdeuxville'] = $view_data[4];
        $view_data['trajetdeuxid'] = $view_data[5];
        $view_data['trajettroisdate'] = $view_data[6];
        $view_data['trajettroisville'] = $view_data[7];
        $view_data['trajettroisid'] = $view_data[8];
        $view_data['trajetquatredate'] = $view_data[8];
        $view_data['trajetquatreville'] = $view_data[10];
        $view_data['trajetquatreid'] = $view_data[11];
        $view_data['trajetcinqdate'] = $view_data[12];
        $view_data['trajetcinqville'] = $view_data[13];
        $view_data['trajetcinqid'] = $view_data[14];
        $view_data['trajetsixdate'] = $view_data[15];
        $view_data['trajetsixville'] = $view_data[16];
        $view_data['trajetsixid'] = $view_data[17];
        $view_data['trajetseptdate'] = $view_data[18];
        $view_data['trajetseptville'] = $view_data[19];
        $view_data['trajetseptid'] = $view_data[20];
        $view_data['trajethuitdate'] = $view_data[21];
        $view_data['trajethuitville'] = $view_data[22];
        $view_data['trajethuitid'] = $view_data[23];
        $view_data['trajetneufdate'] = $view_data[24];
        $view_data['trajetneufville'] = $view_data[25];
        $view_data['trajetneufid'] = $view_data[26];
        $view_data['trajetdixdate'] = $view_data[27];
        $view_data['trajetdixville'] = $view_data[28];
        $view_data['trajetdixid'] = $view_data[29];



        $this->load_view('index',$view_data);
    }

}
