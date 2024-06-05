<?php
$path = "../widgets/";
$header = $path . "header_pages.php";
$nav = $path . "nav_pages.php";
$footer = $path . "footer_pages.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changs Gadget | Check out</title>
    <link rel="stylesheet" href="../style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>


<body">
    <div class="w3-container w3-display-topmiddle" style="margin:0;width:1512px; ">
    <header>
        <?php include ($header) ?>
    </header>
    <nav>
        <?php include ($nav) ?>
    </nav>

    <!-- CHECK OUT CONTAINER -->
        <section class="h-100 h-custom" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <!-- LEFT SIDE -->
                                    <div class="col">
                                        <h3 class="mb-3" style="font-weight: 600;"><a href="#!" class="link"
                                                style="color:#6508F2">Continue
                                                Shopping</a></h3>
                                        <hr style="color: #6805F2; height:4px;">

                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div>
                                                <h3 class="mb-2" style="font-weight:600; color:#6508F2">Shopping cart
                                                </h3>
                                                <p class="mb-0">You have <span style="color:#6805F2;font-weight:500">#
                                                        items</span> in your cart</p>
                                            </div>
                                        </div>

                                        <!-- CART CONTAINER -->
                                        <div class="card p-0 mb-3">
                                            <!-- PRODUCTS -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div
                                                        class="col-md-2 col-lg-2 col-xl-2 d-flex flex-row align-items-center">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img7.webp"
                                                            class="img-fluid rounded-3" alt="Prod img">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Iphone 11 pro</h5>
                                                        <p class="small mb-0">256GB, Navy Blue</p>
                                                    </div>
                                                    <div class="col-md-2 d-flex flex-row align-items-center">
                                                        <button class="btn p-1" style="text-decoration:none"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            -
                                                        </button>

                                                        <input id="form1" min="0" name="quantity" value="1"
                                                            type="number" class="form-control form-control-sm"
                                                            style="width:40px" />

                                                        <button class="btn p-1"
                                                            style="text-decoration:none; align-text: center"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            +
                                                        </button>
                                                    </div>
                                                    <div class="col-md-2 d-flex align-items-center">
                                                        <h6>Php 44000</h6>
                                                    </div>
                                                    <div class="col-md-.5 text-center d-flex align-items-center">
                                                        <a href="#!"
                                                            style="text-decoration:none; color:#D81E1E; font-weight:700; font-size:20px">X</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- CHECK OUT CARD RIGHT -->
                                    <div class="col-lg-5">
                                        <div class="card bg-primary text-white rounded-3">
                                            <div class="card-body"
                                                style="border:1px #680502 solid;background-color:#6805f2">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <h2 class="mb-0" style="color:#fefefe; font-weight:700; text-align: center;">CHECK OUT
                                                    </h2>
                                                </div>
                                                <hr class="my-3">
                                                <form class="mt-4">
                                                    <!-- DELIVERY OPTIONS -->
                                                    <label class="form-label" for="typeText"
                                                        style="font-weight: 600; font-size: 20px;">Delivery
                                                        Options</label>
                                                    <div class="form-check mb-2" style="padding-left:40px">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" style="font-size:16px"
                                                            for="flexRadioDefault2">
                                                            <span style="font-weight:500">Store Pick up</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2" style="padding-left:40px">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                                        <label class="form-check-label" style="font-size:16px"
                                                            for="flexRadioDefault2">
                                                            <span style="font-weight:500">Free Delivery</span> | Within
                                                            Tagum City
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2" style="padding-left:40px">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                                        <label class="form-check-label" style="font-size:16px"
                                                            for="flexRadioDefault2">
                                                            <span style="font-weight:500">J&T Delivery</span> | Outside
                                                            Tagum City
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-4" style="padding-left:40px">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" disabled>
                                                        <label class="form-check-label" style="font-size:16px"
                                                            for="flexRadioDefault2">
                                                            <span style="font-weight:500">LBC Delivery</span> | Outside
                                                            Tagum City
                                                        </label>
                                                    </div>

                                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                                        <label class="form-label" for="typeText"
                                                            style="font-weight: 600; font-size: 20px;">Voucher
                                                            Code</label>
                                                        <input type="text" id="typeText"
                                                            class="form-control form-control" style="height:40px"
                                                            size="14" placeholder="Enter voucher" minlength="19"
                                                            maxlength="19" />
                                                    </div>

                                                </form>
                                                <hr class="my-3">
                                                <!-- SUBTOTAL > TOTAL ORDER -->
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="align-middle" style="font-weight:500">Subtotal</h4>
                                                    <h5 class="align-middle">Php 4,798.00</h5>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-2" style="font-weight:500">Shipping</h4>
                                                    <h5 class="mb-2">Php 0.00</h5>
                                                </div>

                                                <div class="d-flex justify-content-between">
                                                    <h4 class="mb-2" style="font-weight:500">Voucher</h4>
                                                    <h5 class="mb-2">Php 0.00</h5>
                                                </div>

                                                <div class="d-flex justify-content-between mb-4">
                                                    <h4 class="mb-2" style="font-weight:500">Total Order: </h4>
                                                    <h5 class="mb-2" style="font-weight:600; color:#Fefefe">Php 4818.00
                                                    </h5>
                                                </div>

                                                <!-- <button type="button"
                                                class="btn btn-info btn-lg d-flex justify-content-center w3-center"
                                                style="background-color: #F2CF05; color:#6805F2; border: none; font-weight:500;">
                                                <div class="d-flex justify-content-center">
                                                    <span>Checkout <i
                                                            class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button> -->

                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #F2CF05; color:#6805F2; border: none; font-weight:700;height:40px"
                                                        type="button">CHECK OUT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
        </section>
        <footer>
        <?php include ($footer) ?>
        </footer>
    </div>
</body>

</html>