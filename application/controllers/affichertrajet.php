<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Affichertrajet extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('affichertrajet_model','affichertrajetManager');
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
                $view_data2['dateDepart'] = $row->id;
                $view_data2['nbPlace'] = $row->id;
                $view_data2['nbKilometres'] = $row->id;
                $view_data2['villeDepart'] = $row->id;
            }
            $this->load_view('afficher',$view_data2);
        }
    }
}