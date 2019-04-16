window.addEventListener('load', () => {
  var img_1 = document.querySelector('#facebook');
  var img_2 = document.getElementById('pinterest');
  var img_3 = document.getElementById('googleplus');
  var img_4 = document.getElementById('twitter');
  img_1.addEventListener('mouseover', () => {
    img_1.src = './assets/icons/icon-facebook-hover.jpg';
  });
  console.log(img_1);
});
