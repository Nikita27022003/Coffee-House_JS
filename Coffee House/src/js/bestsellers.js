const loadBestSellers = async () => {
    const result = await fetch('db/db.json'); //Запрашивает данные с сервера/
	if (!result.ok){
		throw 'Ошибочка вышла:' + result.status // Исключение//
	}
	return  await result.json();

};
const allCart = document.querySelector('.all_cart');
    loadBestSellers().then(json =>{
        json.bestsellers.forEach(bs => {
            allCart.insertAdjacentHTML(
            'beforeend',
            `
            <div class="cart">
            <a href ="./about_it.html#${bs.id}"><img src="${bs.url}" alt="Solimo Coffee" class="coffee"></a>
            <div class="cart_text">${bs.name}</div>
            <div class="cart_price">${bs.price}</div>
            </div>
            `
            )
            })
    });
    