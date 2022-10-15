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

// Header Popping Up When Scrolling Up
const body = document.body;
let lastScroll = 0;

window.addEventListener('scroll', () =>{
    const currentScroll = window.pageYOffset

    if (currentScroll <= 0){
        body.classList.remove("scroll-up")
    }

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")){
        body.classList.remove("scroll-up")
        body.classList.add("scroll-down")
    }

    if (currentScroll < lastScroll && body.classList.contains("scroll-down")){
        body.classList.remove("scroll-down")
        body.classList.add("scroll-up")
    }

    lastScroll = currentScroll;
})