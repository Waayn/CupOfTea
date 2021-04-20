<?php 
session_start();

use App\Autoloader;
use App\controller\{formController, toolController};
use App\model\{productModel, categoryModel, userModel, orderModel};

require_once 'Autoloader.php';
Autoloader::register();

// Instanciation de mes classes
$tool       = new toolController();
$productModel = new ProductModel();
$categoryModel = new CategoryModel();
$userModel = new UserModel();
$orderModel = new OrderModel();
$form       = new formController($userModel);

if(array_key_exists('page',$_GET)):
    
    switch($_GET['page']){
    	case 'accueil':
    		$categories = $categoryModel->findAll();
    		$path = 'view/indexView.php';
		break;
		case 'about':
			$path = 'view/aboutView.php';
		break;
		case 'listing':
			$products = $productModel->findAll();
			$categories = $categoryModel->findAll();
			$path = 'view/listingView.php';
		break;
		case 'product':
			$product = $productModel->findOne();
			$path = 'view/productView.php';
		break;
		case 'test':
			$path = 'view/testView.php';
		break;
		case 'register':
			if($tool->isConnected() === true){
                $tool->redirect('index.php?page=accueil');
            }
            if($_POST):
                $message = $userModel->register();
            endif;  
			$path = 'view/registerView.php';
		break;
		case 'logout':
			session_unset();
			$message = ["Déconnexion réussie"];
			$tool->redirect('index.php?page=accueil');
		break;
		case 'cart':
			$path = 'view/cartView.php';
		break;
		case 'order':
			$path = 'view/orderView.php';
		break;
    }

    require 'template/template.php';

else :
    
    $tool->redirect('index.php?page=accueil');

    
endif;

?>