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

/* .lock-scroll{
  overflow: hidden;
}

.lock-scroll .banner,
.lock-scroll main,
.lock-scroll footer {
  visibility: visible;
  opacity: .68;
  -webkit-transition: opacity .3s cubic-bezier(0.6,0,0.4,1);
  transition: opacity .3s cubic-bezier(0.6,0,0.4,1);
} */



//products
let featuredGrid = document.querySelector(".featured_grid"); 
  for (let i = 0; i < 4; i++) {
    featuredGrid.innerHTML += '<div class="product_item"><img src="./assets/img/placeholder.png"><h4>Title 1</h4><div class="stars"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-half"></ion-icon><ion-icon name="star-outline"></ion-icon></div><p>Price</p><a href="./product.php"><button>Buy Now</button></a></div>'
}
{/* <div class="feature_item">
      <img src="./assets/img/placeholder.png">
      <h4>Title 1</h4>
      <div class="stars">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star-half"></ion-icon>
        <ion-icon name="star-outline"></ion-icon>
      </div>
      <p>Price</p>
      <a href="./product.php"><button>Buy Now</button></a>
    </div> */}


let productGrid = document.querySelector(".product_grid"); 
for (let i = 0; i < 12; i++) {
  productGrid.innerHTML += '<div class="product_item"><img src="./assets/img/placeholder.png"><h4>Title 1</h4><div class="stars"><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-half"></ion-icon><ion-icon name="star-outline"></ion-icon></div><p>Price</p><a href="./product.php"><button>Buy Now</button></a></div>'
}
{/* <div class="product_item">
      <img src="./assets/img/placeholder.png">
      <h4>Title 1</h4>
      <div class="stars">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star-half"></ion-icon>
        <ion-icon name="star-outline"></ion-icon>
      </div>
      <p>Price</p>
      <button>Add To Cart</button>
    </div> */}