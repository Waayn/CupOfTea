<?php 

require_once "core/connect.php";
  
  class TestModel extends Connect {  

  	public function findAll(){    
		        // ici ma requete 
		$sql =" SELECT `id`, `name`, `content`, `quantity`, `price`, `picture`, `category_id`, `date_creation` FROM `product`";
		$query = $this->_pdo->prepare($sql);
		$query->execute();

		// je retourne directement le resultat de la requete 
		return  $query->fetchALL(PDO::FETCH_ASSOC);
	}
}

$testModel = new TestModel();
$result = $testModel->findAll();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
	<p><?php 
	foreach ($result as $res) {
		echo $res['name'];
		// print_r($res);
	}
	?></p>
</body>
</html>

