window.addEventListener('load', (e) => {
  var user_tr = document.querySelector('.user_tr');
  var user_form = document.querySelector('.user');
  var update_user = document.querySelector('.update_user');
  update_user.addEventListener('click', (e) => {
    e.preventDefault();
    user_form.classList = '';
    user_tr.classList.add('secret');
  });
});
