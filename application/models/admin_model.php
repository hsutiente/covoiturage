<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{

    private $table = 'utilisateur';


    public function getAdmin($login){
        $sql = "SELECT admin FROM utilisateur WHERE login = ?";
        $resultat = $this->db->query($sql, array($login));
        return $resultat->result();
    }

    public function getUtilisateurs(){
        $sql = "SELECT * FROM utilisateur";
        $resultat = $this->db->query($sql);
        return $resultat->result();
    }

    public function supprimerUtilisateur($login){
        $sql = "DELETE FROM utilisateur where login = ?";
        $resultat = $this->db->query($sql,$login);
    }

    public function bannirUtilisateur($login){
        $sql = "UPDATE utilisateur SET banni = 1 WHERE login = ?";
        $resultat = $this->db->query($sql,$login);
    }

    public function debannirUtilisateur($login){
        $sql = "UPDATE utilisateur SET banni = 0 WHERE login = ?";
        $resultat = $this->db->query($sql,$login);
    }

    public function getBanni($login){
        $sql = "SELECT banni from utilisateur where login = ?";
        $resultat = $this->db->query($sql,$login);
        return $resultat->result();
    }

    public function getTrajet(){
        $sql = "SELECT * FROM trajet";
        $resultat = $this->db->query($sql);
        return $resultat->result();
    }

    public function deleteTrajet($id){
        $sql = "DELETE FROM trajet WHERE id = ?";
        $resultat = $this->db->query($sql,$id);
    }

}




