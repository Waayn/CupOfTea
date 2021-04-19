function deleteProduct(id) {
	let product = JSON.parse(sessionStorage.getItem(id))
	product.quantity = product.quantity-1

	if (product.quantity != 0) {
		sessionStorage.setItem(product.id, JSON.stringify(product))
	} else {
		sessionStorage.removeItem(id)
	}
	location.reload()
}

function deleteCart(){ 
	let keyStorage = Object.keys(sessionStorage);
	let btnDeleteAll = document.getElementById('delete-cart')

	if (window.confirm('Êtes vous sûr de vouloir supprimer le panier ?')){

		if (keyStorage.length != 0){
			for(let i=0; i < keyStorage.length; i++) {
				sessionStorage.removeItem(keyStorage[i])
			}	
		location.reload()
		}
	}
	else { return }
}

let key = Object.keys(sessionStorage);
let div = document.getElementById('display-products')
let btnDeleteCart = document.getElementById('delete-cart')

if (key.length != 0){
	for(let i=0; i < key.length; i++) {
			calcul = JSON.parse(sessionStorage.getItem(key[i]))
			div.innerHTML += '<ul class="ul-cart"><li>Nom du produit : ' + calcul.name + '</li>' +
								 '<li>Quantité : ' + calcul.quantity + '</li>' +
								 '<li>Prix du produit : ' + calcul.price + '€</li></ul>' +
								 '<button id="deleteProduct' + calcul.id + '" onclick="deleteProduct(' + calcul.id + ')">Supprimer un produit</button>';

	}
}

