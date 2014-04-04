<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription_model extends CI_Model{

    private $table = 'utilisateur';

    /**
     * @param $pseudo
     * @param $pass
     * @param $email
     * @param $fonction
     * @return bool
     */
    public function inscrire($pseudo,$pass,$email,$fonction){
        if(!is_string($pseudo) OR (!is_string($pass)) OR (!is_string($email))OR (!is_string($fonction))
            OR empty($pseudo) OR empty($pass) OR empty($email) OR empty($fonction)){
            return false;
        }
        else {
            return $this->db->set(array(
                'login' => $pseudo,
                'password' => sha1($pass),
                'email' => $email,
                'fonction' => $fonction))
                ->insert($this->table);
        }
    }

    /**
     * @return Liste des utilisateurs
     */
    public function getLogin(){
        $query = $this->db->select('login')
            ->from('utilisateur')
            ->get()
            ->result();
        return $query;
    }


}




