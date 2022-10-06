<?php
include './model/DbService.php';

$action = $_GET['action'];

switch ($action) {

	case 'lister':
		//appel à la base de donnée le modele
		$listeService = DbService::getListeService();
		//appel à la vue
		include 'vue/vueService/v_listeServices.php';
		break;

	case 'supprimer':
		//appel à la base de donnée le modele
		DbService::supprimerService($_GET['id']);
		//appel à la base de donnée le modele
		$listeService = DbService::getListeService();

	case 'validAjout':
		if (isset($_GET['nom'])) {
			$nom = $_GET['nom'];
			DbService::ajouterService($nom);
			//appel à la vue de la liste à jour
			$listeService = DbService::getListeService();
			include 'vue/vueService/v_listeServices.php';
			break;
		}

	case 'formEditer':
		if (isset($_GET['nom'], $_GET['id'])) {
			$nom = $_GET['nom'];
			$id = $_GET['id'];
			DbService::updateService($id, $nom);

			//appel à la vue de la liste à jour
			$listeService = DbService::getListeService();
			include 'vue/vueService/v_listeServices.php';
			break;
		};

		//appel à la vue
		include 'vue/vueService/v_listeServices.php';
		break;
}
