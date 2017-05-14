// script for New Products block

document.getElementById('arrow-left-np').onclick = sliderLeft;
var left = 0;

function sliderLeft () {
  var line = document.getElementById('gallery-np');
  left += 400;
  if ( left > 0 ) {
    left = 0;
  }
  line.style.left = left + 'px';
}

document.getElementById('arrow-right-np').onclick = sliderRight;

function sliderRight () {
  var line = document.getElementById('gallery-np');
  left -= 400;
  if ( left < -2400 ) {
    left = 0;
  }
  line.style.left = left + 'px';
}

// Script for Featured Products block

document.getElementById('arrow-left-fp').onclick = sliderLeftFp;
var left1 = 0;

function sliderLeftFp () {
  var line = document.getElementById('gallery-fp');
  left1 += 298;
  if ( left1 > 0 ) {
    left1 = 0;
  }
  line.style.left = left1 + 'px';
}

document.getElementById('arrow-right-fp').onclick = sliderRightFp;

function sliderRightFp () {
  var line = document.getElementById('gallery-fp');
  left1 -= 298;
  if ( left1 < -1192 ) {
    left1 = 0;
  }
  line.style.left = left1 + 'px';
}



