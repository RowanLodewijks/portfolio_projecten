// Toggle Menu
window.addEventListener("load",function(){
  var button = document.querySelector('.menu_toggle');
  var menu = document.querySelector('.menu');

  button.addEventListener('click', function(){
    menu.classList.toggle('hidden');
  });
});

// Stops Scrolling When In Menu
function lockScroll() {
  document.body.classList.toggle('lock-scroll');
  document.body.classList.toggle('stable');
}