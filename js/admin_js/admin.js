window.addEventListener('load', () => {
  if (document.querySelector('.form-controll-desc')) {
    var cln = document.querySelector('.form-controll-desc').cloneNode(true);
  }
  var desc_form = document.querySelector('.desc_form');
  var add_new_desc_form_btn = document.querySelector('.add_new_desc_form_btn');
  if (add_new_desc_form_btn) {
    add_new_desc_form_btn.addEventListener('click', (e) => {
      e.preventDefault();
      desc_form.insertBefore(cln, add_new_desc_form_btn);
    });
  }

  var select = document.querySelectorAll('.nav_select');
  var selected_options = [];
  select.forEach(selected => {
    selected.addEventListener('change', () => {
      if (selected.value !== '') {
        selected_options.push(selected.value);
      }
    var selectedOption = selected.options[selected.selectedIndex]
    selectedOption.disabled = true;
  });

  });
});
