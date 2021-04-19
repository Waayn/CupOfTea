import Product from '../js/product.js';

let id = document.getElementById("idProduct").innerHTML
let name = document.getElementById("nameProduct").innerHTML
let price = document.getElementById('prix-sachet').innerHTML
let addProductButton = document.getElementById('add-panier')
let quantity = 1


id = id.slice(4, 6)

 if (price.length == 5){
	price = Number(price.slice(0,4))
 } else if (price.length == 6){
	price = Number(price.slice(0,5))
 }

price = price*100
price = Math.round(price)/100
price = parseFloat(price).toFixed(2)

let productAdd = new Product(id, name, quantity, price)

addProductButton.addEventListener('click', () => {
	productAdd.addOneProduct()
	location.reload()
})
