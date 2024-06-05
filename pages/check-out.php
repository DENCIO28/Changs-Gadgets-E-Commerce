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
    <title>CHECK-OUT Page</title>
    <link rel="stylesheet" href="../styles/check-out.css">
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
                <a href=""><b>< BACK</b></a>
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

            <div class="cheout">
                <div class="my_cart-left">
                    <h1>My Cart</h1>
                    <div class="add2cart">
                        <input type="checkbox" name="" id="">
                        <img src="#" alt="">

                        <div class="cart-about">
                            <h2>iPhone XR | 128 GB</h2>
                            <input type="text" placeholder="SPACE GREY,128GB"> 
                            <div class="price">
                                <h4 class="newprice">php 8,999.00</h4>
                                <h5 class="oldprice"><s>Php 10,999</s></h5>
                                <!-- <div class="btn">
                                    <input type="number">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my_cart-right">

                    <div class="check-box">
                        <h1>Check Out</h1>
                        <div class="allpric">
                            <h2>Item Amount</h2>
                            <p>Php 8,999.00</p>
                        </div>
                        <div class="allpric">
                            <h2>Shiping</h2>
                            <p>+ Php 0.00</p>
                        </div>
                        <div class="allpric">
                            <h2>Discount</h2>
                            <p>- Php 0.00</p>
                        </div>
                        <div class="allpric hr">
                            <h2>Voucher</h2>
                            <p>- Php 0.00</p>
                        </div>
                        <div class="total">
                            <h2>TOTAL ORDER</h2>
                            <h3>Php 8,999.00</h3>
                        </div>
                        <div class="btn">
                            <button><b>CHECK OUT</b></button>
                            <!-- <a href="#"><b>CHECK OUT</b></a> -->
                        </div>
                    </div>
                    <!-- address -->
                    <div class="address">
                        <div class="head">
                            <img src="#" alt="icon">
                            <h2>DELIVERY ADDRESS</h2>
                        </div>
                        <div class="info-add">
                            <div class="add-btn">
                                <button></button>
                            </div>
                            <p><b>Lester Mark P. Planos</b>
                            add lang ang address nila diri dens tanks</p>
                            <div class="edit">
                                <a href="#">Edit</a>
                            </div>
                        </div>
                        <div class="new-add">
                            <a href=""><b>+ ADD NEW ADDRESS</b></a>
                        </div>
                    </div>
                    <!-- DELIVERY OPTION -->
                    <div class="check-box hiht-box">
                        
                        <div class="head">
                            <img src="#" alt="icon">
                            <h2>DELIVERY OPTION</h2>
                        </div>

                        <div class="options">
                            <div class="opbtn">
                                <button></button>
                            </div>
                            <div class="opinfo">
                                <h3><b>Store Pick-up</b></h3>
                            </div>
                            <div class="adition">
                                <p>Php 0.00</p>
                            </div>
                        </div>

                        <div class="options">
                            <div class="opbtn">
                                <button></button>
                            </div>
                            <div class="opinfo">
                            <h3><b>Free Delivery </b>| Within Tagum City</h3>
                            <p>Guaranteed to get on 1 to 2 days</p>
                            </div>
                            <div class="adition">
                                <p>Php 0.00</p>
                            </div>
                        </div>

                        <div class="options">
                            <div class="opbtn">
                                <button></button>
                            </div>
                            <div class="opinfo">
                            <h3><b>J&T Delivery </b>| Outside Tagum City</h3>
                            <p>Guaranteed to get on 1 to 2 days</p>
                            </div>
                            <div class="adition">
                                <p>Php 50.00</p>
                            </div>
                        </div>

                        <div class="options">
                            <div class="opbtn">
                                <button></button>
                            </div>
                            <div class="opinfo">
                            <h3><b>LBC delivery </b>| Outside Tagum City</h3>
                            <p>Guaranteed to get on 1 to 2 days</p>
                            </div>
                            <div class="adition">
                                <p>Php 50.00</p>
                            </div>
                        </div>
                    </di>
                </div>

                <div class="address">
                    <div class="head">
                        <img src="#" alt="icon">
                        <h2>VOUCHERS</h2>
                    </div>
                    <div class="search">
                        <input type="" placeholder="Enter Voucher Code">
                        <button>APPLY</button>
                    </div>
                    <div class="mess">
                        <input type="text" placeholder="No Available Voucher" value="">
                    </div>
                </div>

                <div class="check-box">
                        
                    <div class="head">
                        <img src="#" alt="icon">
                        <h2>PAYMENT OPION</h2>
                    </div>
                    <div class="def-method">
                        <input type="text" placeholder="Cash on Dilevery">
                    </div>
                </div>    
                
            </div>
            <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
        </main>
        <footer>
            <?php include($footer)?>
        </footer>
    </div>
</body>
</html>