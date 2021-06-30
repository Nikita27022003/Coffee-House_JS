const loadGoods = async () => {
    const result = await fetch('db/db.json'); //Запрашивает данные
	if (!result.ok){
		throw 'Ошибочка вышла:' + result.status // Исключение//
	}
	return  await result.json();

};
const cartOfCoffeePleasure = document.querySelector('.cart_of_coffee_pleasure');
    loadGoods().then(json =>{
        json.goods.forEach(goods => {
            cartOfCoffeePleasure.insertAdjacentHTML(
            'beforeend',
            `
            <div class="cart_of_coffee">
                    <img src="${goods.url}" alt="coffee" class="coffee_picture">
                    <div class="coffee_name">${goods.name}</div>
                    <div class="price">${goods.price}</div>
                    </div>
            `
            )
            })
    });