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
        $this->publier();
    }

    public function publier(){
        $verifSession = $this->session->userdata('pseudoConnecte');

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

                $fumeur = $this->input->post('fumeur');
                $femme = $this->input->post('femme');
                $homme = $this->input->post('homme');
                $discussion = $this->input->post('discussion');
                $musique =  $this->input->post('musique');

                if($fumeur == "on") $fumeur = "oui";
                else $fumeur = "non";
                if($homme == "on") $homme = "oui";
                else $homme = "non";
                if($femme == "on") $femme = "oui";
                else $femme = "non";
                if($discussion == "on") $discussion = "oui";
                else $discussion = "non";
                if($musique == "on") $musique =  "oui";
                else $musique = "non";

                $this->publierManager->ajouterVille($villeDepart);
                $this->publierManager->ajouterTrajet($villeDepart,$date,$idconducteur);

                $resultat = $this->publierManager->getLastId();
                foreach($resultat as $ligne){
                    $idTrajet = $ligne->id;
                }


                $this->publierManager->ajouterPreference($idTrajet,$fumeur,$homme,$femme,$discussion,$musique);
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