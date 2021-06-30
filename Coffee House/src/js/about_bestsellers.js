const loadBestSellers = async () => {
  const result = await fetch('db/db.json'); //Запрашивает данные с сервера/
if (!result.ok){
  throw 'Ошибочка вышла:' + result.status // Исключение//
}
return  await result.json();

};




loadBestSellers().then(json =>{
  json.bestsellers.forEach(bs => {
    if (window.location.hash.replace('#','') === bs.id) {
    
      aboutItSection.insertAdjacentHTML(
      'beforeend',
      `
      <div class="container">
      <div class="row">
          <div class="col">
              <img src="${bs.url}" alt="person" class="coffee_section">
          </div>
          <div class="col">
              <div class="our_beans">About it</div>
              <div class="footer_beans">
                  <span> <img src="./src/img/main_page/beans dark.png" alt="Beans Dark" class="beans_dark"></span>
              </div>
              <p><b>Country:</b> ${bs.country}</p>
              <p class="description"><b>Description:</b> ${bs.description}</p>
              <div class="coffee_price">Price: <span class="price_span">${bs.price}</span>  
              </div>

          </div>
      </div>
      `
      
      )
    }
      })
});
