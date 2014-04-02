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

    public function getId($pseudo){
        $query = $this->db->select('id')
            ->from('utilisateur')
            ->get()
            ->resultat();
    }

    public function changerPass($pass,$login){
        $data = array(
            'password' => sha1($pass)
        );
        $this->db->where('login', $login);
        $this->db->update('utilisateur', $data);
    }

    public function changerMail($mail,$login){
        $data = array(
            'email' => $mail
        );
        $this->db->where('login', $login);
        $this->db->update('utilisateur', $data);
    }
}




