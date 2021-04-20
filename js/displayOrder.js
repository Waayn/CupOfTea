let key = Object.keys(sessionStorage);
let divProducts = document.getElementById('display-products')

if (key.length != 0){
	for(let i=0; i < key.length; i++) {
			calcul = JSON.parse(sessionStorage.getItem(key[i]))
			divProducts.innerHTML += '<ul class="ul-cart"><li>Nom du produit : ' + calcul.name + '</li>' +
								 '<li>Quantité : ' + calcul.quantity + '</li>' +
								 '<li>Prix du produit : ' + calcul.price + '€</li></ul>';

	}
}

