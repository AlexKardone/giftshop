// Drop down menu for adaptive

window.onload = function () {
  document.getElementById('menu-icon-id').onclick = function () {
    openbox ('adaptive-menu__block-id', this);
    return false;
  };
};

function openbox (id, toggler) {
  var div = document.getElementById(id);
  if (div.style.display == 'block') {
    div.style.display = 'none';
  } else {
    div.style.display = 'block';
  }
};