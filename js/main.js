window.addEventListener('load', (e) => {
  console.log(e);
  console.log(window.scrollY);

  var img_1 = document.querySelector('#facebook');
  var img_2 = document.querySelector('#pinterest');
  var img_3 = document.querySelector('#googleplus');
  var img_4 = document.querySelector('#twitter');
  img_1.addEventListener('mouseover', (e) => {
    e.srcElement.src = './assets/icons/icon-facebook-hover.jpg';
    setTimeout(()=>{
      e.srcElement.src = './assets/icons/facebook.jpg';
    }, 200);
  });
  img_2.addEventListener('mouseover', (e) => {
      e.srcElement.src = './assets/icons/icon-pinterest-hover.jpg';
      setTimeout(()=>{
        e.srcElement.src = './assets/icons/pinterest.jpg';
      }, 200);
  });
  img_3.addEventListener('mouseover', (e) => {
      e.srcElement.src = './assets/icons/icon-googleplus-hover.jpg';
      setTimeout(()=>{
        e.srcElement.src = './assets/icons/googleplus.jpg';
      }, 200);
  });
  img_4.addEventListener('mouseover', (e) => {
      e.srcElement.src = './assets/icons/icon-twitter-hover.jpg';
      setTimeout(()=>{
        e.srcElement.src = './assets/icons/twitter.jpg';
      }, 200);
  });
});
