window.addEventListener('load', () => {
  var img_1 = document.querySelector('#facebook');
  var img_2 = document.querySelector('#pinterest');
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
  img_4.addEventListener('mouseover', (e) => {
      e.srcElement.src = '../assets/icons/icon-twitter-hover.jpg';
  });
  img_4.addEventListener('mouseleave', (e) => {
    e.srcElement.src = '../assets/icons/twitter.jpg';
  });

  var form = document.forms[0];
  var inputs = [].slice.call(form.elements);
  var submit = inputs[inputs.length - 1];
  inputs.length = inputs.length - 1;
  checkInput(form, inputs, submit);
});
function checkInput(form, inputs, submit){
  var err = ['Fields can\'t be empty'];

  inputs.forEach(input => {
    input.addEventListener('focus', (e) => {
      e.target.style.border = '1px solid blue';
    });
    input.addEventListener('blur', (e) => {
      if (e.target.value.trim() == '') {
        input.placeholder = 'Required';
        input.style.border = '2px solid red';
      }
    });
  });

  if(submit){
    submit.addEventListener('click', (e) => {
      e.preventDefault();
      var i = 0;
      inputs.forEach(input => {
        if (input.value != '') {
          i++;
          if (i == inputs.length) {
            err.length = 0;
          }
        }
      });
      if (err.length > 0) {
        err.length = 1;
        alert(err);
      }else{
        form.submit();
      }
    });
  }
}
