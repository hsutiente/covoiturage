    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editer extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('editer_model','editerManager');
        $this->load->model('admin_model','adminManager');
        $verifSession = $this->session->userdata('pseudoConnecte');
        if(strlen($verifSession)>0){
            $resultat = $this->adminManager->getBanni($verifSession);
            $banni = 0;
            foreach($resultat as $ligne){
                $banni = $ligne->banni;
            }
            if($banni == 1){
                $this->load_view("banni");
                return 0;
            }
        }
        $this->editer();
    }

    public function editer()
    {

        $view_data = array();
        $pseudo = $this->session->userdata('pseudoConnecte');
        if(strlen($pseudo)==0){
            echo $pseudo;
            $this->load_view("vousinscrire");
            $this->output->set_header('refresh:3; url='.site_url($uri = 'index'));
            return 0;
        }
        $resultat = $this->editerManager->getMail();
        foreach($resultat as $ligne){
            if(strtolower($ligne->login) == strtolower($pseudo)){
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