<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier_model extends CI_Model{

    private $tableVille = 'ville';

    /**
     * @param $pseudo
     * @param $pass
     * @param $email
     * @param $fonction
     * @return bool
     */
    public function ajouterVille($villeDepart,$codePostal){
        if(!is_string($villeDepart) OR empty($villeDepart)){
            return false;
        }
        else {
                return $this->db->set(array(
                    'nom' => $villeDepart,
                    'codePostal' => $codePostal))
                    ->insert($this->tableVille);
            }
    }
}




