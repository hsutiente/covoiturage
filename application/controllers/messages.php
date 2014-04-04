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

        $expediteurNom = $this->session->userdata('pseudoConnecte');
        $destinataireNom = $this->input->post('destinataire');
        $sujet = $this->input->post('sujet');
        $message = $this->input->post('message');


        $resultat1 = $this->messageManager->getId($expediteurNom);
        foreach($resultat1 as $ligne){
            $expediteurId = $ligne->id;
        }
        $resultat3 = $this->messageManager->getMessages($expediteurId);
        foreach($resultat3 as $ligne){

        }
        $resultat2 = $this->messageManager->getId($destinataireNom);
        foreach($resultat2 as $ligne){
            $destinataireId = $ligne->id;
        }
        if(!$this->input->post('destinataire')OR !$this->input->post('message') OR !$this->input->post('sujet')){
            $this->load_view('messagerie',$view_data);
        }
        if(strlen($message)>0 AND strlen($sujet)>0 AND strlen($destinataireNom)>0){
            $this->messageManager->posterMessage($message,$expediteurId,$destinataireId,$sujet);
            $this->load_view('messageEnvoye',$view_data);
            $this->output->set_header('refresh:3; url='.site_url($uri = 'messages'));
        }

    }
}
