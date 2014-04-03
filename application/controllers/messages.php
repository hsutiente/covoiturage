<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('messages_model','messageManager');
        $this->messages();
    }

    public function messages(){
        $view_data = array();
        $this->load_view('messagerie',$view_data);
    }
}
