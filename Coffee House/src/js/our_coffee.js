const loadCoffee = async () => {
  const result = await fetch('db/db.json'); //Запрашивает данные
if (!result.ok){
  throw 'Ошибочка вышла:' + result.status // Исключение//
}
return  await result.json();



// Загрузка карточек из JSON
};
const cartOfCoffeeAll = document.querySelector('.cart_of_coffee_all');
  loadCoffee().then(json =>{
      json.coffee.forEach(coffee => {
          cartOfCoffeeAll.insertAdjacentHTML(
          'beforeend',
          `
          <div class="cart_of_coffee" data-category="${coffee.data_category}">
                          <a href="./about_it.html#${coffee.id}"><img src="${coffee.url}" alt="coffee" class="coffee_picture"></a>
                          <p class="coffee_name">${coffee.name}</p>
                          <div class="country">${coffee.country}</div>
                          <div class="price">${coffee.price}</div>
                          </div>
          `
          )
          })
  });


  
// Filter//
let filters = document.querySelectorAll('button[data-filter]');

for (let filter of filters) {
filter.addEventListener('click', function(e) {
  e.preventDefault();

  let categoryId = filter.getAttribute('data-filter');
  let card = document.querySelectorAll('.cart_of_coffee');

  card.forEach(function(c) {

    if (categoryId === 'All') {
      c.classList.remove('hide');
    } else {
      if ((c.getAttribute('data-category')) !== categoryId) {
        c.classList.add('hide');
      } else {
        c.classList.remove('hide');
      }
    }

    })

  }); 
}


//Live Search//

let cards = document.querySelectorAll('.cart_of_coffee')

let search= document.querySelector('#searchBar');

	search.oninput = function() {
		let value = this.value.trim();
		let list = document.querySelectorAll('.coffee_name');

		if (value) {
			list.forEach(elem => {
				if (elem.innerText.search(value) == -1) {
					elem.parentNode.classList.add('hide');
				}
			});
		} else {
			list.forEach(elem => {
				elem.parentNode.classList.remove('hide');
			});
		}
  }