<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('messages_model','messageManager');
        $this->load->model('admin_model','adminManager');
        $verifSession = $this->session->userdata('pseudoConnecte');
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
        $this->messages();
    }

    public function messages(){
        $view_data = array();

        $expediteurNom = strtolower($this->session->userdata('pseudoConnecte'));
        $destinataireNom = $this->input->post('destinataire');
        $sujet = $this->input->post('sujet');
        $message = "Message de ".$expediteurNom." : ".$this->input->post('message');


        $resultat1 = $this->messageManager->getId($expediteurNom);
        foreach($resultat1 as $ligne){
            $expediteurId = $ligne->id;
        }
        $listeMessages = array();
        $resultat3 = $this->messageManager->getMessages($expediteurId);
        foreach($resultat3 as $ligne){
            $listeMessages[] = $ligne->destinataire;
            $listeMessages[] = $ligne->sujet;
            $listeMessages[] = $ligne->message;
        }
        $nbEntite = count($listeMessages);
        $view_data['nbEntite'] = $nbEntite;

        $j = 1;
        for($i = 0 ; $i<$nbEntite ; $i=$i+3){
            if(isset($listeMessages[$i]))$view_data['dest'.$j] = $listeMessages[$i];
            if(isset($listeMessages[$i]))$view_data['suj'.$j] = $listeMessages[$i+1];
            if(isset($listeMessages[$i]))$view_data['messages'.$j] = $listeMessages[$i+2];
            $j++;
        }

        $j = 1;
        for($i = 0 ; $i<$nbEntite ; $i=$i+3){
             $resultat4 = $this->messageManager->getNom($view_data['dest'.$j]);
             foreach($resultat4 as $ligne){
                 $view_data['dest'.$j] = $ligne->login;
            }
            $j++;
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