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
  var img = document.querySelectorAll('.product-image');
  var imgItems = [].slice.call(img);
  var text_display = document.querySelectorAll('.more-info');
  var textItems = [].slice.call(text_display);
  var cart_btn = document.querySelectorAll('.btn-section');
  var cart_btns = [].slice.call(cart_btn);
  var add_to_cart_btn = document.querySelectorAll('.hidden-p');
  var add_to_cart_btns = [].slice.call(add_to_cart_btn);
  cardItems.forEach(card =>{
    card.addEventListener('mouseover', (e) => {
      imgItems.forEach(img =>{
        img.addEventListener('mouseover', (e) => {
          e.target.style.opacity = .5;
        });
      });
      textItems.forEach(text_display =>{
        text_display.addEventListener('mouseover', (e) => {
          e.target.style.display = 'block';
        });
      });
      cart_btns.forEach(cart_btn =>{
        cart_btn.addEventListener('mouseover', (e) => {
          e.target.style.borderLeft = '1px solid silver';
          e.target.style.backgroundColor = 'silver';
        });
      });
      add_to_cart_btns.forEach(add_to_cart_btn =>{
        add_to_cart_btn.addEventListener('mouseover', (e) => {
          e.target.style.color = '#000';
          e.target.style.fontWeight = 'bolder';
        });
      });
    });
    });
  cardItems.forEach(card =>{
    card.addEventListener('mouseleave', (e) => {
      imgItems.forEach(img =>{
        img.addEventListener('mouseleave', (e) => {
          e.target.style.opacity = 1;
        });
      });
      textItems.forEach(text_display =>{
        text_display.addEventListener('mouseleave', (e) => {
          e.target.style.display = 'none';
        });
      });
      cart_btns.forEach(cart_btn =>{
        cart_btn.addEventListener('mouseleave', (e) => {
          e.target.style.borderLeft = '';
          e.target.style.backgroundColor = '#fff';
        });
      });
      add_to_cart_btns.forEach(add_to_cart_btn =>{
        add_to_cart_btn.addEventListener('mouseleave', (e) => {
          e.target.style.color = '';
          e.target.style.fontWeight = '';
        });
      });
    });
  });
  // card.addEventListener('mouseover', (e) => {
  //   img.style.opacity = .5;
  //   text_display.style.display = 'block';
  //   cart_btn.style.borderLeft = '1px solid silver';
  //   cart_btn.style.backgroundColor = 'silver';
  //   add_to_cart_btn.style.color = '#000';
  //   add_to_cart_btn.style.fontWeight = 'bolder';
  // });
  // card.addEventListener('mouseleave', (e) => {
  //   img.style.opacity = 1;
  //   text_display.style.display = 'none';
  //   cart_btn.style.backgroundColor = '#fff';
  //   cart_btn.style.borderLeft = '';
  //   add_to_cart_btn.style.color = '';
  //   add_to_cart_btn.style.fontWeight = '';
  // });
});
