<h1>Votre commande</h1>

<div id="display-products"></div>
<form action="index.php?page=order" method="post" id="center-btn">
	<input style='display:none' name='price' id="final-price"></input>
	<input id='order-confirm' type="submit" name="confirm" value="Commander">
</form>

<?php 
if (isset($_POST['confirm'])) {
	$orderModel->addOne($_SESSION['id']);
}
?>

<script src="js/displayOrder.js"></script>