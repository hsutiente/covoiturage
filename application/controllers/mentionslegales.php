<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentionslegales extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('index_model','indexManager');
        $this->mentionslegales();
    }

    public function mentionslegales(){
        $view_data = array();
        $this->load_view('mentions',$view_data);
    }
}
