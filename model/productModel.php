<?php

require_once "core/connect.php";

class ProductModel extends Connect {

	public function findAll(){    
		        // ici ma requete 
		$sql =" SELECT `id`, `name`, `content`, `quantity`, `price`, `picture`, `category_id`, `date_creation` FROM `product`";
		$query = $this->_pdo->prepare($sql);
		$query->execute();

		// je retourne directement le resultat de la requete 
		return  $query->fetchALL(PDO::FETCH_ASSOC);
	}

	public function findOne(){    
		        // ici ma requete 
		$sql =" SELECT `id`, `name`, `content`, `quantity`, `price`, `picture`, `category_id`, `date_creation` FROM `product` WHERE id= :productId";
		$query = $this->_pdo->prepare($sql);
		$query->bindParam(':productId', $_GET['productId']);
		$query->execute();

		// je retourne directement le resultat de la requete 
		return  $query->fetch(PDO::FETCH_ASSOC);
	}
}