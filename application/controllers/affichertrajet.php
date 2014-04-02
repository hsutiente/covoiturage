<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Affichertrajet extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('affichertrajet_model','affichertrajetManager');
        $this->afficher();
    }

    public function afficher(){
        $view_data = array();
        if ($this->uri->segment(3) === FALSE)
        {
            $idTrajet = null;
            redirect('/index/', 'refresh');

        }
        else
        {
            $view_data2 = array();
            $view_data2['idTrajet'] = $this->uri->segment(3);
            print_r($view_data2['idTrajet']);
            $this->load_view('afficher',$view_data2);
        }
    }
}