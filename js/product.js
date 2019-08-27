window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    var top_btn = document.querySelector('#back-to-top');
    top_btn.style.display = 'block';
  }
  if (window.scrollY == 0) {
    var top_btn = document.querySelector('#back-to-top');
    top_btn.style.display = '';
  }
});
window.addEventListener('load', () => {
  var card = document.querySelectorAll('.card');
  var cardItems = [].slice.call(card);

  cardItems.forEach(card =>{
    card.addEventListener('mouseover', (e) => {
      card.querySelector('.more_info_btn').style.display = 'block';
      card.querySelector('.ext_cart_btn').style.display = 'block';
      card.querySelector('.product-image').style.opacity = '.5';
      card.querySelector('.product-btn').style.backgroundColor = 'silver';
      card.querySelector('.ext_cart_btn').style.fontWeight = 'bolder';

    });
  });
  cardItems.forEach(card =>{
    card.addEventListener('mouseleave', (e) => {
      card.querySelector('.more_info_btn').style.display = 'none';
      card.querySelector('.ext_cart_btn').style.display = 'none';
      card.querySelector('.product-image').style.opacity = '1';
      card.querySelector('.product-btn').style.backgroundColor = '#fff';
    });
   });

  var data = {
    fn: 'search_product'
  };
  var input_search = document.querySelector('[name="search"]');
  input_search.addEventListener('keyup', (e) => {
    var input_val = e.target.value;
    var data = {
      product_letters: input_val,
      fn: 'search_product'
    }
    makeAjaxProductRequest('get', 'http://localhost/igorjanosevic/workshop/products/searchForProduct', data);
  });

});
function makeAjaxProductRequest(method, url, payload = false){
  var xhr = new XMLHttpRequest();
  if (payload != false){
    if (method == 'get'){
      var cntr = 0;
      for (var key in payload){
        url += (++cntr == 1) ? '?'+key+'='+payload[key] : '&'+key+'='+payload[key];
      }
    }
  }
  xhr.open(method, url);
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {
      if (xhr.responseText == 'false') {
        alert('Greska');
      } else {
        var product_card = document.querySelectorAll('.card');
        product_cards = [].slice.call(product_card);
        product_cards.forEach(product_card => {
          product_card.classList.add('secret');
        });
        var add_after_this = document.querySelector('.add_after_this');
        var response = JSON.parse(xhr.responseText);
        for (var i = 0; i < response.length; i++) {
        	var product = response[i];
      		var new_card_html = `
              <div class="card">
                <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=${product.id}">
                  <img src="${product.img_url}" alt="product-image" class="product-image">
                </a>
                <h4>${product.description}</h4>
                <span>${product.price}  din</span>
                <section class="btn-section">
                  <a href="http://localhost/igorjanosevic/workshop/products/addToCart?id=${product.id}" class="product-btn"><i class="fas fa-shopping-cart"></i></a>
                  <a href="http://localhost/igorjanosevic/workshop/products/addToCart?id=${product.id}" class="hidden-p">Dodaj u</a>
                </section>
                <a href="http://localhost/igorjanosevic/workshop/products/oneproduct?id=${product.id}"><div class="more-info">More info</div></a>
              </div>
        		`;
        		add_after_this.insertAdjacentHTML('afterend', new_card_html);
        }
      }
    }
  }
  xhr.send();
}
