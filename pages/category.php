<?php
    $path = "../widgets/";
    $header = $path."header_pages.php";
    $nav = $path."nav_pages.php";
    $footer = $path."footer_pages.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/category.css">
    <link rel="stylesheet" href="../style.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>CATEGORY's</title>

</head>
<body>
    <div class="container">
    <header>
        <?php include($header)?>
    </header>
    <nav>
    <?php include($nav)?>
    </nav>
    <main>
        <div class="pirent">

            <div class="BGC-lable">
                <div class="product-lable">
                    <h2>MOBILE PHONE</h2>
                    <a href="#">SEE MORE</a>
                </div>
            </div>

            <div class="cardbox">
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products-card/products-iphone11.png" alt="">
                    </div>
                    <div class="category">
                        <p>Mobile Phone</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPhone 11 <br>| 128 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>13 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 10,999</p>
                    </div>
                </div>
            
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products-card/products-XR.png" alt="">
                    </div>
                    <div class="category">
                        <p>Mobile Phone</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPhone XR <br>| 128 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>23 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 8,999</p>
                        <p class="oldprice"><s>Php 10,999</s></p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products-card/products-powerbank.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>20,000 Mah <br>
                            | Powerbank</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>62 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products-card/products-airpods.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>Apple Airpods <br>| Gen 2</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>11 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 5,499</p>
                        <p class="oldprice"><s>Php 8,490</s></p>
                    </div>
                </div>           
            </div>
    

            <div class="BGC-lable">
                <div class="product-lable">
                    <h2>TABLET & IPAD</h2>
                    <a href="#">SEE MORE</a>
                </div>
            </div>

            <div class="cardbox">
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/tablet/ipad-air-256.png" alt="">
                    </div>
                    <div class="category">
                        <p>Tablet</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPad Air <br> | 256 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>4 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 23,999</p>
                    </div>
                </div>
            
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/tablet/ipad-pro-m2-11inch.png" alt="">
                    </div>
                    <div class="category">
                        <p>Tablet</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPad Pro M2 <br> | 11 inch</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>1 review</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 49,999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/tablet/ipad-air2-128.png" alt="">
                    </div>
                    <div class="category">
                        <p>Tablet</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPad Air 2<br>| 128 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>2 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 14,999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/tablet/ipad-pro-11inch-128.png" alt="">
                    </div>
                    <div class="category">
                        <p>Tablet</p>
                    </div>
                    <div class="productname">
                        <p><strong>iPad Pro 11 inch <br>| 128 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>9 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 36,999</p>
                    </div>
                </div>           
            </div>

            <div class="ads-box">
                <div class="ads">
                    <img src="../assets/ads-images/1.png" alt="">
                </div>
                <div class="ads">
                    <img src="../assets/ads-images/2.png" alt="">
                </div>
            </div>

            <div class="BGC-lable">
                <div class="product-lable">
                    <h2>ACCESSORIES</h2>
                    <a href="#">SEE MORE</a>
                </div>
            </div>

            <div class="cardbox">
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/accessories/earpods-usbc.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>USB-C <br>Earpods</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>6 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 499</p>
                    </div>
                </div>
            
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/accessories/iwatch-9-black.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>iWatch Series 9 <br>| Black</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>19 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 9,999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/accessories/universal-pencil.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>Universal <br> Pencil</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>2 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 899</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/accessories/powerbank-10kmah.png" alt="">
                    </div>
                    <div class="category">
                        <p>Accessories</p>
                    </div>
                    <div class="productname">
                        <p><strong>Powerbank <br>| 10,000Mah</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>32 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 1,099</p>
                    </div>
                </div>           
            </div>
            
                <div class="hor-ads">
                    <img class="ads-hori" src="../assets/ads-images/HORIZONTAL-ADS.PNG" alt="">
                </div>
            
            <div class="BGC-lable">
                <div class="product-lable">
                    <h2>LAPTOP</h2>
                    <a href="#">SEE MORE</a>
                </div>
            </div>

            <div class="cardbox">
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/laptop/mcbook-air-m2.png" alt="">
                    </div>
                    <div class="category">
                        <p>Laptop</p>
                    </div>
                    <div class="productname">
                        <p><strong>MacBook Air <br> | M2</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>4 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 47,999</p>
                    </div>
                </div>
            
                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/laptop/mcbook-air-13.png" alt="">
                    </div>
                    <div class="category">
                        <p>Laptop</p>
                    </div>
                    <div class="productname">
                        <p><strong>MacBook Air <br>13 inch</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>8 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 27,999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/laptop/mcbook-air-m1-2020-256.png" alt="">
                    </div>
                    <div class="category">
                        <p>Laptop</p>
                    </div>
                    <div class="productname">
                        <p><strong>MacBook Air M1 <br> 2020 256 GB</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>3 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 38,999</p>
                    </div>
                </div>           

                <div class="Category-box">
                    <div class="product">
                        <img src="../assets/products/laptop/mcbook-pro-m1-2020.png" alt="">
                    </div>
                    <div class="category">
                        <p>Laptop</p>
                    </div>
                    <div class="productname">
                        <p><strong>MacBook Pro <br>M1 2020</strong></p>
                    </div>
                    <div class="rating">
                        <img src="../assets/ratings/ratings-4star.png" alt="star">
                        <p>9 reviews</p>
                    </div>
                    <div class="price">
                        <p class="newprice">Php 41,999</p>
                    </div>
                </div>           
            </div>

        </div>
        <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
    </main>
    <footer>
        <?php include($footer)?>
    </footer>
      
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>