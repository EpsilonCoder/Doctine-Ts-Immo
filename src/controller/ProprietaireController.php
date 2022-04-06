<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller
{
   private $proprietairets;
   public function __construct()
   {
      parent::__construct();
      $this->proprietairets = new ProprietaireDb();
   }

   public function addProprietaire()
   {

      $proprietaire = new Proprietaire();
      $proprietaire->setNom($_POST['nom']);
      $proprietaire->setPrenom($_POST['prenom']);
      $proprietaire->setDateNaissance($_POST['dateNaissance']);
      $proprietaire->setLieuNaissance($_POST['lieuNaissance']);
      $proprietaire->setCivilite($_POST['civilite']);
      $proprietaire->setCodePieceIdentite($_POST['CodePieceIdentite']);
      $proprietaire->setNumeroPieceIdentite($_POST['NumeroPieceIdentite']);

      $this->proprietairets->insert($proprietaire);
      return $this->listProprietaire();
   }
   public function accueil()
   {
      return $this->view->load("Proprietaire/accueil");
   }

   public function formulaire()
   {
      return $this->view->load("Proprietaire/addProprietaire");
   }

   public function listProprietaire()
   {

      $liste = $this->proprietairets->finAll();

      return $this->view->load("Proprietaire/listProprietaire", $liste);
   }

   public function editProprietaire($id)
   {
      $modifier = $this->proprietairets->editDb($id);

      return $this->view->load("Proprietaire/editProprietaire", $modifier);
   }

   public function detailsProprietaire($id)
   {
      $modifier = $this->proprietairets->editDb($id);

      return $this->view->load("Proprietaire/detailsProprietaire", $modifier);
   }

   public function modifier($id)
   {
      $data = $this->proprietairets->editDb($id);
      $data->setNom($_POST['nom']);
      $data->setPrenom($_POST['prenom']);
      $data->setDateNaissance($_POST['dateNaissance']);
      $data->setLieuNaissance($_POST['lieuNaissance']);
      $data->setCivilite($_POST['civilite']);
      $data->setCodePieceIdentite($_POST['CodePieceIdentite']);
      $data->setNumeroPieceIdentite($_POST['NumeroPieceIdentite']);
      $this->proprietairets->modifierDb();
      return $this->listProprietaire();
   }

   public function delete($id)
   {
      $this->proprietairets->deleteDb($id);
      return $this->listProprietaire();
   }
}
