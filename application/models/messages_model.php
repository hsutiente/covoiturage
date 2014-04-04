<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages_model extends CI_Model{

    private $table = 'message';

    public function posterMessage($message,$idexpediteur,$iddestinataire,$sujet){
        return $this->db->set(array(
            'destinataire' => $iddestinataire,
            'expediteur' => $idexpediteur,
            'sujet' => $sujet,
            'message' => $message))
            ->insert($this->table);
    }

    public function getId($login){
        $sql = "SELECT id FROM utilisateur WHERE login = ?";
        $resultat = $this->db->query($sql, array($login));
        return $resultat->result();
    }

}




