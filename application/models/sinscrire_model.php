<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sinscrire_model extends CI_Model{
    private $table = 'participer';
    public function inscription($idconducteur,$idparticipant,$idtrajet){
        if(!is_string($idparticipant) OR empty($idconducteur)){
            return false;
        }
        else{
            return $this->db->set(array(
                'idTrajet' => $idtrajet,
                'idConducteur'=>$idconducteur,
                'idParticipant'=>$idparticipant))
                ->insert($this->table);
        }
    }

    public function idParticipant($idtrajet){
        $sql = "SELECT idParticipant FROM participer WHERE idTrajet = ?";
        $resultat = $this->db->query($sql, array($idtrajet));
        return $resultat->result();
    }
}