window.addEventListener('load', (e) => {
  var secret_tr = document.querySelector('.secret');
  var addNewProduct = document.querySelector('.addNewProduct');
  var form = document.forms[0];
  addNewProduct.addEventListener('click', (e) => {
    e.preventDefault();
    secret_tr.classList = '';
    addNewProduct.classList.add('secret');
  });

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
