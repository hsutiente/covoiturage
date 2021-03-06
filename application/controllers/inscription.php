<?php

class Inscription extends CI_Controller
{
    public function __construct(){
        parent::__construct();

    }

    public function index(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('inscription_model','inscriptionManager');
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
        $this->inscription();
    }

    public function inscription()
    {
        $view_data = array();
        //	Chargement de la bibliothèque
        $this->load->library('form_validation');
        // Vérifier le formulaire
        $this->form_validation->set_rules('login', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean|');
        $this->form_validation->set_rules('pass',    '"Mot de passe"',       'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('email',    '"Email"',       'required|valid_email');
        $this->form_validation->set_rules('fonction',    '"Fonction"',       'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
        $this->form_validation->set_message('valid_email', "l'adresse email est invalide");
        $this->form_validation->set_message('required', "Vous n'avez pas entré d'adresse mail");


        if($this->form_validation->run())
        {
            //Le formulaire est valide
            //Vérifier si il n'y a pas déjà un utilisateur avec ce login
            $valide = true;
            $resultat = $this->inscriptionManager->getLogin();

            foreach($resultat as $ligne){
                if((strtolower($ligne->login)) == (strtolower($this->input->post('login')))){
                    $valide = false;
                }
            }
            if($valide){
                $this->inscriptionManager->inscrire(
                    $this->input->post('login'),
                    $this->input->post('pass'),
                    $this->input->post('email'),
                    $this->input->post('fonction'));
                $emailInscrit = $this->input->post('email');
                $sujet = "Confirmation de votre inscription à Covoiturage IUT-Lens";
                $message = "Bonjour, \n\n Nous vous confirmons votre inscription à Covoiturage IUT-Lens.\n\n Vous avez utilisé le login suivant :  ".$this->input->post('login').
                    "\n\n Bonne visite sur notre site.";
                mail($emailInscrit,$sujet,$message);
                $this->load_view('inscriptionValidee',$view_data);
            }
            else{
                $view_data['pseudoExiste'] = "Le pseudo existe déjà";
                $this->load_view('inscription',$view_data);
            }
        }
        else
        {
            //	Le formulaire est invalide ou vide
            $this->load_view('inscription',$view_data);
        }
    }
}