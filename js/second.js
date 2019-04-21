window.addEventListener('load', () => {
  var img_1 = document.querySelector('#facebook');
  console.log(img_1);
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

});
