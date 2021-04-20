<h1>Votre panier</h1>

<div id="display-products"></div>

<div id="div-delete"></div>

<div id="order-div">
<?php if($tool->isConnected()) : ?>
	<div id="div-order">
		<a href="index.php?page=order" id="order-btn">Commander</a>
	</div>
	<?php else: ?>
		<div id="div-register">Veuillez vous connecter pour passer commande.</div>
	<?php endif; ?>

	<div id='empty-cart'></div>
</div>
<script src="js/displayCart.js"></script>

