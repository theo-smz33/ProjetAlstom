<?php
class AdminController extends Controller
{

    var $adherentModel;

    public function __construct($request)
    {
        parent::__construct($request);
        $this->adherentModel = $this->loadModel("Adherent");
    }

    function adherent(){
        if(!Session::hasPermission("A")) header("Location: " . BASE_URL . "/Default/index");

        if(isset($_POST['cf'])) {
            $delete = $_POST['cf'];
            #var_dump($delete);
            $adherentModelSup = $this->loadModel("Supadherent");
            foreach ($delete as $dl){
                $adherentModelSup->delete(array('conditions' => $dl));
            }
        }
        $d['adherents'] = $this->adherentModel->find(array('conditions' => 1));
        $this->set($d);
    }

    function modifAdherent($id){
        if(!Session::hasPermission("A")) header("Location: " . BASE_URL . "/Default/index");
        if(isset($_POST['pseudo']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['matricule']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['genre']) && isset($_POST['grade'])){
            $this->adherentModel->update(array('conditions' => array('ID_ADHERENT' => $id), 'donnees' => array('PSEUDO' => $_POST['pseudo'], 'GRADE' => $_POST['grade'], 'NOM' => $_POST['nom'], 'PRENOM' => $_POST['prenom'], 'GENRE' => $_POST['genre'], 'MATRICULE' => $_POST['matricule'], 'ADRESSE_MAIL' => $_POST['email'], 'TELEPHONE' => $_POST['telephone'])));
        }
        $d['adherent'] = $this->adherentModel->find(array('conditions' => "ID_ADHERENT = '$id'"));
        $this->set($d);
    }

    function creeradherent(){
        if(!Session::hasPermission("A")) header("Location: " . BASE_URL . "/Default/index");

        if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['passwordconf']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['genre']) && isset($_POST['matricule']) && isset($_POST['telephone'])) {
            #   && isset($_POST['telephone']) && isset($_POST['fonction'])

            $modAd = $this->loadModel('Adherent');
            $modAd->insertAI(array("PSEUDO", "PASSWORD", "NOM", "PRENOM", "GENRE", "MATRICULE", "ADRESSE_MAIL", "TELEPHONE", "DATE_ADHESION"), array($_POST['pseudo'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['genre'], $_POST['matricule'], $_POST['email'], $_POST['telephone'], date('d-m-y')));
            #,  $_POST['genre'], $_POST['matricule'], $_POST['email'], date('d-m-y')
            # "NOM", "PRENOM", "GENRE", "MATRICULE", "ADRESSE_MAIL", "DATE_ADHESION"
            #,GRADE,NOM,PRENOM,GENRE,MATRICULE,ADRESSE_MAIL,TELEPHONE,FONCTION,MEMBRE_ACTIF,DATE_ADHESION,DATE_DEPART
        }
    }


    function activite(){
        if(!Session::hasPermission("A") OR !Session::hasPermission("L")) header("Location: " . BASE_URL . "/Default/index");
        if(isset($_POST['cf'])) {
            $delete = $_POST['cf'];
            #var_dump($delete);
            $actModelSup = $this->loadModel("Supactivite");
            foreach ($delete as $dl){
                $actModelSup->delete(array('conditions' => $dl));
            }
        }

        $modActivite = $this->loadModel('Activite');
        $d['activites'] = $modActivite->find(Array('conditions' => 1));
        $this->set($d);
    }

    function creeractivite(){
        if(!Session::hasPermission("A") AND !Session::hasPermission("L")) header("Location: " . BASE_URL . "/Default/index");
        if(isset($_POST['tel']) && isset($_POST['activite']) && isset($_POST['description']) && isset($_POST['date']) && isset($_POST['adresse']) && isset($_POST['postal']) && isset($_POST['ville']) && isset($_POST['nbpart']) && isset($_POST['agemin']) && isset($_POST['montant'])){
            $modActivite = $this->loadModel('Activite');
            $modActivite->insertAI(array("ID_LEADER"/*,"ID_PRESTATAIRE" ,"ID_OPTION"*/, "NOM", "DETAIL", "DATE_CREATION", "DATE_ACTIVITE", "ADRESSE", "CP", "VILLE", "NB_PART_MAX", "AGE_MINIMUM", "FORFAIT"), array(Session::get('ID_ADHERENT'), $_POST['activite'], $_POST['description'], date('d-m-y'), $_POST['date'], $_POST['adresse'], $_POST['postal'], $_POST['ville'], $_POST['nbpart'], $_POST['agemin'], $_POST['montant']));
            $modPrestataire = $this->loadModel("Prestataire");
            $d['prestataire'] = $modPrestataire->find(Array('conditions' => 1));
        }
    }

    function modifActivite($id){
        $modActivite =  $this->loadModel('Activite');
        $d['activite'] = $modActivite->findFirst(array('conditions' => "ID_ACTIVITE = '$id'"));
        $ida = $d['activite']->ID_LEADER;
        $d['leader'] = $this->adherentModel->findFirst(array('conditions' => "ID_ADHERENT = '$ida'"));
        $this->set($d);
    }

    function validActivite($id){
        $modActivite =  $this->loadModel('Activite');
        $modActivite->update(array('conditions' => array('ID_ACTIVITE' => $id), 'donnees' => array('STATUT' => "V")));
        $this->render("activite");
    }

    function mesactivite(){
        if(isset($_POST['cf'])) {
            $delete = $_POST['cf'];
            #var_dump($delete);
            $actModelSup = $this->loadModel("Supactivite");
            foreach ($delete as $dl){
                $actModelSup->delete(array('conditions' => $dl));
            }
        }
        $modActivite = $this->loadModel("Activite");
        $d['activites'] = $modActivite->find(array('conditions' => "ID_LEADER = " . Session::get("ID_ADHERENT")));
        $this->set($d);
    }

    function prestataire(){
        if(!Session::hasPermission("A") AND !Session::hasPermission("L")) header("Location: " . BASE_URL . "/Default/index");
        if(isset($_POST['cf'])) {
            $delete = $_POST['cf'];
            $prestataireModelSup = $this->loadModel("Supprestataire");
            foreach ($delete as $dl){
                $prestataireModelSup->delete(array('conditions' => $dl));
            }
        }

        $prestataireModel= $this->loadModel("Prestataire");
        $d['prestataires'] = $prestataireModel->find(array('conditions' => 1));
        $this->set($d);
    }


    function creerprestataire(){
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){
            $prestataireModel= $this->loadModel("Prestataire");
            $prestataireModel->insertAI(array("NOM", "MAIL", "TEL", "ADRESSE", "CP", "VILLE"), array($_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['adresse'], $_POST['cp'], $_POST['ville']));
        }
    }

    function modifPrestataire($id){
        $prestataireModel= $this->loadModel("Prestataire");
        if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville'])){
            $prestataireModel->update(array('conditions' => array('id' => $id), 'donnees' => array('nom' => $_POST['nom'], 'mail' => $_POST['mail'], 'tel' => $_POST['tel'], 'adresse' => $_POST['adresse'], 'cp' => $_POST['cp'], 'ville' => $_POST['ville'])));
        }
        $d['prestataire'] = $prestataireModel->findFirst(array('conditions' => "id = '$id'"));
        $this->set($d);
    }


    function creneau(){
        if(!Session::hasPermission("A") AND !Session::hasPermission("L")) header("Location: " . BASE_URL . "/Default/index");
        if(isset($_POST['cf'])) {
            $delete = $_POST['cf'];
            $creneauModelSup = $this->loadModel("Supcreneau");
            foreach ($delete as $dl) {
                $creneauModelSup->delete(array('conditions' => $dl));
            }
        }
        $creneauModel= $this->loadModel("Creneau");
        $d['creneaux'] = $creneauModel->find(array('conditions' => 1));
        $this->set($d);
    }
    function creercreneau(){
    if(isset($_POST['id_activite']) && isset($_POST['datecreneau']) && isset($_POST['heurecreneau']) && isset($_POST['effectif'])&& isset($_POST['statut'])){
        $creneauModel= $this->loadModel("Creneau");
        $activiteModel = $this->loadModel("Activite");
        $creneauModel->insertAI(array("ID_ACTIVITE", "DATE_CRENEAU", "HEURE_CRENEAU", "EFFECTIF_CRENEAU", "STATUT"), array($_POST['id_activite'], $_POST['datecreneau'], $_POST['heurecreneau'], $_POST['effectif'], $_POST['statut']));
        $d['activites'] = $activiteModel->find(Array('conditions' => 1));
    }
}
    function modifcreneau($id){
        $creneauModel= $this->loadModel("Creneau");
        if(isset($_POST['id_activite']) && isset($_POST['datecreneau']) && isset($_POST['heurecreneau']) && isset($_POST['effectif']) && isset($_POST['statut'])){
            $creneauModel->update(array('conditions' => array('NUM_CRENEAU' => $id), 'donnees' => array('ID_ACTIVITE' => $_POST['id_activite'], 'DATE_CRENEAU' => $_POST['datecreneau'], 'HEURE_CRENEAU' => $_POST['heurecreneau'], 'EFFECTIF' => $_POST['effectif'], 'STATUT' => $_POST['statut'])));
        }
        $d['creneau'] = $creneauModel->findFirst(array('conditions' => "NUM_CRENEAU = '$id'"));
        $this->set($d);
    }

}