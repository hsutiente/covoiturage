<?php

class Objectif extends CI_Controller
{
    public function __construct(){
        parent::__construct();

    }

    public function index(){
        parent::__construct();
        $this->load->helper(array('url','assets'));
        $this->objectif();
    }

    public function objectif(){
        $data_view = array();
        $this->load_view('objectifs',$data_view);

    }

}