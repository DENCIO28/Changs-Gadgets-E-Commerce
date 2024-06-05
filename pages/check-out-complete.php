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
    <title>Document</title>
    <link rel="stylesheet" href="../styles/check-out-complete.css">
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
        <div class="bck">
            <a href=""><strong>< BACK</strong></a>
        </div>

        <div class="check">
            <div class="check-1">
                <div class="check_out">
                    <h2>CHECKOUT</h2>
                </div>
                <div class="order_comp">
                    <h2>ORDER COMPLETE</h2>
                </div>
            </div>
        </div>
        <div class="checkout-prd">
            <div class="order_success">
                <img src="../assets/icons/Successful-Purchase.png" alt="">
                <h2><strong>Thank you.</strong></h2>
                <p>Your Order has been successfully placed.</p>
            </div>
        </div>
        <div class="likes">
            <h1>YOU MAY ALSO LIKE</h1>
        </div>
        <div class="cardbox">
            <div class="Category-box">
                <div class="product">
                    <img src="../assets/products-card/products-iphone11-128.png" alt="">
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
                    <img src="../assets/products/accessories/keyboard-bluetooth.png" alt="">
                </div>
                <div class="category">
                    <p>Accessories</p>
                </div>
                <div class="productname">
                    <p><strong>Bluetooth Keyboard</strong></p>
                </div>
                <div class="rating">
                    <img src="../assets/ratings/ratings-4star.png" alt="star">
                    <p>23 reviews</p>
                </div>
                <div class="price">
                    <p class="newprice">Php 1,999</p>
                    <p class="oldprice"><s></s></p>
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
                    <img src="../assets/products/tablet/ipad-pro-11inch-128.png" alt="">
                </div>
                <div class="category">
                    <p>Tablet</p>
                </div>
                <div class="productname">
                    <p><strong>iPad Pro 11 inch <br>| 128GB</strong></p>
                </div>
                <div class="rating">
                    <img src="../assets/ratings/ratings-4star.png" alt="star">
                    <p>2 reviews</p>
                </div>
                <div class="price">
                    <p class="newprice">Php 36,999</p>
                    <p class="oldprice"><s></s></p>
                </div>
            </div>      
        </div>

        <div class="next-page">
            <button class="btn"><a href="#"><</a></button>
            <button class="btn"><a href="#">1</a></button>
            <button class="btn"><a href="#">2</a></button>
            <button class="btn"><a href="#">3</a></button>
            <button class="btn"><a href="#">></a></button>
        </div>
        <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
    </main>
    <footer>
    <?php include($footer)?>
    </footer>
</div>
</body>
</html>