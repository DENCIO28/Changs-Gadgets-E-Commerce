<?php
    $baseUrl = "http://localhost/ChangsGadget-4/";   
?>


<div class="w3-content" style="max-width: 1512px;">
    <div >
    <?php include "modal.php"?>
    </div>
    <!-- Features Section -->
    <?php include_once ("./models/ProductsIndex.php") ?>
    <div class="w3-row-padding" style="margin:35px 0 35px 0;">
        <div class="w3-third w3-margin-bottom">
            <div class="w3-container w3-padding"
                style="display: flex; align-items: center; color:#680502; background: #D9D9D9">
                <div class="w3-col s3" style="margin-right: 10px;">
                    <img class="w3-image" src="./assets/icons/row1p1.png" alt="Free Delivery">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">Free Delivery</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Free delivery for customers
                        within Tagum City</p>
                </div>
            </div>
        </div>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-container w3-padding"
                style="display: flex; align-items: center; color:#680502; background: #D9D9D9">
                <div class="w3-col s3" style="margin-right: 10px;">
                    <img class="w3-image" src="./assets/icons/row1p2.png" alt="Customer Support">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">Customer Support</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Free delivery for customers
                        within Tagum City</p>
                </div>
            </div>
        </div>
        <div class="w3-third w3-margin-bottom">
            <div class="w3-container w3-padding"
                style="display: flex; align-items: center; color:#680502; background: #D9D9D9">
                <div class="w3-col s3" style="margin-right: 10px;">
                    <img class="w3-image" src="./assets/icons/row1p3.png" alt="Warranty" style="height: 85px;">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">Warranty</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Free delivery for customers
                        within Tagum City</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ad Section -->
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-half">
            <img class="w3-image" src="assets/ads-images/1.png" alt="Ad 1">
        </div>
        <div class="w3-half">
            <img class="w3-image" src="assets/ads-images/2.png" alt="Ad 2">
        </div>
    </div>

    <!-- Categories Section -->
    <div class="w3-container" style="margin: 35px 0 35px 0">
        <h1 class="w3-center" style="margin-bottom: 35px; color:#6805f2">Categories</h1>
        <div class="w3-third w3-margin-bottom" style="display: flex; align-items: center;">
            <div class="w3-container w3-padding w3-margin" style="display: flex; background: #D9D9D9;">
                <div class="w3-col s1" style="margin-right: 10px; height:105px">
                    <img class="w3-image" src="assets/C1.png" alt="iPhone">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">iPhone</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Browse all iPhone series
                    </p>
                </div>
            </div>
        </div>
        <div class="w3-third w3-margin-bottom" style="display: flex; align-items: center;">
            <div class="w3-container w3-padding w3-margin" style="display: flex; background: #D9D9D9;">
                <div class="w3-col s1" style="margin-right: 10px; height:95px">
                    <img class="w3-image" src="assets/C2.png" alt="iPad">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">iPad</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Browse all iPad generations
                    </p>
                </div>
            </div>
        </div>
        <div class="w3-third w3-margin-bottom" style="display: flex; align-items: center;background: #D9D9D9;">
            <div class="w3-container w3-padding w3-margin" style="display: flex;background: #D9D9D9;">
                <div class="w3-col s2" style="margin-right: 10px; height: 90px">
                    <img class="w3-image" src="assets/C3.png" alt="Accessories">
                </div>
                <div class="w3-col s9">
                    <h2 style="font-size:20px; margin: 5px; color:#6805F2; font-weight:semi-bold">Accessories</h2>
                    <p style="font-size:15px; margin: 5px;color:#626262; font-weight:medium">Browse all Apple product
                        accessories</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NEW Featured Products Section -->
<div class="w3-container w3-center" style="margin: 35px 0 35px 0; max-width:1512px;">
    <div class="row0-5-header" style="display:flex; justify-content: space-around">
        <h2 style="font-weight: 600; font-size:28px">Featured Products</h2>
        <a href="<?=$baseUrl?>/pages/products.php"><input type="button" value="SHOP ALL PRODUCTS" class="shop-all-btn mb-0" style="background:none; font-size: 20px;"></a>
        <img src="./assets/icons/horizontal-line.png" alt="underline">
    </div>

    <?php
    $result = Products::getAll();
    if ($result->num_rows > 0) {
        $row_ids = [13, 27, 35, 55];
        $displayed_rows = 0;
        while ($row = $result->fetch_assoc()) {
            if (in_array($row['ID'], $row_ids)) {
                $imageName = $row["product_image"];
                $imageUrl = "./assets/products/" . $imageName;
                ?>
                <div class="w3-quarter w3-margin-bottom">
                    <div class="w3-container w3-margin">
                        <img class="w3-image" src="<?= $imageUrl ?>" alt="Product Image">
                        <div class="w3-container w3-padding">
                            <p style="font-weight:600; color:#6805F2; text-align:left;"><?= $row["product_category"] ?></p>
                            <h3 style="height:100px; font-weight:500;  text-align:left;"><?= $row["product_name"] ?></h3>
                            <div class="w3-row">
                                <div class="w3-col s6">
                                    <img class="w3-image" src="assets/ratings/ratings-4star.png" alt="4 stars">
                                </div>
                                <div class="w3-col s6">
                                    <p style="font-weight: 600;font-size:14px; margin-left: 3px; "><?php echo (rand(2, 10) . " reviews") ?></p>
                                </div>
                            </div>
                            <p style="font-weight: 500; font-size:18px; color:#6805F2;  text-align:left;">Php <?= $row["product_price"] ?></p>
                            <button class="w3-button w3-yellow" style="font-weight:600; width:100%" onclick="window.location.href='pages/products.php'">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
                <?php
                $displayed_rows++;
                if ($displayed_rows == 4)
                    break; // stop displaying rows after 4
            }
        }
    }
    ?>
</div>
<img class="w3-image w3-animate-fading" src="./assets/ads-images/HORIZONTAL-ADS.png" alt="Ads">
</div>
<div class="w3-container w3-center" style="max-width: 1110px; margin: 0 auto;">
    <div class="row0-5-header" style="display:flex; margin-top:5%; justify-content: space-around">
        <h2 style="font-weight: 600; font-size:28px">Recently Added</h2>
        <a href="<?=$baseUrl?>/pages/products.php"><input type="button" value="SHOP ALL PRODUCTS" class="shop-all-btn mb-0" style="background:none; font-size:20px"></a>
        <img src="./assets/icons/horizontal-line.png" alt="underline">
    </div>
    <div class="w3-row-padding w3-margin-top">
        <?php
        $result = Products::getAll();
        if ($result->num_rows > 0) {
            $row_ids = [9, 22, 37, 47];
            $displayed_rows = 0;
            while ($row = $result->fetch_assoc()) {
                if (in_array($row['ID'], $row_ids)) {
                    $imageName = $row["product_image"];
                    $imageUrl = "./assets/products/" . $imageName;
                    ?>
                    <div class="w3-quarter w3-margin-bottom" style="font-family:'Poppins','Sans-Serif';">
                        <div class="w3-container w3-margin">
                            <img class="w3-image" src="<?= $imageUrl ?>" alt="ProdIMG">
                            <div class="w3-container w3-padding">
                                <p style="font-weight:600; color:#6805F2; text-align:left;"><?= $row["product_category"] ?></p>
                                <h3 style="height:100px; font-weight:500;  text-align:left;"><?= $row["product_name"] ?></h3>
                                <div class="w3-row">
                                    <div class="w3-col s6">
                                        <img class="w3-image" src="assets/ratings/ratings-4star.png" alt="4 stars">
                                    </div>
                                    <div class="w3-col s6">
                                        <p style="font-weight: 600;font-size:14px; margin-left: 3px;"><?php echo (rand(2, 10) . " reviews") ?></p>
                                    </div>
                                </div>
                                <p style="font-weight: 500; font-size:18px; color:#6805F2;  text-align:left;">Php <?= $row["product_price"] ?></p>
                                <button class="w3-button w3-yellow" style="font-weight:600; width:100%" onclick="window.location.href='<?=$baseUrl?>/pages/new-check-out.php'">Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php
                    $displayed_rows++;
                    if ($displayed_rows == 4)
                        break; // stop displaying rows after 4
                }
            }
        }
        ?>
    </div>

    <!-- Customer Review Here -->
    <div class="w3-container w3-center w3-padding-64">
        <div class="w3-display-container w3-container" style="padding: 3rem 0 3rem 0;background: #D9D9D9;">
            <h1 style="color:#6508F2; margin-bottom:2rem">Customer Reviews</h1>
            <img src="./assets/icons/horizontal-line.png" alt="underline">
            <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-4 w3-padding"
                        style="background-color: #fefefe; height:474px; margin-bottom: 1rem">
                        <img src="./assets/icons/user.png" alt="user" style="width: 50px;margin:10px">
                        <h2 style="font-size: 22px;">Rhea Marie Narciso</h2>
                        <p>@facebook</p>
                        <img src="assets/ratings/ratings-5star.png" alt="rating" style="width: 60%; margin-bottom:10px">
                        <div class="w3-padding" style="padding: 0.30rem 1rem 0.30rem 1rem">
                            <h4>Legit ilang iPhone</h4>
                            <p>Legit jud ni ang mga products nila.
                                Sa pag palit nako’g iphone diri, nice kaayo ang ilahang staff mag entertain sa
                                customers.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="w3-third">
                    <div class="w3-card-4  w3-padding" style="background-color: #fefefe; height:474px; margin-bottom: 1rem">
                        <img src="./assets/icons/user.png" alt="user" style="width: 50px;margin:10px">
                        <h2 style="font-size: 22px;">Mark Lowie Dubi-dubi</h2>
                        <p>@facebook</p>
                        <img src="assets/ratings/ratings-5star.png" alt="rating" style="width: 60%; margin-bottom:10px;">
                        <div style="padding: 0.30rem 1rem 0.30rem 1rem">
                            <h4>Excellent Customer Support</h4>
                            <p>Chang's Gadget has truly impressed me with their
                                customer support and after-sales service. <br>
                                Whenever I've had questions or needed assistance,
                                their team has been incredibly responsive
                                and helpful. They care for their
                                customers' and ensure everything runs smoothly.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="w3-third">
                    <div class="w3-card-4 w3-padding"
                        style="background-color: #fefefe; height:474px; margin-bottom: 1rem">
                        <img src="./assets/icons/user.png" alt="user" style="width: 50px; margin:10px">
                        <h2 style="font-size: 22px;">Lester Kim Jong Cook</h2>
                        <p>@facebook</p>
                        <img src="assets/ratings/ratings-5star.png" alt="rating" style="width: 60%; margin-bottom:10px">
                        <h4>Affordable Phones</h4>
                        <p>Discovered via Facebook ads
                            while considering upgrading my Android.
                            Affordable iPhone options caught my eye.
                            No regrets buying from this shop
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Customer Review Content End Here -->

        <div class="w3-container w3-center w3-padding-64">
            <div class="w3-row-padding w3-margin-top">
                <div class="w3-half">
                    <div class="w3-card-4 w3-center" style=" height: 620px; margin-bottom: 5rem;">
                        <div class="w3-container" style="padding:1rem 3rem 1rem 3rem;">
                            <h1 class="mb-3" style="color:#6508F2">iPhone 11</h1>
                            <p style="height:100px; font-weight:400">Our Top Selling iPhone
                                Discover the iPhone 11 series,
                                one of our top sellers at our store.
                                Enjoy exclusive discounts
                                and redefine your mobile experience.</p>

                        </div>
                        <img class="w3-image" src="assets/info_img/iphone11.png" alt="iPhone 11">
                        <div class="w3-center " style="margin: 30px 0px 30px 0">
                            <a href="<?=$baseUrl?>/pages/products.php" class="w3-button w3-hover-yellow" style="color:#6805F2;">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="w3-half">
                    <div class="w3-card-4 w3-center">
                        <div class="w3-container" style="padding:1rem 3rem 1rem 3rem;">
                            <h1 class="mb-3" style="color:#6508F2">PowerBank</h1>
                            <p style="height:100px; font-weight:400">Portable and Durable Design
                                Designed for on-the-go use, this power bank is compact
                                and built to withstand daily use. Take it with you on your
                                travels and adventures.</p>
                        </div>
                        <img class="w3-image" src="assets/info_img/powerbank.png" alt="PowerBank">
                        <div class="w3-center" style="margin: 30px 0px 30px 0">
                            <a href="<?=$baseUrl?>/pages/products.php" class="w3-button w3-hover-yellow"
                                style="color:#6805F2; margin: 0 0 10px 0">Learn More</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- About Section -->
        <div class="w3-row w3-padding-50" id="about">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="./assets/about_us/about-us.png" class="w3-round w3-image w3-opacity-min mt-5" alt="Table Setting"
                    style= "width:600; height:750">
            </div>

            <div class="w3-col m6 w3-padding-medium">
                <h1 class="w3-center" style="color:#6805F2">Why Choose Chang's Gadgets?</h1><br>
                <p class="w3-large"> Welcome to Chang's Gadget, your go-to destination for all your smartphone needs in
                    Tagum
                    City,Davao del Norte. <br>
                    Located conveniently at Prk. Cervantes, Mabini Street, in close proximity
                    to esteemed establishments like Jalee Pharmacy and Aquino Hospital,
                    we take pride in offering a comprehensive array of smartphone solutions.
                    <br><br>
                    Our distinguished clientele enjoys access to a curated selection of both
                    premium and pre-owned Apple products, alongside a diverse range of brand-new
                    Android devices. With a dedicated team of experts specializing in iPhone and
                    Android repairs, including intricate tasks such as water damage and board
                    malfunctions, we ensure that your devices receive the utmost care and attention. <br>
                    <br>
                    Additionally, our services extend to unlocking devices, providing authentic
                    power banks, and offering an extensive assortment of Android and iPhone accessories.
                    Experience the epitome of mobile sophistication at Chang's Gadget,
                    where your satisfaction is our foremost priority.
                </p>
                <div class="w3-center">
                    <a href="<?=$baseUrl?>/pages/about-us.php" class="w3-button w3-hover-yellow" style="color:#fefefe; background-color:#6508F2; border-radius:8px">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="linenisya" style="height:5px; background-color:#6508f2; margin-top:2rem"></div>