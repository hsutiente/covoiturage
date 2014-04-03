<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editer_model extends CI_Model{

    private $table = 'utilisateur';


    public function getMail(){
        $query = $this->db->select()
            ->from('utilisateur')
            ->get()
            ->result();
        return $query;
    }

}




