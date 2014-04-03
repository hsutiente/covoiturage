<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier_model extends CI_Model{

    private $tableVille = 'ville';
    private $tableTrajet = 'trajet';

    /**
     * @param $pseudo
     * @param $pass
     * @param $email
     * @param $fonction
     * @return bool
     */
    public function ajouterVille($villeDepart){
        if(!is_string($villeDepart) OR empty($villeDepart)){
            return false;
        }
        else {
                return $this->db->set(array(
                    'nom' => $villeDepart))
                    ->insert($this->tableVille);
            }
    }

    /**
     * @param $villeDepart
     * @param $date
     * @return bool
     */
    public function ajouterTrajet($villeDepart,$date){
        if(!is_string($villeDepart) OR empty($villeDepart) OR (!is_string($date))  OR empty($date)){
            return false;
        }
        else{
            return $this->db->set(array(
                'dateDepart' => $date,
                'villeDepart'=>$villeDepart))
                ->insert($this->tableTrajet);
        }
    }
}