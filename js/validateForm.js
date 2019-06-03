window.addEventListener('load', () => {
  var form = document.querySelector('#adminform');
  var email = document.querySelector('[name="email"]');
  var username = document.querySelector('[name="username"]');
  var password = document.querySelector('[name="password"]');
  var small = document.querySelectorAll('.fail');
  var smallItem = [].slice.call(small);
  var btn = document.querySelector('[name="Submit"]');
  email.addEventListener('keyup', () => {
    if(!validateEmail(email.value)){
      smallItem[0].innerText = 'Email je u pogresnom formatu!';
    }else{
      smallItem[0].innerText = 'Email je u redu!';
      smallItem[0].style.color = 'green';
      smallItem[0].style.fontSize = '20px';
      smallItem[0].style.fontFamily = 'Noto Sans HK';
      smallItem[0].style.marginLeft = '280px';
    }
  });
  if (username.value.trim() == '') {
    smallItem[0].style.color = 'red';
    smallItem[0].style.fontSize = '20px';
    smallItem[0].style.marginLeft = '280px';
    smallItem[0].innerText = 'Polje je prazno';
    return;
  }
  if (email.value.trim() == '') {
    smallItem[1].innerHTMl = 'Polje je prazno';
    return;
  }
  if (password.value.trim() == '') {
    smallItem[2].innerHTMl = 'Polje je prazno';
    return;
  }
  btn.addEventListener('click', () => {
     form.submit();
  });
});
function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
//odradi password i username kada su u fokusu i popravi email da ne prikazuje gresku dok se ne klikne na polje.
