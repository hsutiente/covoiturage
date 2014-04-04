<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publier_model extends CI_Model{

    private $tableVille = 'ville';
    private $tableTrajet = 'trajet';
    private $tablePreference = 'preference';



    public function getId(){
        $login = $this->session->userdata('pseudoConnecte');
        $sql = "SELECT id FROM utilisateur WHERE login = ?";
        $resultat = $this->db->query($sql, array($login));
        return $resultat->result();
    }

    public function getLastId(){
        $sql = "SELECT MAX(id) as id FROM trajet ORDER BY id desc";
        $resultat = $this->db->query($sql);
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

    public function ajouterPreference($idTrajet,$fumeur,$homme,$femme,$discussion,$musique){
        return $this->db->set(array(
            'fumeur' => $fumeur,
            'garcon'=>$homme,
            'discussion'=>$discussion,
            'musique'=>$musique,
            'idTrajet'=>$idTrajet,
            'fille'=>$femme))
            ->insert($this->tablePreference);
    }
}