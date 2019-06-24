window.addEventListener('load', () => {
  var link = document.querySelector('.edit');
  var main_div = document.querySelector('#main_profile');
  var secretDiv = document.querySelector('.secret');
  link.addEventListener('click', (e) => {
    e.preventDefault();
    secretDiv.classList = '';
    main_div.classList = 'secret';
  });
});
