<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trouver extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('trouver_model','trouverManager');
        $this->trouver();
    }

    public function trouver(){
        $view_data=array();
        $this->load_view('trouver',$view_data);
    }
}
