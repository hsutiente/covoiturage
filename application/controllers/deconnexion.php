<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deconnexion extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('admin_model','adminManager');
        $verifSession = $this->session->userdata('pseudoConnecte');
        if(strlen($verifSession)>0){
            $resultat = $this->adminManager->getBanni($verifSession);
            $banni = 0;
            foreach($resultat as $ligne){

            }
            if($banni == 1){
                $this->load_view("banni");
                return 0;
            }
        }
        $this->deconnexion();
    }

    public function deconnexion()
    {
        $view_data = array();
        $verifSession = $this->session->userdata('pseudoConnecte');
        //Si l'utilisateur est connecté les données supplémentaires de la session seront supprimées
        if($verifSession){
            $this->session->sess_destroy();
            $this->load_view('deconnexionReussie',$view_data);
            $this->output->set_header('refresh:3; url='.'index');
        }
        else{
            redirect('connexion', 'refresh');
        }
    }
}
