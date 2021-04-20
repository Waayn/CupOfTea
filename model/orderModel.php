<?php

namespace App\model;

use App\core\connect as Connect;
use \PDO;


class orderModel extends Connect {

	public function addOne($id){    

		$sql= "INSERT INTO `orders`(`user_id`) VALUES (?)";
		$q = $this->_pdo->prepare($sql);
		$q->execute([$id]);
	}
}