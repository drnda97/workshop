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
  var card = document.querySelectorAll('.card');
  var cardItems = [].slice.call(card);
  var img = document.querySelectorAll('.product-image');
  var text_display = document.querySelectorAll('.more-info');
  var cart_btn = document.querySelectorAll('.btn-section');
  var add_to_cart_btn = document.querySelectorAll('.hidden-p');
  for (let i = 0; i <= cardItems.length; i++){
    console.log(cardItems[i]);
    cardItems[i].addEventListener('mouseover', (e) => {
      for (let j = 0; j <= img.length; j++){
        img[j].addEventListener('mouseover', (e) => {
          img[j].style.opacity = 0.5;
        });
      for (let k = 0; k <= text_display.length; k++){
        text_display[k].addEventListener('mouseover', (e) => {
          text_display.style.display = 'block';
        });
      }
      for (let a = 0; a <= cart_btn.length; a++){
        cart_btn[a].addEventListener('mouseover', (e) => {
          cart_btn.style.borderLeft = '1px solid silver';
          cart_btn.style.backgroundColor = 'silver';
        });
      }
      for (let p = 0; p <= add_to_cart_btn.length; p++){
        add_to_cart_btn[p].addEventListener('mouseover', (e) => {
          add_to_cart_btn.style.color = '#000';
          add_to_cart_btn.style.fontWeight = 'bolder';
        });
      }
    }
    });
  }
  card.addEventListener('mouseover', (e) => {
    text_display.style.display = 'block';
    cart_btn.style.borderLeft = '1px solid silver';
    cart_btn.style.backgroundColor = 'silver';
    add_to_cart_btn.style.color = '#000';
    add_to_cart_btn.style.fontWeight = 'bolder';
  });
  card.addEventListener('mouseleave', (e) => {
    img.style.opacity = 1;
    cart_btn.style.backgroundColor = '#fff';
    text_display.style.display = 'none';
    cart_btn.style.borderLeft = '';
    add_to_cart_btn.style.color = '';
    add_to_cart_btn.style.fontWeight = '';
  });
  // var link = document.querySelector('.edit');
  // var main_div = document.querySelector('#main_profile');
  // var secretDiv = document.querySelector('.secret');
  // link.addEventListener('click', (e) => {
  //   e.preventDefault();
  //   secretDiv.classList = '';
  //   main_div.classList = 'secret';
  // });
  // console.log(linkItem);
});
