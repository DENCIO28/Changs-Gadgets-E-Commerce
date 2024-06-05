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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Changs Gadgets | Products</title>
</head>

<body>
    <header>
        <?php include ($header)?>
    </header>
    <nav>
        <?php include ($nav)?>
    </nav>
    <main>
        <?php include_once ("../models/Products.php") ?>

        <div class="container d-flex justify-content-center mt-50 mb-50">
            <div class="row">
                <div class="col-md-10">
                    <?php
                    $result = Products::getAll();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $imageName = $row["product_image"];
                            $imageUrl = "../assets/products/" . $imageName;
                            ?>
                            <div class="card card-body">
                                <div
                                    class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                    <div class="mr-2 mb-3 mb-lg-0">

                                        <img src="<?= $imageUrl ?>" width="150" height="150" alt="">

                                    </div>

                                    <div class="media-body">
                                        <h6 class="media-title font-weight-semibold">
                                            <a href="#" data-abc="true"><?= $row["product_name"] ?></a>
                                        </h6>

                                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                            <li class="list-inline-item"><a href="#" class="text-muted"
                                                    data-abc="true"><?= $row["product_category"] ?></a></li>
                                        </ul>

                                        <p class="mb-3"><?= $row["product_desc"] ?></p>

                                        <ul class="list-inline list-inline-dotted mb-0">
                                            <li class="list-inline-item">Add to <a href="#" data-abc="true">Wishlist</a></li>
                                        </ul>
                                    </div>

                                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                        <h3 class="mb-0 font-weight-semibold">₱<?= $row["product_price"] ?></h3>

                                        <div>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                        </div>

                                        <div class="text-muted">1985 reviews</div>

                                        <button type="button" class="btn btn-warning mt-4 text-white"><i
                                                class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
    </main>
    <footer>
        <?php include($footer)?>
    </footer>
</body>

</html>