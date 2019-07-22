window.addEventListener('load', (e) => {
  var secret_tr = document.querySelector('.secret');
  var addNewProduct = document.querySelector('.addNewProduct');
  var form = document.forms[0];
  addNewProduct.addEventListener('click', (e) => {
    e.preventDefault();
    secret_tr.classList = '';
    addNewProduct.classList.add('secret');
  });
  var aside = document.querySelectorAll('.aside');
  console.log(aside);
});
