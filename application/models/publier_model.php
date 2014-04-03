<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier_model extends CI_Model{

    private $tableVille = 'ville';
    private $tableTrajet = 'trajet';


    public function getId(){
        $login = $this->session->userdata('pseudoConnecte');
        $sql = "SELECT id FROM utilisateur WHERE login = ?";
        $resultat = $this->db->query($sql, array($login));
        return $resultat->result();
    }
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
    public function ajouterTrajet($villeDepart,$date,$idconducteur){
        if(!is_string($villeDepart) OR empty($villeDepart) OR (!is_string($date))  OR empty($date)){
            return false;
        }
        else{
            return $this->db->set(array(
                'dateDepart' => $date,
                'villeDepart'=>$villeDepart,
                'idConducteur'=>$idconducteur))
                ->insert($this->tableTrajet);
        }
    }
}