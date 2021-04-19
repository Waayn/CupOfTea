let priceCart = document.getElementById('prix-panier')
let totalCart = 0
let calcul
let keys = Object.keys(sessionStorage);

if (keys.length != 0){
	for(let i=0; i < keys.length; i++) {
			calcul = JSON.parse(sessionStorage.getItem(keys[i]))
			totalCart = totalCart + (Number(calcul.price)) * (Number(calcul.quantity))
	}
}

totalCart = totalCart*100
totalCart = Math.round(totalCart)/100
totalCart = parseFloat(totalCart).toFixed(2)

priceCart.textContent = totalCart+"€"
