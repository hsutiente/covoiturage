<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_model extends CI_Model{

    private $table = 'utilisateur';

    public function getInfoConnexion(){
        $login = $this->input->post('login');
        $sql = "SELECT id,login,password FROM utilisateur WHERE login = ?";
        $resultat = $this->db->query($sql, array($login));
        return $resultat->result();
    }

}




