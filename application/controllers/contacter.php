<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacter extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->helper(array('url','assets'));
        $this->contacter();
    }

    public function contacter()
    {
        $view_data = array();
        $mail = $this->input->post('email');
        $message = $this->input->post('message');
        $sujet = "message de ".$mail;
        $destinataire = "vlaour@gmail.com";

        //On vérifie que le champs message existe, dans le cas contraire on redirige sur la page de contact
        if(isset($_POST['message'])){
            mail($destinataire,$sujet,$message);
            $this->load_view('mailenvoye',$view_data);
            $this->output->set_header('refresh:3; url='.'index');
        }
        else{
            $this->load_view('contact',$view_data);
        }

    }
}
