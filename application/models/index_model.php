<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_model extends CI_Model{

    private $table = 'trajet';

    public function recupererDernierTrajet(){
        $query = $this->db->select()
            ->from('trajet')
            ->get()
            ->result();
        return $query;
    }

    public function getDernierTrajet(){
        $sql = "SELECT id,villeDepart, dateDepart FROM trajet ORDER BY dateDepart";
        $resultat = $this->db->query($sql);
        return $resultat->result();
    }

}




