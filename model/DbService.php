<?php
include 'connectPdo.php';

class DbService{
	
	public static function getListeService()
	{
		$sql = "select * from service ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	public static function supprimerService($id)
	{
		$sql = "DELETE FROM `service` WHERE id=$id;";		
		connectPdo::getObjPdo()->exec($sql);	
		
	}
	public static function ajouterService($nom)
	{
		$sql = "INSERT INTO service (id, nom) VALUES (NULL, '$nom')";
		connectPdo::getObjPdo()->exec($sql);
	}
	
}

?>