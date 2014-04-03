    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editer extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('editer_model','editerManager');
        $this->editer();
    }

    public function editer()
    {
        $view_data = array();
        $pseudo = $this->session->userdata('pseudoConnecte');
        $resultat = $this->editerManager->getMail();
        foreach($resultat as $ligne){
            if($ligne->login == $pseudo){
                $view_data['email'] = $ligne->email;
            }
        }
        $pass1 = $this->input->post('pass1');
        $pass2 = $this->input->post('pass2');
        $mail = $this->input->post('email');


        if((isset($pass1)) AND (isset($pass2)) AND ($pass1!=$pass2)){
            $this->load_view('editerProfilPassErrone',$view_data);
        }

       else if((strlen($pass1)>0 AND strlen($pass2)>0) AND (isset($pass1)) AND (isset($pass2)) AND ($pass1==$pass2)){
           $this->editerManager->changerPass($pass1,$pseudo);
           $this->editerManager->changerMail($mail,$pseudo);
           $mail = "";
           $pass1 = "";
           $pass2 = "";
           $this->load_view('editerProfilPassChange',$view_data);
        }
        else{
            $this->load_view('editerProfil',$view_data);
        }
    }
}