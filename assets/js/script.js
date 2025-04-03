const products = [
  {
    "id": 1,
    "name": "Mens Winter Leathers Jackets",
    "category": "men",
    "price": 48.00,
    "del_price": 75.00,
    "star_count": 3,
    "image": "./assets/images/products/jacket-3.jpg",
    "alt_image": "./assets/images/products/jacket-4.jpg",
    "description": "Stay warm and stylish with this men's winter leather jacket. Made with premium materials for durability and comfort."
  },
  {
    "id": 2,
    "name": "Pure Garment Dyed Cotton Shirt",
    "category": "men",
    "price": 45.00,
    "del_price": 56.00,
    "star_count": 3,
    "image": "./assets/images/products/shirt-1.jpg",
    "alt_image": "./assets/images/products/shirt-2.jpg",
    "description": "This cotton shirt offers a relaxed fit with a classic design. The garment-dyed process ensures a soft texture and unisexque look."
  },
  {
    "id": 3,
    "name": "MEN Yarn Fleece Full-Zip Jacket",
    "category": "men",
    "price": 58.00,
    "del_price": 65.00,
    "star_count": 3,
    "image": "./assets/images/products/jacket-5.jpg",
    "alt_image": "./assets/images/products/jacket-6.jpg",
    "description": "A comfortable jacket with yarn fleece for excellent warmth and softness. Ideal for chilly weather."
  },
  {
    "id": 4,
    "name": "Black Floral Wrap Midi Skirt",
    "category": "women",
    "price": 25.00,
    "del_price": 35.00,
    "star_count": 5,
    "image": "./assets/images/products/clothes-3.jpg",
    "alt_image": "./assets/images/products/clothes-4.jpg",
    "description": "This floral wrap skirt has a stylish design and a comfortable fit. Great for both casual and semi-formal occasions."
  },
  {
    "id": 5,
    "name": "Casual Men's Brown shoes",
    "category": "men",
    "price": 99.00,
    "del_price": 105.00,
    "star_count": 5,
    "image": "./assets/images/products/shoe-2.jpg",
    "alt_image": "./assets/images/products/shoe-2_1.jpg",
    "description": "These casual brown shoes are perfect for everyday wear. Made with high-quality leather for durability and style."
  },
  {
    "id": 6,
    "name": "Apple Watch 7 - 2022",
    "category": "electronics",
    "price": 150.00,
    "del_price": 170.00,
    "star_count": 3,
    "image": "./assets/images/products/watch-3.jpg",
    "alt_image": "./assets/images/products/watch-4.jpg",
    "description": "Apple Watch 7 with advanced features for fitness and health tracking. Comes with a stylish design and various color options."
  },
  {
    "id": 7,
    "name": "Stainless Steel Men's Analog Watch",
    "category": "electronics",
    "price": 100.00,
    "del_price": 120.00,
    "star_count": 4,
    "image": "./assets/images/products/watch-1.jpg",
    "alt_image": "./assets/images/products/watch-2.jpg",
    "description": "A classic stainless steel analog watch for men. Offers a sleek design and reliable timekeeping."
  },
  {
    "id": 8,
    "name": "Womens Party Wear Shoes",
    "category": "women",
    "price": 25.00,
    "del_price": 30.00,
    "star_count": 3,
    "image": "./assets/images/products/party-wear-1.jpg",
    "alt_image": "./assets/images/products/party-wear-2.jpg",
    "description": "These party wear shoes for women add glamour to any outfit. Ideal for special events and parties."
  },
  {
    "id": 9,
    "name": "Mens Winter Leathers Jackets",
    "category": "men",
    "price": 32.00,
    "del_price": 45.00,
    "star_count": 4,
    "image": "./assets/images/products/jacket-1.jpg",
    "alt_image": "./assets/images/products/jacket-2.jpg",
    "description": "This winter jacket for men provides warmth and durability. Crafted from high-quality leather."
  },
  {
    "id": 10,
    "name": "Trekking & Running Shoes - black",
    "category": "unisex",
    "price": 58.00,
    "del_price": 64.00,
    "star_count": 3,
    "image": "./assets/images/products/sports-2.jpg",
    "alt_image": "./assets/images/products/sports-4.jpg",
    "description": "These shoes are suitable for both trekking and running. Sturdy construction with a sleek black design."
  },
  {
    "id": 11,
    "name": "Men's Leather Formal Wear shoes",
    "category": "men",
    "price": 50.00,
    "del_price": 65.00,
    "star_count": 4,
    "image": "./assets/images/products/shoe-1.jpg",
    "alt_image": "./assets/images/products/shoe-1_1.jpg",
    "description": "This sports jacket for men is lightweight and breathable. Ideal for outdoor activities and sports."
  },
  {
    "id": 12,
    "name": "Better Basics French Terry Sweatshorts",
    "category": "unisex",
    "price": 78.00,
    "del_price": 85.00,
    "star_count": 3,
    "image": "./assets/images/products/shorts-1.jpg",
    "alt_image": "./assets/images/products/shorts-2.jpg",
    "description": "This elegant party dress for women has a sophisticated design with a flattering silhouette. Perfect for formal events."
  },
  {
    "id": 13,
    "name": "Macbook Air M1 Chip",
    "category": "electronics",
    "price": 1199.00,
    "del_price": 1299.00,
    "star_count": 3,
    "image": "./assets/images/products/macbook-1.jpg",
    "alt_image": "./assets/images/products/macbook-1.jpg",
    "description": "Apple MacBook Air Laptop M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, FaceTime HD Camera, Touch ID."
  },
  {
    "id": 14,
    "name": "Apple iPhone 15 (128 GB) - Blue",
    "category": "electronics",
    "price": 999.00,
    "del_price": 1199.00,
    "star_count": 3,
    "image": "./assets/images/products/iphone-1.jpg",
    "alt_image": "./assets/images/products/iphone-1.jpg",
    "description": "Apple iPhone 15 (128 GB) - Blue, 48MP MAIN CAMERA WITH 2X TELEPHOTO, POWERHOUSE A16 BIONIC CHIP, DYNAMIC ISLAND COMES TO IPHONE 15."
  },
  {
    "id": 15,
    "name": "Relaxed Short Full Sleeve T-Shirt",
    "category": "women",
    "price": 45.00,
    "del_price": 12.00,
    "star_count": 4,
    "image": "./assets/images/products/clothes-1.jpg",
    "alt_image": "./assets/images/products/clothes-1.jpg",
    "description": "Rose gold earrings with a unique peacock design. Adds elegance and charm to any outfit."
  },
  {
    "id": 16,
    "name": "Girls Pink Embro Design Top",
    "category": "women",
    "price": 61.00,
    "del_price": 9.00,
    "star_count": 3,
    "image": "./assets/images/products/clothes-2.jpg",
    "alt_image": "./assets/images/products/clothes-2.jpg",
    "description": "A lightweight hooded jacket for women. Offers comfort and protection against the elements."
  },
  {
    "id": 17,
    "name": "Black Floral Wrap Midi Skirt",
    "category": "women",
    "price": 76.00,
    "del_price": 25.00,
    "star_count": 4,
    "image": "./assets/images/products/clothes-3.jpg",
    "alt_image": "./assets/images/products/clothes-3.jpg",
    "description": "Slim fit jeans for men. Made with durable denim and designed for a modern, streamlined look."
  },
  {
    "id": 18,
    "name": "Pure Garment Dyed Cotton Shirt",
    "category": "men",
    "price": 68.00,
    "del_price": 31.00,
    "star_count": 4,
    "image": "./assets/images/products/shirt-1.jpg",
    "alt_image": "./assets/images/products/shirt-1.jpg",
    "description": "Comfortable and durable running shoes. Suitable for both men and women, ideal for sports and exercise."
  },
  {
    "id": 19,
    "name": "MEN Yarn Fleece Full-Zip Jacket",
    "category": "Winter wear",
    "price": 61.00,
    "del_price": 11.00,
    "star_count": 4,
    "image": "./assets/images/products/jacket-5.jpg",
    "alt_image": "./assets/images/products/jacket-5.jpg",
    "description": "A stylish leather handbag for women. Crafted from high-quality leather with spacious compartments."
  },
  {
    "id": 20,
    "name": "Mens Winter Leathers Jackets",
    "category": "men",
    "price": 32.00,
    "del_price": 20.00,
    "star_count": 3,
    "image": "./assets/images/products/jacket-1.jpg",
    "alt_image": "./assets/images/products/jacket-1.jpg",
    "description": "Formal leather shoes for men. Perfect for business and formal occasions, with a sleek design."
  },
  {
    "id": 21,
    "name": "Mens Winter Leathers Jackets",
    "category": "men",
    "price": 32.00,
    "del_price": 20.00,
    "star_count": 3,
    "image": "./assets/images/products/jacket-3.jpg",
    "alt_image": "./assets/images/products/jacket-3.jpg",
    "description": "This summer maxi dress for women offers a flowing silhouette and a lightweight fabric. Ideal for summer outings."
  },
  {
    "id": 22,
    "name": "Better Basics French Terry Sweatshorts",
    "category": "unisex",
    "price": 20.00,
    "del_price": 10.00,
    "star_count": 3,
    "image": "./assets/images/products/shorts-1.jpg",
    "alt_image": "./assets/images/products/shorts-1.jpg",
    "description": "A classic baseball cap for men. Features an adjustable strap and durable material."
  },
  {
    "id": 23,
    "name": "Running & Trekking Shoes - White",
    "category": "unisex",
    "price": 49.00,
    "del_price": 15.00,
    "star_count": 4,
    "image": "./assets/images/products/sports-1.jpg",
    "alt_image": "./assets/images/products/sports-1.jpg",
    "description": "A gold necklace with a stunning emerald pendant. A perfect accessory to elevate any outfit."
  },
  {
    "id": 24,
    "name": "Trekking & Running Shoes - Black",
    "category": "unisex",
    "price": 78.00,
    "del_price": 36.00,
    "star_count": 4,
    "image": "./assets/images/products/sports-2.jpg",
    "alt_image": "./assets/images/products/sports-2.jpg",
    "description": "A casual polo shirt for men. Offers a classic design and comfortable fit for everyday wear."
  },
  {
    "id": 25,
    "name": "Womens Party Wear Shoes",
    "category": "women",
    "price": 94.00,
    "del_price": 42.00,
    "star_count": 4,
    "image": "./assets/images/products/party-wear-1.jpg",
    "alt_image": "./assets/images/products/party-wear-1.jpg",
    "description": "A cotton blouse for women. Lightweight and comfortable, perfect for casual and semi-formal wear."
  },
  {
    "id": 26,
    "name": "Sports Claw Women's Shoes",
    "category": "women",
    "price": 54.00,
    "del_price": 65.00,
    "star_count": 3,
    "image": "./assets/images/products/sports-3.jpg",
    "alt_image": "./assets/images/products/sports-3.jpg",
    "description": "Running shoes for men. Designed with breathable mesh and a durable sole for comfort during exercise."
  },
  {
    "id": 27,
    "name": "Air Trekking Shoes - White",
    "category": "unisex",
    "price": 52.00,
    "del_price": 55.00,
    "star_count": 3,
    "image": "./assets/images/products/sports-6.jpg",
    "alt_image": "./assets/images/products/sports-6.jpg",
    "description": "An elegant evening clutch for women. Features a sleek design with a secure clasp, ideal for special events."
  },
  {
    "id": 28,
    "name": "Boot With Suede Detail",
    "category": "men",
    "price": 20.00,
    "del_price": 30.00,
    "star_count": 3,
    "image": "./assets/images/products/shoe-3.jpg",
    "alt_image": "./assets/images/products/shoe-3.jpg",
    "description": "Casual sneakers for men. A versatile option for everyday wear, offering comfort and style."
  },
  {
    "id": 29,
    "name": "Men's Leather Formal Wear shoes",
    "category": "men",
    "price": 56.00,
    "del_price": 78.00,
    "star_count": 4,
    "image": "./assets/images/products/shoe-1.jpg",
    "alt_image": "./assets/images/products/shoe-1.jpg",
    "description": "A silk scarf for women. Adds a touch of elegance and color to any outfit."
  },
  {
    "id": 30,
    "name": "Casual Men's Brown shoes",
    "category": "men",
    "price": 50.00,
    "del_price": 55.00,
    "star_count": 3,
    "image": "./assets/images/products/shoe-2.jpg",
    "alt_image": "./assets/images/products/shoe-2.jpg",
    "description": "A classic leather belt for men. Sturdy and versatile, suitable for both casual and formal wear."
  },
  {
  "id": 31,
  "name": "Apple AirPods Pro (2nd Generation) with MagSafe Case (USB‑C) ​​​​​​​",
  "category": "electronics",
  "price": 50.00,
  "del_price": 34.00,
  "star_count": 0,
  "image": "./assets/images/products/ear-1.jpg",
  "alt_image": "./assets/images/products/ear-2.jpg",
  "description": "The EarPods (USB-C) also include a built-in remote that lets you adjust the volume, control the playback of music and video."
  },
  {
  "id": 32,
  "name": "Silver Deer Heart Necklace",
  "category": "women",
  "price": 84.00,
  "del_price": 30.00,
  "star_count": 0,
  "image": "./assets/images/products/jewellery-3.jpg",
  "alt_image": "./assets/images/products/jewellery-3.jpg",
  "description": "Formal black trousers for men. Ideal for business and formal occasions, offering a sleek and professional look."
  },
  {
  "id": 33,
  "name": "Titan 100 Ml Womens Perfume",
  "category": "women",
  "price": 42.00,
  "del_price": 10.00,
  "star_count": 0,
  "image": "./assets/images/products/perfume.jpg",
  "alt_image": "./assets/images/products/perfume.jpg",
  "description": "Gold stud earrings for women. Simple and elegant, suitable for everyday wear."
  },
  {
  "id": 34,
  "name": "Men's Leather Reversible Belt",
  "category": "men",
  "price": 24.00,
  "del_price": 10.00,
  "star_count": 0,
  "image": "./assets/images/products/belt.jpg",
  "alt_image": "./assets/images/products/belt.jpg",
  "description": "Sports sneakers in red for men. Offers durability and comfort for active lifestyles."
  },
  {
  "id": 35,
  "name": "Platinum Zircon Classic Ring",
  "category": "women",
  "price": 62.00,
  "del_price": 65.00,
  "star_count": 0,
  "image": "./assets/images/products/jewellery-2.jpg",
  "alt_image": "./assets/images/products/jewellery-2.jpg",
  "description": "High-heeled sandals for women. A stylish choice for formal events and parties."
  },
  {
  "id": 36,
  "name": "JBL Go 3",
  "category": "electronics",
  "price": 56.00,
  "del_price": 78.00,
  "star_count": 0,
  "image": "./assets/images/products/jbl.jpg",
  "alt_image": "./assets/images/products/jbl2.jpg",
  "description": "JBL Go 3, Wireless Ultra Portable Bluetooth Speaker, Pro Sound, Vibrant Colors with Rugged Fabric Design, Waterproof, Type C (Without Mic, Blue)"
  },
  {
  "id": 37,
  "name": "Shampoo Conditioner Packs",
  "category": "women",
  "price": 20.00,
  "del_price": 30.00,
  "star_count": 0,
  "image": "./assets/images/products/shampoo.jpg",
  "alt_image": "./assets/images/products/shampoo.jpg",
  "description": "Summer shorts for women. Lightweight and comfortable, ideal for warm weather."
  },
  {
  "id": 38,
  "name": "Rose Gold Peacock Earrings",
  "category": "women",
  "price": 20.00,
  "del_price": 30.00,
  "star_count": 0,
  "image": "./assets/images/products/jewellery-1.jpg",
  "alt_image": "./assets/images/products/jewellery-1.jpg",
  "description": "A formal leather briefcase for men. Offers ample storage and a sleek design for business professionals."
  }      
]



document.addEventListener('DOMContentLoaded', function() {
  const sliderContainer = document.querySelector('.slider-container');

  function scrollSlider() {
    const sliderItems = document.querySelectorAll('.slider-item');
    const currentIndex = Array.from(sliderItems).findIndex(item => item.getBoundingClientRect().left >= 0);
    const nextIndex = currentIndex === sliderItems.length - 1 ? 0 : currentIndex + 1;
    const nextItem = sliderItems[nextIndex];
    sliderContainer.scroll({
      left: nextItem.offsetLeft,
      behavior: 'smooth'
    });
  }

  setInterval(scrollSlider, 5000);
});

document.addEventListener('DOMContentLoaded', function() {
  const showcaseContainers = document.querySelectorAll('.showcase-wrapper');
  const showcaseContainer = showcaseContainers[showcaseContainers.length - 1]; // Select the last showcase-wrapper

  function scrollShowcase() {
    const showcaseItems = showcaseContainer.querySelectorAll('.showcase-container');
    const currentIndex = Array.from(showcaseItems).findIndex(item => item.getBoundingClientRect().left >= 0);
    const nextIndex = currentIndex === showcaseItems.length - 1 ? 0 : currentIndex + 1;
    const nextItem = showcaseItems[nextIndex];
    const scrollOffset = nextItem.offsetLeft - showcaseContainer.scrollLeft;
    showcaseContainer.scrollBy({
      left: scrollOffset,
      behavior: 'smooth'
    });
  }

  setInterval(scrollShowcase, 5000);
});



document.addEventListener("DOMContentLoaded", function() {
  var currencySelect = document.getElementById('currency-select');

  var originalPrices = {};
  var originalDelPrices = {};

  currencySelect.onchange = function selectPrice() {
      var prices = document.querySelectorAll('.price');
      var delPrices = document.querySelectorAll('del');

      if (currencySelect.value == "rup") {
          prices.forEach(function(priceElement, index) {
              var priceText = priceElement.textContent;
              var priceValue = parseFloat(priceText.slice(1));
              originalPrices[index] = priceText;
              priceElement.innerHTML = "&#8377;" + (priceValue * 85).toFixed(2);
          });

          delPrices.forEach(function(delPriceElement, index) {
              var delPriceText = delPriceElement.textContent;
              var delPriceValue = parseFloat(delPriceText.slice(1));
              originalDelPrices[index] = delPriceText;
              delPriceElement.innerHTML = "&#8377;" + (delPriceValue * 85).toFixed(2);
          });
      } else if (currencySelect.value == "usd") {
          prices.forEach(function(priceElement, index) {
              priceElement.innerHTML = originalPrices[index];
          });

          delPrices.forEach(function(delPriceElement, index) {
              delPriceElement.innerHTML = originalDelPrices[index];
          });
      }
  };

  
});

document.addEventListener('DOMContentLoaded', function(){
  let hours = document.querySelectorAll('.hour');
  let days = document.querySelectorAll('.day');
  let minutes = document.querySelectorAll('.minute');
  let seconds = document.querySelectorAll('.second');
  setInterval(function(){
    seconds.forEach(sec =>{
      if(parseInt(sec.textContent) <= 0){ 
        sec.textContent = 59;
        minutes.forEach(min =>{
          if(parseInt(min.textContent) <= 0){
            min.textContent = 59; 
            hours.forEach(hr =>{
              if(parseInt(hr.textContent) <= 0){
                hr.textContent = 24;
                days.forEach(dy =>{
                  if(parseInt(dy.textContent) <= 0){ 
                    dy.textContent = 0;
                  }
                  else{
                    dy.textContent--;
                  }
                })
              }
              else{
                hr.textContent--;
              }
            })
          }
          else{
            min.textContent--;
      }})
      }
      else{
        sec.textContent--;
      }
      sec.textContent = sec.textContent < 10 ? '0' + sec.textContent : sec.textContent;
    })
  }, 1000)
})


document.addEventListener('DOMContentLoaded', function(){
  window.onscroll = function() {myFunction()}; 
      
  var navlist = document.querySelector('.desktop-navigation-menu'); 
  var placeholder = document.querySelector('.header-main-placeholder');
  var sticky = navlist.offsetTop; 
  var navHeight = navlist.offsetHeight;

  /* Function to stick the nav bar */
  function myFunction() { 
      if (window.pageYOffset >= sticky) { 
          navlist.classList.add("sticky");
          placeholder.style.display = "block";
          document.body.style.paddingTop = navHeight + "px"; // Adjust body padding
      }  
      else { 
          navlist.classList.remove("sticky"); 
          placeholder.style.display = "none";
          document.body.style.paddingTop = 0; // Reset body padding
      } 
  }

})


// Define variables
let listProductHTML = document.querySelector('.product-grid');
let listCartHTML = document.querySelector('.listCart');
let iconCart = document.querySelector('.icon-cart');
let iconCartSpan = document.querySelector('.count-cart');
let body = document.querySelector('body');
let closeCart = document.querySelector('.close');
let cart = [];
let featuredProduct = document.querySelector('.product-featured');
// Toggle cart visibility
iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});

closeCart.addEventListener('click', () => {
    body.classList.remove('showCart');
});

// Add data to HTML
// const addDataToHTML = () => {
//     listProductHTML.innerHTML = ''; // Clear existing HTML
//     if (products.length > 0) {
//         products.forEach(product => {
//             let newProduct = createProductElement(product);
//             listProductHTML.appendChild(newProduct);
//         });
//     }
// };

// Create HTML element for product
// const createProductElement = (product) => {
//     let newProduct = document.createElement('div');
//     newProduct.classList.add('showcase');
//     newProduct.dataset.id = product.id;
//     newProduct.innerHTML = `
//         <div class="showcase-banner">
//             <img src="${product.image}" alt="${product.name}" width="300" class="product-img default">
//             <img src="${product.alt_image}" alt="${product.name}" width="300" class="product-img hover">
//             <div class="showcase-actions">
//                 <button class="btn-action">
//                     <ion-icon name="heart-outline"></ion-icon>
//                 </button>
//                 <button class="btn-action add-to-cart-btn">
//                     <ion-icon name="bag-add-outline"></ion-icon>
//                 </button>
//             </div>
//         </div>
//         <div class="showcase-content">
//             <a href="#" class="showcase-category">${product.category}</a>
//             <a href="#">
//                 <h3 class="showcase-title">${product.name}</h3>
//             </a>
//             <div class="showcase-rating">
//                 ${generateStarRating(product.star_count)}
//             </div>
//             <div class="price-box">
//                 <p class="price">$${product.price.toFixed(2)}</p>
//                 <del>$${product.del_price.toFixed(2)}</del>
//             </div>
//         </div>`;
//     return newProduct;
// };

//Generate star rating HTML
function generateStarRating(starCount) {
    let stars = '';
    for (let i = 0; i < starCount; i++) {
        stars += `<ion-icon name="star"></ion-icon>`;
    }
    for (let i = 0; i < 5 - starCount; i++) {
        stars += `<ion-icon name="star-outline"></ion-icon>`;
    }
    return stars;
}

// Event delegation for adding to cart
// document.addEventListener('DOMContentLoaded', function(){
//   listProductHTML.addEventListener('click', (event) => {
//     console.log("listproducthtml clicked")
//     let positionClick = event.target;
//     if (positionClick.classList.contains('add-to-cart-btn')) {
//         let showcaseElement = positionClick.closest('.showcase');
//         let id_product = showcaseElement.dataset.id;
//         addToCart(id_product);
//         console.log(id_product)
//     }
// });
// })
// document.addEventListener('DOMContentLoaded', function(){
//   featuredProduct.addEventListener('click', (event) => {
//     let positionClick = event.target;
//     console.log(positionClick)
//     if (positionClick.classList.contains('add-to-cart-btn')) {
//       console.log("add to cart pressed")
//         let showcaseElement = positionClick.closest('.showcase');
//         let id_product = showcaseElement.dataset.id;
//         addToCart(id_product);
//         console.log(id_product)
//     }
// });
// })
// Attach an event listener to the entire showcase element

// Add item to cart
const addToCart = (product_id) => {
  console.log(product_id)
    let positionThisProductInCart = cart.findIndex((value) => value.product_id == product_id);
    if (positionThisProductInCart < 0) {
        cart.push({
            product_id: product_id,
            quantity: 1
        });
    } else {
        cart[positionThisProductInCart].quantity += 1;
    }
    addCartToHTML();
    addCartToMemory();
    totalCartPriceElements = document.querySelectorAll('.totalPrice');
    updateTotalCartPrice();
    showNotification();
};

// Add cart items to local storage
const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(cart));
};

// Update cart HTML
const addCartToHTML = () => {
    listCartHTML.innerHTML = '';
    let totalQuantity = 0;
    if (cart.length > 0) {
        cart.forEach(item => {
            totalQuantity += item.quantity;
            let newItem = createCartItemElement(item);
            listCartHTML.appendChild(newItem);
        });
    }
    iconCartSpan.innerText = totalQuantity;
};
let height = document.querySelector('.modal-content').style.height;
let justify = document.querySelector('.modal-content').style.justifyContent;
function getCheckOut(){
  modal.style.display = "block";
  document.querySelector('.modal-content').style.height = "100px";
  document.querySelector('.modal-content').style.justifyContent = "space-around";
  if(listCartHTML.children.length > 0 ){
    document.getElementById('product-info').innerHTML = '';
    let newItem = document.createElement('div');
    newItem.classList.add('place-order');
    newItem.innerHTML = `
      <div class="check-content"
        <div class="check-text">Total Price</div>
        <div class="check-price"></div>
      </div class="check-btn">
        <button class='cancel' onclick="closeCheck()">Cancel</button>
        <button class='place' onclick="confirmCheck()">Place Order</button>
      </div>
      
    `
      document.getElementById('product-info').innerHTML = newItem.innerHTML;
      document.querySelector('.check-price').innerHTML = totalCartDisplay.innerHTML;
  }
  else{
    let temp = document.createElement('div');
     temp.innerHTML = `<div class="message">Cart is empty. Add items to cart to proceed.</div>`
    document.getElementById('product-info').innerHTML = temp.innerHTML;
  }
  
}
function closeCheck(){
  modal.style.display = "none";
}
function confirmCheck(){
  console.log('confirm order')
  document.getElementById('product-info').innerHTML =`
  <ion-icon name="checkmark-circle-outline" class="tick-mark"></ion-icon>  
  Your Order Has Been Placed.  
  <button class='cancel' onclick="closeCheck()">Cancel</button>
  `;
  cart=[];
  addCartToHTML();
  updateTotalCartPrice();
}
// Query for elements representing the prices of items in the cart
let totalCartPriceElements = document.querySelectorAll('.totalPrice');

// Select the element where the total cart price will be displayed
let totalCartDisplay = document.querySelector('.total-cart-price');

// Function to calculate and update the total cart price
const updateTotalCartPrice = () => {
    let totalCart = 0; // Reset the total cart price
    // Calculate the total price of all cart items
    console.log(totalCartPriceElements)
    totalCartPriceElements.forEach((cartItem) => {
        let cartPrice = parseFloat(cartItem.textContent.slice(1)); // Extract the price from the element
        totalCart += cartPrice; // Add the price to the total
        console.log("cart price"+cartPrice);
    });
    if(cart.length == 0){
      totalCart = 0;
    }
    // Update the displayed total cart price
    totalCartDisplay.textContent = '$' + totalCart.toFixed(2); // Keep two decimal places
};

// Event listener to handle changes that might affect the cart total
document.addEventListener('click', (event) => {
    // Check if the clicked element is a cart-related action
    if (
        event.target.classList.contains('add-to-cart-btn') ||
        event.target.classList.contains('minus') ||
        event.target.classList.contains('plus') 
    ) {
      console.log("idoifjsoi");
        updateTotalCartPrice(); // Update the total cart price
    }
});

// Call the function initially to set the correct total cart price
updateTotalCartPrice();


// Create HTML element for cart item
const createCartItemElement = (item) => {
    let positionProduct = products.findIndex((value) => value.id == item.product_id);
    let info = products[positionProduct];
    let newItem = document.createElement('div');
    newItem.classList.add('item');
    newItem.dataset.id = item.product_id;
    newItem.innerHTML = `
        <div class="image">
            <img src="${info.image}">
        </div>
        <div class="name">
            ${info.name}
        </div>
        <div class="totalPrice price">$${(info.price * item.quantity).toFixed(2)}</div>
        <div class="quantity">
            <span class="minus">&minus;</span>
            <span>${item.quantity}</span>
            <span class="plus">&plus;</span>
        </div>
    `;
    return newItem;
};

// Event delegation for changing cart quantity
listCartHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if (positionClick.classList.contains('minus') || positionClick.classList.contains('plus')) {
        let product_id = positionClick.parentElement.parentElement.dataset.id;
        let type = positionClick.classList.contains('plus') ? 'plus' : 'minus';
        changeQuantityCart(product_id, type);
    }
});

// Change quantity of items in cart
const changeQuantityCart = (product_id, type) => {
    let positionItemInCart = cart.findIndex((value) => value.product_id == product_id);
    if (positionItemInCart >= 0) {
        let info = cart[positionItemInCart];
        switch (type) {
            case 'plus':
                cart[positionItemInCart].quantity += 1;
                break;
            case 'minus':
                if (info.quantity > 1) {
                    cart[positionItemInCart].quantity -= 1;
                } else {
                    cart.splice(positionItemInCart, 1);
                }
                break;
        }
    }
    addCartToHTML();
    addCartToMemory();
    totalCartPriceElements = document.querySelectorAll('.totalPrice');
    updateTotalCartPrice();
};

// // Initialize the app
// const initApp = () => {
//     // Fetch product data
//     fetch('products.json')
//         .then(response => response.json())
//         .then(data => {
//             products = data;

//             // Retrieve cart data from local storage
//             if (localStorage.getItem('cart')) {
//                 cart = JSON.parse(localStorage.getItem('cart'));
//                 addCartToHTML();
//             }
//         });
// };

// // Call the initialization function
// initApp();

var modal = document.getElementById("myModal");
//var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close-modal")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  console.log("modal closed")
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function closeModal(){
  modal.style.display = "none";
}


const attachEventListeners = () =>{
  const showcases = document.querySelectorAll('.showcase');
  showcases.forEach(showcase => {
    showcase.addEventListener('click', function (event) {
      console.log("modal displayed");
      event.preventDefault();
      modal.style.display = "block";
      document.querySelector('.modal-content').style.height = height;
      document.querySelector('.modal-content').style.justifyContent = justify;
        const id = this.getAttribute('data-id'); // Get the data-id
        const product = products.find(p => p.id == id); // Find the matching product
  
        if (product) {
            // Build product information to display
            const productInfo = `
                <div class="info-banner"><img src="${product.image}" alt="Product Image" class="info-img" /></div>
                  <div class="info-content">
                  <div class="info-title">${product.name}</div>
                  <div class="info-desc">${product.description}</div>
                  <div class="info-rating">${generateStarRating(product.star_count)} &nbsp; ${product.star_count}</div>
                  <div class="info-category">${product.category}</div>
                  <div class="price-container"> 
                    <div class="price info-price">$${product.price.toFixed(2)}</div>
                    <del class="info-del price">$${product.del_price.toFixed(2)}</del>
                  </div>
                  <p class="info-info"> Inclusive of all taxes</p>
                  <div class="info-action"> 
                    <button class="add-to-fav" onclick="addToFav(${product.id})"><ion-icon name="heart-outline" role="img" class="md hydrated"
                    aria-label="heart outline"></ion-icon></button>
                    <button class="info-cart add-to-cart-btn" onclick="addToCart(${product.id})">
                        Add to Cart
                    </button>
                  </div>
                  
                  </div>
                <div class="close-modal-container"> <span class="close-modal" onclick="closeModal()">&times;</span> </div>
            `;
  
            // Insert the product information into the 'product-info' div
            document.getElementById('product-info').innerHTML = productInfo;
        } else {
            document.getElementById('product-info').innerHTML = 'Product not found';
        }
    });
  });
}
const showcases = document.querySelectorAll('.showcase');
showcases.forEach(showcase => {
  showcase.addEventListener('click', attachEventListeners)
});
// Loop through each element and add an event listener

const buttons = document.querySelectorAll('.add-to-cart-btn');
        buttons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.stopPropagation(); // Prevent the click from reaching the parent 'showcase'
        });
});
const buttons1 = document.querySelectorAll('.add-to-fav');
        buttons1.forEach(button => {
            button.addEventListener('click', function (e) {
                e.stopPropagation(); // Prevent the click from reaching the parent 'showcase'
        });
});

const getMensPage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
    <div class="container">
      <div class="product-box">
        <div class="prodcut-main">
          <h2 class="title">Men's Products</h2>
            <div class="product-grid"> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.category === 'men' || product.category == 'unisex') { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};
const createProductElement = (product) => {
    let newProduct = document.createElement('div');
    newProduct.classList.add('showcase');
    newProduct.dataset.id = product.id;
    newProduct.innerHTML = `
    <div class="showcase-banner">
            <img src="${product.image}" alt="${product.name}" width="300" class="product-img default">
            <img src="${product.alt_image}" alt="${product.name}" width="300" class="product-img hover">
            <div class="showcase-actions">
                <button class="btn-action  add-to-fav" onclick="addToFav(${product.id})">
                    <ion-icon name="heart-outline"></ion-icon>
                </button>
                <button class="btn-action add-to-cart-btn" onclick="addToCart(${product.id})">
                    <ion-icon name="bag-add-outline"></ion-icon>
                </button>
            </div>
        </div>
        <div class="showcase-content">
            <a href="#" class="showcase-category">${product.category}</a>
            <a href="#">
                <h3 class="showcase-title">${product.name}</h3>
            </a>
            <div class="showcase-rating">
                ${generateStarRating(product.star_count)}
            </div>
            <div class="price-box">
                <p class="price">$${product.price.toFixed(2)}</p>
                <del>$${product.del_price.toFixed(2)}</del>
            </div>
        </div>   
    `;
    return newProduct;
};
const getWomensPage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
      <div class="container">
        <div class="product-box">
  <div class="prodcut-main">
  <h2 class="title">Men's Products</h2>
  <div class="product-grid"> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.category === 'women' || product.category == 'unisex') { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};
const getElectronicsPage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
      <div class="container">
        <div class="product-box">
  <div class="prodcut-main">
  <h2 class="title">Electronic Products</h2>
  <div class="product-grid"> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.category === 'electronics') { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};
const getOffersPage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
      <div class="container">
        <div class="product-box">
  <div class="prodcut-main">
  <h2 class="title">Hot Offers</h2>
  <div class="product-grid"> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.price <=100) { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};
const getShoesPage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
      <div class="container">
        <div class="product-box">
  <div class="prodcut-main">
  <h2 class="title">Sport Shoes</h2>
  <div class="product-grid"> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.name.toLowerCase().includes("shoes")) { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};

const getSalePage = () => {
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = ''; // Clear existing HTML
  productMid.innerHTML = `
  <div class="product-container">
      <div class="container">
        <div class="product-box">
  <div class="prodcut-main">
  <h2 class="title">New Fashion Summer Sale</h2>
  <div class="product-grid"> 
  </div>
  </div>
  </div>
  </div>
  </div>
  </div> `;
  products.forEach(product => {
    let gridDisplay = document.querySelector('.product-grid');
      if (product.name.toLowerCase().includes("men") ||
          product.name.toLowerCase().includes("men's") ||
          product.name.toLowerCase().includes("women") ||
          product.name.toLowerCase().includes("women's")) { // Check category
          const newProduct = createProductElement(product);
          gridDisplay.appendChild(newProduct);
      }
  });
  attachEventListeners();
};
const getBlogPage = () =>{
  const productMid = document.querySelector('.display-mid');
  productMid.innerHTML = `<div class="blog">
  <div class="container">
    <div class="blog-container has-scrollbar">
      <div class="blog-card">
        <a href="#">
          <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
        </a>
        <div class="blog-content">
          <a href="#" class="blog-category">Fashion</a>
          <a href="#">
            <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
          </a>
          <p class="blog-meta">
            By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
          </p>
        </div>
      </div>
      <div class="blog-card">
      
        <a href="#">
          <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
            class="blog-banner" width="300">
        </a>
      
        <div class="blog-content">
      
          <a href="#" class="blog-category">Clothes</a>
      
          <h3>
            <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
          </h3>
      
          <p class="blog-meta">
            By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
          </p>
      
        </div>
      
      </div>
      <div class="blog-card">
      
        <a href="#">
          <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
            class="blog-banner" width="300">
        </a>
      
        <div class="blog-content">
      
          <a href="#" class="blog-category">Shoes</a>
      
          <h3>
            <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
          </h3>
      
          <p class="blog-meta">
            By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
          </p>
      
        </div>
      
      </div>
      <div class="blog-card">
      
        <a href="#">
          <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
            class="blog-banner" width="300">
        </a>
      
        <div class="blog-content">
      
          <a href="#" class="blog-category">Electronics</a>
      
          <h3>
            <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
          </h3>
      
          <p class="blog-meta">
            By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
          </p>
      
        </div>
      
      </div>
    </div>
  </div>
</div>`;
}

// Variables for Favourite Items
let listFavHTML = document.querySelector('.listfav');
let iconFav = document.querySelector('.icon-fav'); // Assuming you have a favorite icon
let iconFavSpan = document.querySelector('.count-fav');
let fav = [];
let closeFav = document.querySelector('.close-fav'); // Close button for the favorites section

// Toggle favorite visibility
iconFav.addEventListener('click', () => {
    body.classList.toggle('showFav'); // Class to toggle the favorite tab
    console.log("fav toggle")
});

closeFav.addEventListener('click', () => {
    body.classList.remove('showFav'); // Close the favorite tab
});

// Add item to favorites
const addToFav = (product_id) => {
    let positionThisProductInFav = fav.findIndex((value) => value.product_id === product_id);
    if (positionThisProductInFav < 0) {
        fav.push({
            product_id: product_id,
            quantity: 1
        });
    }
    showNotification();
    updateFavHTML();
    saveFavToMemory();
};

// Save favorite items to local storage
const saveFavToMemory = () => {
    localStorage.setItem('fav', JSON.stringify(fav));
};

// Update favorites HTML
const updateFavHTML = () => {
    listFavHTML.innerHTML = '';
    let cartCount = 0;
    if (fav.length > 0) {
        fav.forEach(item => {
          cartCount += item.quantity;
          console.log("cart count: "+cartCount);
            let newFavItem = createFavItemElement(item);
            listFavHTML.appendChild(newFavItem);
        });
    }
    iconFavSpan.innerText = cartCount;
};

// Create HTML element for favorite item
const createFavItemElement = (item) => {
    let positionProduct = products.findIndex((value) => value.id === item.product_id);
    let info = products[positionProduct];
    let newFavItem = document.createElement('div');
    newFavItem.classList.add('fav-item'); // Class name for favorite items
    newFavItem.dataset.id = item.product_id;
    newFavItem.innerHTML = `
        <div class="image">
            <img src="${info.image}" alt="${info.name}">
        </div>
        <div class="name">
            ${info.name}
        </div>
        <div> 
          <button class="removeFav" onclick="removeFromFav(${info.id})"><ion-icon name="trash-outline" class="fav-trash"></ion-icon></button>
        </div>
    `;
    return newFavItem;
};

// Event delegation for removing favorite items
// listFavHTML.addEventListener('click', (event) => {
//     if (event.target.classList.contains('removeFav')) {
//         let product_id = event.target.parentElement.dataset.id;
//         console.log("remove from fav");
//         removeFromFav(product_id);
//     }
//     if (event.target.classList.contains('fav-trash')) {
//       let temp = event.target.parentElement;
//       let product_id = temp.parentElement.dataset.id;
//       console.log("remove from fav");
//       removeFromFav(product_id);
//   }
// });

// Remove item from favorites
const removeFromFav = (product_id) => {
    console.log(product_id)
    let positionItemInFav = fav.findIndex((value) => value.product_id === product_id);
    if (positionItemInFav >= 0) {
        fav.splice(positionItemInFav, 1);
    }
    updateFavHTML();
    saveFavToMemory();
};

// Select the notification container
const notificationContainer = document.querySelector('.notification-container');

// Function to show the notification
function showNotification() {
  // Display the notification by adding the 'show' class
  notificationContainer.classList.add('show');
console.log("notification")
  // Hide the notification after 1 second
  setTimeout(() => {
    notificationContainer.classList.remove('show');
  }, 1000);
}
// Sample products array (JSON-like structure)
// Function to search for products based on the input in the search field
const searchProduct = () => {
  const searchField = document.querySelector('.search-field'); // Get the search field
  const searchQuery = searchField.value.trim().toLowerCase(); // Get the user's search query and convert to lowercase

  const results = products.filter(product =>
    product.name.toLowerCase().includes(searchQuery)
  ); // Find products that match the search query

    const productMid = document.querySelector('.display-mid');
    productMid.innerHTML = ''; // Clear existing HTML
    productMid.innerHTML = `
    <div class="product-container">
        <div class="container">
          <div class="product-box">
    <div class="prodcut-main">
    <h2 class="title">Searched Products</h2>
    <div class="product-grid search-results"> 
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> `;
    

  displaySearchResults(results); // Display the search results
  attachEventListeners();
};

// Function to display search results
const displaySearchResults = (results) => {
  const searchResultsContainer = document.querySelector('.search-results'); // Container to display results
  searchResultsContainer.innerHTML = ''; // Clear any existing results

  if (results.length === 0) {
    searchResultsContainer.innerHTML = 'No products found.'; // If no results
  } else {
    results.forEach(product => {
      const productElement = createProductElement(product); // Create the product element
      searchResultsContainer.appendChild(productElement); // Append it to the container
    });
  }
};

// Attach event listener to the search button
document.querySelector('.search-btn').addEventListener('click', searchProduct); // Execute search on button click

// Optional: Execute search when pressing Enter in the search field
document.querySelector('.search-field').addEventListener('keypress', (e) => {
  if (e.key === 'Enter') {
    searchProduct(); // Execute search when pressing Enter
  }
});
