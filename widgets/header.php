<?php
$baseUrl = "http://localhost/ChangsGadget-4/";
?>

<div class="item item-header">
    <div class="flex-header">
        <div class="header-logo">
            <a href="<?= $baseUrl ?>index.php"><img src="./assets/icons/HL.png" alt="Logo"></a>
        </div>
        <div class="header-searchbox">
            <input type="text" placeholder="Sign-up and get 20% off on your first order">
            <div class="iconsearch"><a href="<?= $baseUrl ?>/pages/products.php"><button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i></button></a></div>
        </div>
        <div class="header-icons">
            <!-- LIKE ICON -->
            <a href="<?= $baseUrl ?>/pages/new-check-out.php"><button type="Submit"><img src="./assets/icons/like.png"
                        alt=""></button></a>
            <!-- CHECK-OUT -->
            <script>function toggleCart() {
                    var modal = document.getElementById("cart-modal");
                    var computedStyle = window.getComputedStyle(modal);

                    if (computedStyle.display === "none" || computedStyle.display === "hidden") {
                        modal.style.display = "block";
                        displayCartItems();
                    } else {
                        modal.style.display = "none";
                    }
                }
            </script>
                <a onclick="toggleCart()" ><img src="./assets/icons/cart-icon.png" alt=""></a>

        </div>

        <!-- LOGIN ICON -->
        <div class="login-buttondesktop">
            <button type="submit"><img src="./assets/icons/user.png" alt=""> Sign In | Login</button>
        </div>
        <div class="login-buttonphone">
            <button type="submit"><img src="./assets/icons/user.png" alt=""></button>
        </div>
    </div>
</div>