<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Affichertrajet extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url','assets'));
        $this->load->model('affichertrajet_model','affichetrajetManager');
        $idinscrire = $this->uri->segment(3);
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

            $this->load->model('sinscrire_model','sinscrireManager');
            $view_data2 = array();
            $idtrajet = $this->uri->segment(3);
            $query = $this->db->query("SELECT login FROM utilisateur JOIN trajet ON trajet.idConducteur = utilisateur.id WHERE trajet.id =".$this->uri->segment(3));
            if ($query->num_rows() > 0){
                $row = $query->row();
                $view_data2['nomconducteur'] = $row->login;
            }

            $query = $this->db->query("select * from trajet where id =".$this->uri->segment(3));
            if ($query->num_rows() > 0)
            {
                $row = $query->row();
                $view_data2['id'] = $row->id;
                $view_data2['dateDepart'] = $row->dateDepart;
                $view_data2['nbPlace'] = $row->nbPlace;
                $view_data2['nbKilometres'] = $row->nbKilometres;
                $view_data2['villeDepart'] = $row->villeDepart;
                $ville = $view_data2['villeDepart'];
                $view_data2['conducteur'] = $this->session->userdata('pseudoConnecte');
            }

            $this->load->library('googlemaps');
            $config = array();
            $config['center'] = $ville.",france";
            $config['zoom'] = '13';
            $config['directions'] = TRUE;
            $config['directionsStart'] = $ville;
            $config['directionsEnd'] = 'IUT de Lens,France';
            $config['directionsDivID'] = 'directionsDiv';
            $config['onclick'] = 'alert(\'Coordonnées du click: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
            $this->googlemaps->initialize($config);
            $view_data2['map'] = $this ->googlemaps ->create_map();

            $tabIdParticipant = array();
            $tabNomParticipant = array();

            $resultat = $this->sinscrireManager->idParticipant($idtrajet);

            foreach($resultat as $ligne){
                $tabIdParticipant[] = $ligne->idParticipant;
            }
            for($i = 0 ; $i<count($tabIdParticipant) ; $i++){
                $query = $this->db->query("select login from utilisateur where id =".$tabIdParticipant[$i]);
                if ($query->num_rows() > 0)
                {
                    $row = $query->row();
                    $tabNomParticipant[]=$row->login;
                }
            }
//            if(isset($tabNomParticipant[0]))$view_data2['passager1'] = $tabNomParticipant[0];
//            if(isset($tabNomParticipant[1]))$view_data2['passager2'] = $tabNomParticipant[1];
//            if(isset($tabNomParticipant[2]))$view_data2['passager3'] = $tabNomParticipant[2];
//            if(isset($tabNomParticipant[3]))$view_data2['passager4'] = $tabNomParticipant[3];

            $nbParticipant = count($tabNomParticipant);
            $view_data2['nbParticipant'] = $nbParticipant;
            for($i = 0 ; $i<$nbParticipant ; $i++){
                $j = $i+1;
                if(isset($tabNomParticipant[$i]))$view_data2['passager'.$j] = $tabNomParticipant[$i];
            }

            $resultat = $this->sinscrireManager->getPreferences($idtrajet);
            foreach($resultat as $ligne){
                $view_data2['fumeur'] = $ligne->fumeur;
                $view_data2['femme'] = $ligne->fille;
                $view_data2['homme'] = $ligne->garcon;
                $view_data2['musique'] = $ligne->musique;
                $view_data2['discussion'] = $ligne->discussion;
            }

            $this->load_view('afficher',$view_data2);
        }
    }


    public function sinscrire(){
        $view_data = array();
        if ($this->uri->segment(3) === FALSE)
        {
            redirect('/index/', 'refresh'); // Il n'y a pas d'id de trajet dans l'url, redirection vers l'index
        }
        else
        {
            $this->load->model('publier_model','publierManager');
            $this->load->model('sinscrire_model','sinscrireManager');
            $idtrajet = $this->uri->segment(3);
            $resultat = $this->publierManager->getId();
            foreach($resultat as $ligne){
                $idparticipant = $ligne->id;
            }
            $query = $this->db->query("SELECT utilisateur.id FROM utilisateur JOIN trajet ON trajet.idConducteur = utilisateur.id WHERE trajet.id =".$this->uri->segment(3));
            if ($query->num_rows() > 0){
                $row = $query->row();
                $idconducteur = $row->id;
            }
            // On a récupéré l'id du conducteur, l'id du participant
            // On vérifie que le conducteur et la  personne souhaitant participe sont bien deux individus distincts
            if($idconducteur==$idparticipant){
                $this->load_view('condparticipant',$view_data);
                $this->output->set_header('refresh:3; url='.site_url($uri = 'index'));
            }
            else{
                $this->sinscrireManager->inscription($idconducteur,$idparticipant,$idtrajet);
                $this->load_view('inscriptiontrajet',$view_data);
                $this->output->set_header('refresh:3; url='.site_url($uri = 'index'));
            }
        }

    }
}