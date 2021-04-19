export default class Product {
	constructor (id, name, quantity, price){
		this.name = name;
		this.quantity = quantity;
		this.id = id;
		this.price = price;
	}

	addOneProduct(){
		if (sessionStorage.getItem(this.id)){
			let product = JSON.parse(sessionStorage.getItem(this.id))
			
			this.name = product.name
			this.id = product.id
			this.price = product.price
			this.quantity = product.quantity+1
			
			sessionStorage.setItem(this.id, JSON.stringify({name: this.name, quantity: this.quantity, id: this.id, price: this.price}))
		} else {
			sessionStorage.setItem(this.id, JSON.stringify({name: this.name, quantity: this.quantity, id: this.id, price: this.price}))
		}
	}

	deleteOneProduct(){
		let product = JSON.parse(sessionStorage.getItem(this.id))
		
		this.name = product.name
		this.id = product.id
		this.price = product.price
		this.quantity = product.quantity-1
		
		if (this.quantity != 0){
			sessionStorage.setItem(this.id, JSON.stringify({name: this.name, quantity: this.quantity, id: this.id, price: this.price}))
		} else {
			sessionStorage.removeItem(this.id)
		}
	}
}