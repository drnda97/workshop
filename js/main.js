window.addEventListener('scroll', (e) => {
  if(window.scrollY > 0){
    var navbar = document.querySelector('#nav');
    var logo = navbar.querySelector('#logo');
    logo.src = './assets/images/logo.png';
    navbar.style.backgroundColor = 'white';
    navbar.style.marginTop = '100px';
    navbar.style.padding = '10px';
    navbar.style.position = 'fixed';
  }
  if(window.scrollY == 0){
    var navbar = document.querySelector('#nav');
    var logo = navbar.querySelector('#logo');
    logo.src = './assets/images/logo1.png';
    navbar.style.display = 'block';
    navbar.style.backgroundColor = '';
    navbar.style.padding = '0';
    navbar.style.margin= '15px auto';
    navbar.style.position = '';
  }
});
window.addEventListener('load', (e) => {

  var img_1 = document.querySelector('#facebook');
  var img_2 = document.querySelector('#pinterest');
  var img_4 = document.querySelector('#twitter');
  img_1.addEventListener('mouseenter', (e) => {
    e.srcElement.src = './assets/icons/icon-facebook-hover.jpg';
  });
  img_1.addEventListener('mouseleave', (e) => {
    e.srcElement.src = './assets/icons/facebook.jpg';
  });
  img_2.addEventListener('mouseover', (e) => {
      e.srcElement.src = './assets/icons/icon-pinterest-hover.jpg';
  });
  img_2.addEventListener('mouseleave', (e) => {
    e.srcElement.src = './assets/icons/pinterest.jpg';
  });
  img_4.addEventListener('mouseover', (e) => {
      e.srcElement.src = './assets/icons/icon-twitter-hover.jpg';
  });
  img_4.addEventListener('mouseleave', (e) => {
    e.srcElement.src = './assets/icons/twitter.jpg';
  });
});
