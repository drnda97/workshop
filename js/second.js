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
  var img_1 = document.querySelector('#facebook');
  var img_2 = document.querySelector('#pinterest');
  var img_3 = document.querySelector('#googleplus');
  var img_4 = document.querySelector('#twitter');
  img_1.addEventListener('mouseenter', (e) => {
    e.srcElement.src = '../assets/icons/icon-facebook-hover.jpg';
  });
  img_1.addEventListener('mouseleave', (e) => {
    e.srcElement.src = '../assets/icons/facebook.jpg';
  });
  img_2.addEventListener('mouseover', (e) => {
      e.srcElement.src = '../assets/icons/icon-pinterest-hover.jpg';
  });
  img_2.addEventListener('mouseleave', (e) => {
    e.srcElement.src = '../assets/icons/pinterest.jpg';
  });
  img_3.addEventListener('mouseover', (e) => {
      e.srcElement.src = '../assets/icons/icon-googleplus-hover.jpg';
  });
  img_3.addEventListener('mouseleave', (e) => {
    e.srcElement.src = '../assets/icons/googleplus.jpg';
  });
  img_4.addEventListener('mouseover', (e) => {
      e.srcElement.src = '../assets/icons/icon-twitter-hover.jpg';
  });
  img_4.addEventListener('mouseleave', (e) => {
    e.srcElement.src = '../assets/icons/twitter.jpg';
  });
  // var card = document.querySelector('.card');
  // var img = document.querySelector('.product-image');
  // var text_display = document.querySelector('.more-info');
  // var cart_btn = document.querySelector('.btn-section');
  // var add_to_cart_btn = document.querySelector('.hidden-p');
  // cardItems.forEach(card =>{
  // });
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
  //   cart_btn.style.backgroundColor = '#fff';
  //   text_display.style.display = 'none';
  //   cart_btn.style.borderLeft = '';
  //   add_to_cart_btn.style.color = '';
  //   add_to_cart_btn.style.fontWeight = '';
  // });
  var link = document.querySelector('.edit');
  var main_div = document.querySelector('#main_profile');
  var secretDiv = document.querySelector('.secret');
  link.addEventListener('click', (e) => {
    e.preventDefault();
    secretDiv.classList = '';
    main_div.classList = 'secret';
  });
});
