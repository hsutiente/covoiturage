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
        $view_data = array();
        $this->load_view('publier',$view_data);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('villeDepart', '"Ville de départ"', 'trim|required|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('codePostal', '"codePostal"', 'required');


        if($this->form_validation->run()){
            $villeDepart = $this->input->post('villeDepart');
            $codePostal = $this->input->post('codePostal');
            $this->publierManager->ajouterVille(
                $villeDepart,
                $codePostal);
        }
        else{
            $this->load_view('publier',$view_data);
        }
    }
}
