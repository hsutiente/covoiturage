<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Affichertrajet extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url','assets'));
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
        {   $view_data2 = array();
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
            }

            $this->load->library('googlemaps');
            $config = array();
            $config['center'] = $ville.",france";
            $config['zoom'] = '13';
            $config['directions'] = TRUE;
            $config['directionsStart'] = $ville;
            $config['directionsEnd'] = 'Lens,France';
            $config['directionsDivID'] = 'directionsDiv';
            $config['onclick'] = 'alert(\'Coordonnées du click: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
            $this->googlemaps->initialize($config);
            $view_data2['map'] = $this ->googlemaps ->create_map();
            $this->load_view('afficher',$view_data2);
        }
    }
}