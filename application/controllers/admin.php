<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('session');
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
        $this->testAdmin();
    }

    public function testAdmin(){
        $login = $this->session->userdata('pseudoConnecte');
        $resultat = $this->adminManager->getAdmin($login);
        foreach ($resultat as $ligne){
            $admin = $ligne->admin;
        }
        if ($admin == 0){
            $this->load_view('accesRefuse');
            $this->output->set_header('refresh:3; url='.'index');
        }
        else{
            $this->admin();
        }
    }

    public function admin(){
        $view_data = array();
        $this->load->view('admin',$view_data);
    }

    public function bannirUtilisateur(){
        if ($this->uri->segment(3) === FALSE)
        {
            redirect('/admin/', 'refresh');
        }
        $this->load->model('admin_model','adminManager');
        $pseudoASupprimer = $this->uri->segment(3);
        $this->adminManager->bannirUtilisateur($pseudoASupprimer);
        redirect('/admin/', 'refresh');
    }
    public function debannirUtilisateur(){
        if ($this->uri->segment(3) === FALSE)
        {
            redirect('/admin/', 'refresh');
        }
        $this->load->model('admin_model','adminManager');
        $pseudoASupprimer = $this->uri->segment(3);
        $this->adminManager->debannirUtilisateur($pseudoASupprimer);
        redirect('/admin/', 'refresh');
    }
    public function supprimerTrajet(){
        if ($this->uri->segment(3) === FALSE)
        {
            redirect('/admin/', 'refresh');
        }

        $this->load->model('admin_model','adminManager');
        $trajetASupprimer = $this->uri->segment(3);
        $this->adminManager->deleteTrajet($trajetASupprimer);
        redirect('/admin/', 'refresh');

    }

    public function utilisateurs(){
        $this->load->model('admin_model','adminManager');
        $view_data = array();
        $listeUtilisateurs = array();
        $listeIdUtilisateurs = array();
        $resultat = $this->adminManager->getUtilisateurs();
        foreach($resultat as $ligne){
            $listeUtilisateurs[] = $ligne->login;
            $listeIdUtilisateurs[] = $ligne->id;
        }
        $nbUtilisateurs = count($listeUtilisateurs);
        $view_data['nbUtilisateurs'] = $nbUtilisateurs;

        for($i = 0 ; $i<$nbUtilisateurs ; $i++){
            $j = $i+1;
            if(isset($listeUtilisateurs[$i]))$view_data['user'.$j] = $listeUtilisateurs[$i];
            if(isset($listeIdUtilisateurs[$i]))$view_data['id'.$j] = $listeIdUtilisateurs[$i];
        }

        $this->load->view('adminUsers',$view_data);
    }

    public function trajets(){
        $this->load->model('admin_model','adminManager');
        $view_data = array();
        $listeDate = array();
        $listeId = array();
        $listeVilleDepart = array();

        $nbTrajets = 0;
        $resultat = $this->adminManager->getTrajet();
        foreach($resultat as $ligne){
            $listeDate[] = $ligne->dateDepart;
            $listeId[] = $ligne->id;
            $listeVilleDepart[] = $ligne->villeDepart;
            $nbTrajets++;
        }
        $view_data['nbTrajets'] = $nbTrajets;

        for($i = 0 ; $i<$nbTrajets ; $i++){
            $j = $i+1;
            if(isset($listeDate[$i]))$view_data['date'.$j] = $listeDate[$i];
            if(isset($listeId[$i]))$view_data['id'.$j] = $listeId[$i];
            if(isset($listeVilleDepart[$i]))$view_data['villedepart'.$j] = $listeVilleDepart[$i];
        }
        $this->load->view('adminTrajets',$view_data);


    }
}