<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        //$this->load->model('publier_model','publierManager');
        $this->publier();
    }

    public function publier(){
        $view_data = array();
        $view_data['TEST'] = "ok";
        $this->load_view('publier',$view_data);
    }
}
