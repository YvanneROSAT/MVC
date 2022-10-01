<?php
include './model/DbEmploye.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeEmploye = DbEmploye::getListeEmploye();
			 
			 //appel à la vue
			 include 'vue/vueService/v_listeEmploye.php';
			 
			 break;
			 
			 case 'supprimer':
			 //appel à la base de donnée le modele
			 DbEmploye::supprimerEmploye($_GET['id']);
			//  Affiche la liste
			 $listeEmploye = DbEmploye::getListeEmploye();
			 
			 //appel à la vue
			 include 'vue/vueService/v_listeEmploye.php';
			 
			 break;
				
		}

?>