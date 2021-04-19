<?php

require_once "core/connect.php";

class CategoryModel extends Connect {

	public function findAll(){    
		        // ici ma requete 
		$sql ="SELECT `id`, `name`, `content`, `picture` FROM `category`";
		$query = $this->_pdo->prepare($sql);
		$query->execute();

		// je retourne directement le resultat de la requete 
		return  $query->fetchALL(PDO::FETCH_ASSOC);
	}
}