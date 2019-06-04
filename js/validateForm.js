window.addEventListener('load', () => {
  var form = document.querySelector('#adminform');
  var email = document.querySelector('[name="email"]');
  var username = document.querySelector('[name="username"]');
  var password = document.querySelector('[name="password"]');
  var btn = document.querySelector('[name="Submit"]');
  console.log(form.username);
  if(!validateEmail(email.value)){
    alert('Email je u pogresan!');
    return false;
  }
  if(!checkPassword(password.value)){
    alert('Lozinka je u pogresna!');
    return false;
  }
  if(!checkUsername(form)){
    return false;
  }
  btn.addEventListener('click', () => {
    form.submit();
  });
});
function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
function checkPassword(str)
 {
   // at least one number, one lowercase and one uppercase letter
   // at least six characters that are letters, numbers or the underscore
   var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
   return re.test(str);
 }
 function checkUsername(form){
   if(form.username.value == "") {
     alert("Error: Username cannot be blank!");
     form.username.focus();
     return false;
   }
   re = /^\w+$/;
   if(!re.test(form.username.value)) {
     alert("Error: Username must contain only letters, numbers and underscores!");
     form.username.focus();
     return false;
   }
 }
