<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('publier_model','publierManager');
        $this->publier();
    }

    public function publier(){
        $verifSession = $this->session->userdata('pseudoConnecte');
        echo $verifSession;

        if($verifSession){
            $view_data = array();
            $this->load->library('form_validation');

            $resultat = $this->publierManager->getId();
            foreach($resultat as $ligne){
                $idconducteur = $ligne->id;
            }
                $this->form_validation->set_rules('villeDepart', '"Ville de départ"', 'trim|required|encode_php_tags|xss_clean');
            $this->form_validation->set_rules('date', 'date', 'required');


            if($this->form_validation->run()){
                $villeDepart = $this->input->post('villeDepart');
                $date_us = $this->input->post('date');
                $date_fr = explode('/',$date_us);
                $date = $date_fr[2]."-".$date_fr[1]."-".$date_fr[0];
                $this->publierManager->ajouterVille($villeDepart);
                $this->publierManager->ajouterTrajet($villeDepart,$date,$idconducteur);
                $this->load_view('ajouter',$view_data);
            }
            else{
                $this->load_view('ajouter',$view_data);
            }
        }
        else{
            $this->load_view('vousinscrire');
            $this->output->set_header('refresh:3; url='.site_url($uri = 'index'));

        }
    }
}
