<?php
include 'connectPdo.php';

class DbEmploye{
	
	public static function getListeEmploye()
	{
		$sql = "select * from employe ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	public static function supprimerEmploye($id)
	{
		$sql = "DELETE FROM `employe` WHERE id=$id";		
		connectPdo::getObjPdo()->exec($sql);	
		
	}
	
}

?>