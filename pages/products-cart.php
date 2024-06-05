<?php
$path = "../widgets/";
$header = $path . "header_pages.php";
$nav = $path . "nav_pages.php";
$addtocart = $path . "addtocart.php";
$footer = $path . "footer_pages.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Changs Gadget | Check out</title>
  <link rel="shortcut icon" href="../assets/HL.png" type="image/x-icon" />
  <link rel="stylesheet" href="../styles/products-cart.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <div class="container">
    <header>
      <?php include ($header) ?>
      <?php include ($nav) ?>
    </header>

    <nav>
    </nav>

    <main>
      <div class="products">
        
        <div class="products-cart">
          <div class="products-image">
            <img src="assets/products/iphone-13-pro-space-gray.png" alt="">
          </div>
          <div class="products-details p-4">
            <div class="products-info">
              <h2>iPhone 13 Pro | 256GB | Space Gray</h2>
              <p>Brand new iPhone 13 Pro with 256GB storage in Space Gray. Includes free accessories.</p>
              <div class="products-ratings">
                <img src="assets/ratings/ratings-4star.png" alt="">
                <p> 23 reviews</p>
              </div>
              <div class="products-price">
                <h3>Php 8,999</h3>
                <p>Php 10,999</p>
              </div>
            </div>
            <div class="products-variation">
              <div class="color">
                <div class="color-title">
                  <h3>COLOR FAMILY</h3>
                  <div class="color-chosen">
                    <p>Space Gray</p>
                  </div>
                </div>
                <div class="color-choices">
                  <div class="color-option">
                    <div class="color-chosen">
                      <p><button>Space Gray</button></p>
                    </div>
                    <p><button>Space Gray</button></p>
                  </div>
                </div>
              </div>
              <div class="storage">
                <div class="storage-title">
                  <h3>STORAGE CAPACITY</h3>
                  <div class="storage-chosen">
                    <p>128GB</p>
                  </div>
                </div>
                <div class="storage-choices">
                  <div class="storage-option">
                    <p><button>64GB</button></p>
                    <p><button>128GB</button></p>
                    <div class="storage-chosen">
                      <p><button>256GB</button></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="quantity">
                <div class="quantity-title">
                  <h3>QUANTITY</h3>
                </div>
                <div class="quantity-selection">
                  <div id="product_qty_selection" class="input-group">

                    <span class="input-group-btn">
                      <button class="btn btn-default btn-subtract" type="button">-</button>
                    </span>

                    <input type="number" class="form-control-input" min="0" value="1">

                    <span class="input-group-btn">
                      <button class="btn btn-default btn-add" type="button">+</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="products-cta">
                <button class="cta-buynow">BUY NOW</button>
                <button class="cta-addtocart">ADD TO CART</button>
              </div>

            </div>
          </div>

        </div>

        <div class="additional-products">
          <div class="products-title">
            <h2>YOU MAY ALSO LIKE</h2>
            <div class="line-parent">
              <div class="line"></div>
            </div>
          </div>

          <!-- CARD BOX ROW 1-->
          <div class="cardbox">
            <!-- PRODUCT 1 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 2 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 3 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 4 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
          </div>

          <!-- CARD BOX ROW 2-->
          <div class="cardbox">
            <!-- PRODUCT 1 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 2 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 3 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
            <!-- PRODUCT 4 -->
            <div class="card">
              <button class="card-button">
                <div class="card-image">
                  <img src="assets/products/iphone-11-yellow-128.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                  <div class="card-body-child">
                    <div class="card-category">
                      <p>Category</p>
                    </div>
                    <div class="card-productname">
                      <h2>iPhone 11 | 128GB | Yellow</h2>
                    </div>
                    <div class="card-rating">
                      <img src="assets/ratings/ratings-4star.png" alt="">
                      <p> 4 reviews</p>
                    </div>
                    <div class="card-price">
                      <p class="d4price">Php 8,999</h3>
                      <p class="r4price">Php 10,999</p>
                    </div>
                  </div>
                </div>
              </button>
            </div>
          </div>

          <div class="line-parent">
            <div class="line"></div>
          </div>
        </div>
        <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
    </main>
    <!-- FOOTER -->
    <footer>
      <script src="../script/main.js"></script>
      <div class="page-footer">
        <div class="item item-footer">
          <div class="flex-box">
            <div class="footer-box f-logo">
              <img class="logo" src="assets/HL.png" alt="logo">

              <p class="about">Premium Apple & Android products, expert repairs, unlocking services,
                and accessories located at Prk. Cervantes, Mabini Street, Tagum City, Davao del Norte.</p>

            </div>
            <div class="footer-box f-home">
              <h3>HOME</h3>

              <div class="f-links">
                <ul>
                  <?php
                  foreach ($menu1 as $i) {
                    ?>
                    <li><a href="#">
                        <?= $i ?>
                      </a></li>
                    <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
            <div class="footer-box f-categories">
              <h3>CATEGORIES</h3>

              <div class="f-links">
                <ul>
                  <?php
                  foreach ($menu2 as $i) {
                    ?>
                    <li><a href="#">
                        <?= $i ?>
                      </a></li>
                    <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
            <div class="footer-box f-contact">
              <h3>CONTACT US</h3>

              <div class="contact-box">
                <div class="contacts">
                  <div class="icon">
                    <img src="assets/call.png" alt="call icons">
                  </div>

                  <div class="info">
                    <b>Contact us:</b><br>
                    (+63) 906-747-4104</button></p>
                  </div>
                </div>

                <div class="contacts">
                  <div class="icon">
                    <img src="assets/operation-hours.png" alt="call icons">
                  </div>

                  <div class="info">
                    <p><b>Operating Hours:</b><br>
                      9:00 AM - 7:00 AM</button></p>
                  </div>
                </div>

                <div class="contacts">
                  <div class="icon">
                    <img src="assets/address.png" alt="call icons">
                  </div>

                  <div class="info">
                    <p><b>Address:</b><br>
                      Prk. Cervantes, Mabini Street, Tagum City
                      (Near Jalee Pharmacy / Aquino Hospital) <br></button></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex-box">
            <div class="mapouter-box">
              <div class="gmaps">
                <h2>FOLLOW US:</h2>
              </div>
              <div class="gmaps2">
                <button>
                  <img src="assets/instagram.png" alt="" class="icons">
                </button>
                <button>
                  <img src="assets/facebook.png" alt="" class="icons">
                </button>
                <button>
                  <img src="assets/twitter-x.png" alt="" class="icons">
                </button>
              </div>
            </div>
          </div>
          <div class="flex-box">
            <footer class="footer-bar">
              <p> &copy; Changs' Gadgets 2024. All Rights Reserved</p>
            </footer>
          </div>
        </div>

    </footer>
  </div>
</body>

</html>