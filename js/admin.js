window.addEventListener('load', () => {
  var nav = document.querySelector('#nav');
  var secret_tr = document.querySelector('.secret');
  var addNewProduct = document.querySelector('.addNewProduct');
  var form = document.forms[0];
  addNewProduct.addEventListener('click', (e) => {
    e.preventDefault();
    secret_tr.classList = '';
    addNewProduct.classList.add('secret');
  });
  var user_tr = document.querySelector('.user_tr');
  console.log(user_tr);
  var user_form = document.querySelector('.user');
  var update_user = document.querySelector('.update_user');
  update_user.addEventListener('click', (e) => {
    e.preventDefault();
    user_form.classList = '';
    user_tr.classList.add('secret');
  });
});
