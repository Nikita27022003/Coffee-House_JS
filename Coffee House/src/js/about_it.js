const loadCoffee = async () => {
    const result = await fetch('db/db.json'); //Запрашивает данные с сервера/
	if (!result.ok){
		throw 'Ошибочка вышла:' + result.status // Исключение//
	}
	return  await result.json();

};
const aboutItSection = document.querySelector('.about_it_section');

loadCoffee().then(json =>{
    json.coffee.forEach(name => {
      if (window.location.hash.replace('#','') === name.id) {
      
        aboutItSection.insertAdjacentHTML(
        'beforeend',
        `
        <div class="container">
        <div class="row">
            <div class="col">
                <img src="${name.url}" alt="person" class="coffee_section">
            </div>
            <div class="col">
                <div class="our_beans">About it</div>
                <div class="footer_beans">
                    <span> <img src="./src/img/main_page/beans dark.png" alt="Beans Dark" class="beans_dark"></span>
                </div>
                <p><b>Country:</b> ${name.country}</p>
                <p class="description"><b>Description:</b> ${name.description}</p>
                <div class="coffee_price">Price: <span class="price_span">${name.price}</span>  
                </div>
            </div>
        </div>
        `
        
        )
      }
        })
});