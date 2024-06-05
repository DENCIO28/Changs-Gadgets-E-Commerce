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
    <link rel="stylesheet" href="../styles/products.css">
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

    <title>Changs Gadgets | Products</title>
</head>

<body>
    <div class="container" style="font-family: 'Poppins',Sans-Serif">
        <header>
            <?php include ($header) ?>
        </header>
        <nav>
            <?php include ($nav) ?>
        </nav>
        <main>
            <?php include_once ("../models/Products.php") ?>
            <div class="row-1" style="font-weight:600">
                <div class="categ">CATEGORY: <input type="#" value=""></div>
                <div class="prce">PRICE: <input type="#" value=""></div>
            </div>
            <!-- PRODUCTS -->
            <div class="w3-container"
                style="display:flex; flex-flow:wrap; justify-content:space-evenly; max-width:1512px">
                <?php
                $result = Products::getAll();

                if ($result->num_rows > 1) {
                    while ($row = $result->fetch_assoc()) {
                        $imageName = $row["product_image"];
                        $imageUrl = "../assets/products/" . $imageName;
                        ?>
                        <div class="w3-quarter w3-margin-bottom">
                            <div class="w3-container w3-margin">
                                <img class="w3-image" src="<?= $imageUrl ?>" alt="Product Image">
                                <div class="w3-container w3-padding">
                                    <p style="font-weight:600; color:#6805F2"><?= $row["product_category"] ?></p>
                                    <h3 style="height:80px; font-weight:500"><?= $row["product_name"] ?></h3>
                                    <div class="w3-row">
                                        <div class="w3-col s6">
                                            <img class="w3-image" src="../assets/ratings/ratings-4star.png" alt="4 stars">
                                        </div>
                                        <div class="w3-col s6">
                                            <p style="font-weight: 600;font-size:14px; margin-left: 3px; ">
                                                <?php echo (rand(2, 10) . " reviews") ?></p>
                                        </div>
                                    </div>
                                    <p style="font-weight: 500; font-size:18px; color:#6805F2">Php <?= $row["product_price"] ?>
                                    </p>
                                    <button class="w3-button w3-yellow" style="font-weight:600; width:100%"
                                        onclick="window.location.href='new-check-out.php'">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
            <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>
        </main>
        <footer class="w3-container" style="width: 1512px;">
            <?php include ($footer) ?>
        </footer>
    </div>
</body>

</html>