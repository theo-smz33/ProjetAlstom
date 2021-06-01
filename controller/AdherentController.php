<?php


class AdherentController extends Controller
{

    var $adherentModel;

        public function __construct($request)
        {
            parent::__construct($request);
            $this->adherentModel = $this->loadModel("Adherent");
        }

    function profil(){
        if(!Session::isConnected()) header("Location: " . BASE_URL . "/Default/index");

        if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matricule']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['genre'])){
            $this->adherentModel->update(array('conditions' => array('ID_ADHERENT' => Session::get('ID_ADHERENT')), 'donnees' => array('PSEUDO' => $_POST['pseudo'], 'NOM' => $_POST['nom'], 'PRENOM' => $_POST['prenom'], 'GENRE' => $_POST['genre'], 'MATRICULE' => $_POST['matricule'], 'ADRESSE_MAIL' => $_POST['email'], 'TELEPHONE' => $_POST['telephone'])));
            Session::set('NOM', $_POST['nom']);
            Session::set('PRENOM', $_POST['prenom']);
            Session::set('MATRICULE', $_POST['matricule']);
            Session::set('GENRE', $_POST['genre']);
            Session::set('ADRESSE_MAIL', $_POST['email']);
            Session::set('TELEPHONE', $_POST['telephone']);


        }
    }

    function connexion(){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $r = $this->adherentModel->findFirst(array('conditions' => array('PSEUDO' => $_POST['username'])));
            if($r !== false){
                $rr = get_object_vars($r);
                if($rr["PASSWORD"] == $_POST['password']){
                    $keys = array_keys($rr);
                    for($i=0;$i<sizeof($rr);$i++){
                        Session::set($keys[$i], $rr[$keys[$i]]);
                    }
                    Session::setConnected();
                }
            }else{

            }

        }
        header("Location: " . BASE_URL);
    }

    function deconnexion(){
        Session::deleteSession();
        header("Location: " . BASE_URL);
    }
    function resetmpd(){

    }
}