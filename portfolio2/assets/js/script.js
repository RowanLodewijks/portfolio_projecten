// Canvas
var c = document.getElementById('canv');
var $ = c.getContext('2d');


var col = function(x, y, r, g, b) {
  $.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
  $.fillRect(x, y, 1,1);
}
var R = function(x, y, t) {
  return( Math.floor(50 + 10*Math.cos( (x*x-y*y)/300 + t )) );
}

var G = function(x, y, t) {
  return( Math.floor(150 + 60*Math.sin( (x*x*Math.cos(t/4)+y*y*Math.sin(t/3))/300 ) ) );
}

var B = function(x, y, t) {
  return( Math.floor(300 +30*Math.sin( 5*Math.sin(t/9) + ((x-100)*(x-100)+(y-100)*(y-100))/1100) ));
}

var t = 0;

var run = function() {
  for(x=0;x<=35;x++) {
    for(y=0;y<=35;y++) {
      col(x, y, R(x,y,t), G(x,y,t), B(x,y,t));
    }
  }
  t = t + 0.05;
  window.requestAnimationFrame(run);
}

run();

// Toggle Menu
window.addEventListener("load",function(){
  var button = document.querySelector('.menu_toggle');
  var menu = document.querySelector('.menu');

  button.addEventListener('click', function(){
    menu.classList.toggle('hidden');
  });
});

// Close Menu When Click On Link
function closeMenu() {
  var menu = document.querySelector('.menu');
  if (menu.style.display === "none") {
    // menu.style.display = "block";
    menu.classList.toggle('hidden');
  } else {
    // menu.style.display = "none";
    menu.classList.toggle('hidden');
  }
}