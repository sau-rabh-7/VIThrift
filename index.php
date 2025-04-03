<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIThrift</title>
  <link rel="shortcut icon" href="./assets/images/logo/V.png" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/7c71b3cbda.js" crossorigin="anonymous"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Monoton&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - <span class="price">$55</span>
          </p>
        </div>
        <div class="header-top-actions">
          <select name="currency" id="currency-select">
            <option value="usd">USD &dollar;</option>
            <option value="rup">RUP &#8377;</option>
          </select>
          <select name="language">
            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>
          </select>
        </div>
      </div>
    </div>
  <!--
    - cart
  -->
    <div class="cartTab">
      <h1>Shopping Cart</h1>
      <div class="listCart">

      </div>
      <div class="total-price-section">
        <div class="total-cart-text">Total Price</div>
        <div class="total-cart-price">0.00</div>
      </div>
      <div class="btn">
        <button class="close">Close</button>
        <button class="checkOut" onclick="getCheckOut()">Check Out</button>
      </div>
    </div>

      <!--
    - fav
    -->
    <div class="favtab">
      <h1>Favourite Items</h1>
      <div class="listfav">

      </div>
      <div class="btn">
        <button class="close-fav">Close</button>
      </div>
    </div>

    <div class="nav-bar">
      <div class="header-main">
        <div class="container">
          <a class="website-title-logo" href="index.php">VIThrift</a>
          <div class="header-search-container">
            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
            <button class="search-btn" onclick="searchProduct()">
              <ion-icon name="search-outline"></ion-icon>
            </button>
          </div>
          <div class="header-user-actions">
            <a href="profile.php" class="action-btn">
              <ion-icon name="person-outline"></ion-icon>
            </a>
            <a href="#" class="action-btn icon-fav">
              <ion-icon name="heart-outline"></ion-icon>
              <span class="count-fav">0</span>
            </a>
            <a href="#" class="action-btn icon-cart">
              <ion-icon name="bag-handle-outline"></ion-icon>
              <span class="count-cart">0</span>
            </a>
          </div>
        </div>
      </div>
      <div class="header-main-placeholder"></div>
      <nav class="desktop-navigation-menu">
        <div class="container">
          <ul class="desktop-menu-category-list">
            <li class="menu-category">
              <a href="index.php" class="menu-title">Home</a>
            </li>
            <li class="menu-category">
              <a href="#" class="menu-title">Categories</a>
              <div class="dropdown-panel">
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <button onclick="getElectronicsPage()" class="print-page">Electronics</button>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Desktop</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Laptop</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Camera</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Tablet</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Headphone</a>
                  </li>
                  <li class="panel-list-item">

                  </li>
                </ul>
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <button onclick="getMensPage()" class="print-page">Men's</button>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Sports</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Jacket</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Sunglasses</a>
                  </li>
                  <li class="panel-list-item">

                  </li>
                </ul>
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <button onclick="getWomensPage()" class="print-page">Women's</button>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Perfume</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Cosmetics</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Bags</a>
                  </li>
                  <li class="panel-list-item">

                  </li>
                </ul>
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <button onclick="getElectronicsPage()" class="print-page">Appliances</button>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Fridge</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Smart TV</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Washing Machine</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Fan</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Air Conditioner</a>
                  </li>
                  <li class="panel-list-item">

                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-category">
              <button class="menu-title print-page" onclick="getMensPage()">Men's</button>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Shirt</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Shorts & Jeans</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Safety Shoes</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Wallet</a>
                </li>
              </ul>
            </li>
            <li class="menu-category">
              <button class="menu-title print-page" onclick="getWomensPage()">Women's</button>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Dress & Frock</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Earrings</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Necklace</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Makeup Kit</a>
                </li>
              </ul>
            </li>
            <li class="menu-category">
              <button onclick="getElectronicsPage()"class="menu-title print-page">Electronics</button>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Laptops</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Phones</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Watches</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Speaker</a>
                </li>
              </ul>
            </li>
            <li class="menu-category">
              <button onclick="getBlogPage()" class="menu-title">Blog</button>
            </li>
            <li class="menu-category">
              <button onclick="getOffersPage()" class="menu-title print-page">Hot Offers</button>
            </li>
          </ul>
      </nav>
    </div>
  </header>
  <!--
    - MAIN
  -->

  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content" id="product-info">
      <div class="modal-header">
        <span class="close-modal">&times;</span>
      </div>
    </div>

  </div>
  <div class="notification-container">
    <span class="notification"><ion-icon name="checkmark-circle-outline" class="tick-mark"></ion-icon>
     <span class="notification-text">Item Added Successfully.</span> 
    </span>
    
  </div>

  <main class="display-mid">

    <div class="preloader-container">
      <div class="preloader">
        <svg class="cart" role="img" aria-label="Shopping cart line animation" viewBox="0 0 128 128" width="128px"
          height="128px" xmlns="http://www.w3.org/2000/svg">
          <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
            <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
              <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
              <circle cx="43" cy="111" r="13" />
              <circle cx="102" cy="111" r="13" />
            </g>
            <g class="cart__lines" stroke="currentColor">
              <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                stroke-dasharray="338 338" stroke-dashoffset="-338" />
              <g class="cart__wheel1" transform="rotate(-90,43,111)">
                <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68"
                  stroke-dashoffset="81.68" />
              </g>
              <g class="cart__wheel2" transform="rotate(90,102,111)">
                <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68"
                  stroke-dashoffset="81.68" />
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <!--
      - BANNER
    -->
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Trending item</p>
              <h2 class="banner-title">Women's latest fashion sale</h2>
              <p class="banner-text">
                starting at <span class="price">&dollar; 20.00</span>
              </p>
              <button onclick="getWomensPage()" class="banner-btn banner-women">Shop now</button>
            </div>
          </div>
          <div class="slider-item">
            <img src="./assets/images/shoes.jpg" alt="modern sunglasses" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Trending accessories</p>
              <h2 class="banner-title" style="color: white;">Sports Shoes</h2>
              <p class="banner-text" style="color: white">
                starting at <span class="price">&dollar; 15.00</span>
              </p>
              <button onclick="getShoesPage()" class="banner-btn">Shop now</button>
            </div>
          </div>
          <div class="slider-item">
            <img src="./assets/images/couple-3.jpg" alt="new fashion summer sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Sale Offer</p>
              <h2 class="banner-title">New fashion summer sale</h2>
              <p class="banner-text">
                starting at <span class="price">&dollar; 29.99</span>
              </p>
              <button onclick="getSalePage()" class="banner-btn">Shop now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
      - CATEGORY
    -->

    <!--
      - PRODUCT
    -->
    <div class="product-container">
      <div class="container">
        <div class="product-box">
          <div class="product-minimal">
            <div class="product-showcase">
              <h2 class="title">New Arrivals</h2>
              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase" data-id="15">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt"
                        width="70" class="showcase-img">
                    </a>
                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                      </a>
                      <a href="#" class="showcase-category">Clothes</a>
                      <div class="price-box">
                        <p class="price">$45.00</p>
                        <del>$12.00</del>
                      </div>
                    </div>
                  </div>
                  <div class="showcase" data-id="16">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-2.jpg" alt="girls pink embro design top"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$9.00</del>
                      </div>

                    </div>

                  </div>
                  <div class="showcase" data-id="17">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap midi skirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$76.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>
                  <div class="showcase" data-id="18">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Mens Fashion</a>

                      <div class="price-box">
                        <p class="price">$68.00</p>
                        <del>$31.00</del>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="showcase-container">

                  <div class="showcase" data-id="19">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$11.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="20">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$32.00</p>
                        <del>$20.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="21">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Jackets</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="22">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>

                      <a href="#" class="showcase-category">Shorts</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>
              </div>
            </div>
            <div class="product-showcase">

              <h2 class="title">Trending</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase" data-id="23">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$49.00</p>
                        <del>$15.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="24">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$78.00</p>
                        <del>$36.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="25">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/party-wear-1.jpg" alt="womens party wear shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Party wear</a>

                      <div class="price-box">
                        <p class="price">$94.00</p>
                        <del>$42.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="26">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$54.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase" data-id="27">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$52.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="28">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <a href="#" class="showcase-category">boots</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="29">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">formal</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="30">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Casual</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>
            <div class="product-showcase">

              <h2 class="title">Top Rated</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase" data-id="31">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-3.jpg" alt="pocket watch leather pouch"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Smart Watch with Leather Strap</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="32">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>

                      <a href="#" class="showcase-category">Jewellery</a>

                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="33">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml womens perfume"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                      </a>

                      <a href="#" class="showcase-category">Perfume</a>

                      <div class="price-box">
                        <p class="price">$42.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="34">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>

                      <a href="#" class="showcase-category">Belt</a>

                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase" data-id="35">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$62.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="36">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Classic Analog Watch</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="37">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>

                      <a href="#" class="showcase-category">cosmetics</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase" data-id="38">

                    <a href="" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>

                      <a href="" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>
          </div>
          <!--
            - PRODUCT FEATURED
          -->
          <div class="product-featured">
            <h2 class="title">Deal of the day</h2>
            <div class="showcase-wrapper has-scrollbar">
              <div class="showcase-container">
                <div class="showcase" data-id="13">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/macbook-1.jpg" alt="shampoo, conditioner & facewash packs"
                      class="showcase-img">
                  </div>
                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <a href="#">
                      <h3 class="showcase-title">Macbook Air M1 Chip</h3>
                    </a>
                    <p class="showcase-desc">
                      Apple MacBook Air Laptop M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage,
                      Backlit Keyboard, FaceTime HD Camera, Touch ID. Works with iPhone/iPad; Silver
                    </p>
                    <div class="price-box">
                      <p class="price">$1199.00</p>
                      <del>$1299.00</del>
                    </div>
                    <button class="add-cart-btn add-to-cart-btn" onclick="addToCart(13)">add to cart</button>
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>
                        <p>
                          available: <b>40</b>
                        </p>
                      </div>
                      <div class="showcase-status-bar"></div>
                    </div>
                    <div class="countdown-box">
                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number day">05</p>
                          <p class="display-text">Days</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number hour">04</p>
                          <p class="display-text">Hours</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number minute">37</p>
                          <p class="display-text">Min</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number second">15</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="showcase-container">

                <div class="showcase" data-id="14">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/iphone-1.jpg" alt="Rose Gold diamonds Earring"
                      class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Apple iPhone 15 (128 GB) - Blue</a>
                    </h3>

                    <p class="showcase-desc">
                      Apple iPhone 15 (128 GB) - Blue, 48MP MAIN CAMERA WITH 2X TELEPHOTO, POWERHOUSE A16 BIONIC CHIP,
                      DYNAMIC ISLAND COMES TO IPHONE 15
                    </p>

                    <div class="price-box">
                      <p class="price">$999.00</p>
                      <del>$1199.00</del>
                    </div>

                    <button class="add-cart-btn add-to-cart-btn" onclick="addToCart(14)">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>

                        <p> available: <b>40</b> </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number day">03</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number hour">17</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number minute">25</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number second">47</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
          <!--
            - PRODUCT GRID
          -->
          <div class="product-main">
            <h2 class="title">New Products</h2>
            <div class="product-grid">
              <div class="showcase" data-id="1">
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(1)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(1)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="2">
                <div class="showcase-banner">
                  <img src="./assets/images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(2)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(2)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">shirt</a>
                  <a href="#">
                    <h3 class="showcase-title">Pure Garment Dyed Cotton Shirt</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$45.00</p>
                    <del>$56.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="3">
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(3)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(3)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>
                  <a href="#">
                    <h3 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                    <ion-icon name="star-outline" role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$58.00</p>
                    <del>$65.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="4">
                <div class="showcase-banner">
                  <img src="./assets/images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(4)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(4)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">skirt</a>
                  <a href="#">
                    <h3 class="showcase-title">Black Floral Wrap Midi Skirt</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$35.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="5">
                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-2.jpg" alt="Casual Men's Brown shoes" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(5)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(5)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">casual</a>
                  <a href="#">
                    <h3 class="showcase-title">Casual Men's Brown shoes</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$99.00</p>
                    <del>$105.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="6">
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-3.jpg" alt="Apple Watch 7 - 2022" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/watch-4.jpg" alt="Apple Watch 7 - 2022" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(6)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(6)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>
                  <a href="#">
                    <h3 class="showcase-title">Apple Watch 7 - 2022</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$150.00</p>
                    <del>$170.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="7">
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-1.jpg" alt="Stainless Steel Men's Analog Watch" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/watch-2.jpg" alt="Stainless Steel Men's Analog Watch" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(7)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(7)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">watches</a>
                  <a href="#">
                    <h3 class="showcase-title">Stainless Steel Men's Analog Watch</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star" role="img"
                      class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline" role="img"
                      class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$100.00</p>
                    <del>$120.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="8">
                <div class="showcase-banner">
                  <img src="./assets/images/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(8)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(8)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">party wear</a>
                  <a href="#">
                    <h3 class="showcase-title">Womens Party Wear Shoes</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$25.00</p>
                    <del>$30.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="9">
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-1.jpg" alt="Mens Winter Leathers Jackets" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(9)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(9)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">jacket</a>
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star" role="img"
                      class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline" role="img"
                      class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$32.00</p>
                    <del>$45.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="10">
                <div class="showcase-banner">
                  <img src="./assets/images/products/sports-2.jpg" alt="Trekking &amp; Running Shoes - black"
                    width="300" class="product-img default">
                  <img src="./assets/images/products/sports-4.jpg" alt="Trekking &amp; Running Shoes - black"
                    width="300" class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(10)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(10)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">sports</a>
                  <a href="#">
                    <h3 class="showcase-title">Trekking &amp; Running Shoes - black</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$58.00</p>
                    <del>$64.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="11">
                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" width="300"
                    class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(11)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(11)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">formal</a>
                  <a href="#">
                    <h3 class="showcase-title">Men's Leather Formal Wear shoes</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star" role="img"
                      class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline" role="img"
                      class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$50.00</p>
                    <del>$65.00</del>
                  </div>
                </div>
              </div>
              <div class="showcase" data-id="12">
                <div class="showcase-banner">
                  <img src="./assets/images/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts"
                    width="300" class="product-img default">
                  <img src="./assets/images/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts"
                    width="300" class="product-img hover">
                  <div class="showcase-actions">
                    <button class="btn-action add-to-fav" onclick="addToFav(12)">
                      <ion-icon name="heart-outline" role="img" class="md hydrated"
                        aria-label="heart outline"></ion-icon>
                    </button>
                    <button class="btn-action add-to-cart-btn" onclick="addToCart(12)">
                      <ion-icon name="bag-add-outline" role="img" class="md hydrated"
                        aria-label="bag add outline"></ion-icon>
                    </button>
                  </div>
                </div>
                <div class="showcase-content">
                  <a href="#" class="showcase-category">shorts</a>
                  <a href="#">
                    <h3 class="showcase-title">Better Basics French Terry Sweatshorts</h3>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon
                      name="star" role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star"
                      role="img" class="md hydrated" aria-label="star"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon><ion-icon name="star-outline"
                      role="img" class="md hydrated" aria-label="star outline"></ion-icon>
                  </div>
                  <div class="price-box">
                    <p class="price">$78.00</p>
                    <del>$85.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->
    <div>
      <div class="container">
        <div class="testimonials-box">
          <!--
            - TESTIMONIALS
          -->
          <div class="testimonial">
            <h2 class="title">testimonial</h2>
            <div class="testimonial-card">
              <img src="./assets/images/testimonial-3.jpg" alt="alan doe" class="testimonial-banner" width="80"
                height="80">
              <p class="testimonial-name">Saurabh Sharma</p>
              <p class="testimonial-title">CEO & Founder Invision</p>
              <img src="./assets/images/icons/quotes-green.svg" alt="quotation" class="quotation-img" width="60">
              <p class="testimonial-desc">
                I just wanted to share a quick note and let you know that you guys do a really good job.
                I'm glad I decided to work with you. It's really great how easy your websites are to update and manage.
                I never have any problem at all.
              </p>
            </div>
          </div>
          <!--
            - CTA
          -->
          <div class="cta-container">
            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">25% Discount</p>
              <h2 class="cta-title">Summer collection</h2>
              <p class="cta-text">Starting @ <span class="price">$10</span></p>
              <button class="cta-btn" onclick="getSalePage()">Shop now</button>
            </a>
          </div>
          <!--
            - SERVICE
          -->
          <div class="service">
            <h2 class="title">Our Services</h2>
            <div class="service-container">
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over <span class="price">$100</span></p>
                </div>
              </a>
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>

              </a>
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>

                </div>

              </a>
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>

                </div>

              </a>
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over <span class="price">$120</span></p>

                </div>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--
    - FOOTER
  -->
  <footer>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>
        </ul>
        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>
        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>

        </ul>
        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>
        </ul>
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>
          <li>
            <ul class="social-link">
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
        <p class="copyright">
          Copyright &copy; all rights reserved.
        </p>
      </div>
    </div>
  </footer>
  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>