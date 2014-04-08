<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('connexion_model','connexionManager');
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
        $this->connexion();
    }

    public function connexion()
    {
        $view_data = array();
        $rememberme = $this->input->post('rememberme');
        $resultat = $this->connexionManager->getInfoConnexion();
        $sessionActivee = $this->session->userdata('pseudoConnecte');
        if(!(isset($sessionActivee)) OR strlen($sessionActivee) == null) {
            foreach($resultat as $ligne){
                if(sha1($this->input->post('pass')) == $ligne->password){
                    $this->session->set_userdata('pseudoConnecte',$this->input->post('login'));
                    $view_data['pseudoConnecte'] = $this->session->userdata('pseudoConnecte');
                    if(!isset($rememberme) OR strlen($rememberme)==0) {
                        $this->session->set_userdata('test','test');
                        $this->session->sess_expire_on_close = TRUE;
                        $this->session->sess_time_to_update = 15;
                        $this->session->sess_update();
                    }
                    redirect('index', 'refresh');
                }
            }
            $this->load_view('connexion',$view_data);
        }
        else{
            redirect('index', 'refresh');
        }
    }

    public function passoublie(){

    }
}
