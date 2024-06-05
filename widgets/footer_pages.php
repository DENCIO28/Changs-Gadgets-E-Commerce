<?php
// $path = "../src/";
// $menu1 = file($path . "footer-home-menu.txt");
// $menu2 = file($path . "footer-category-menu.txt");
$baseUrl = "http://localhost/ChangsGadget-4/";
?>

<!-- Footer -->
<div class="text-center text-lg-start bg-body-tertiary text-muted">

  <section class="">
    <div class="container text-center text-md-start mt-5">
 
      <div class="row mt-3">
 
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <h6 class="text-uppercase fw-bold mb-4">

            <img style="width:100px;height:50px" src="../assets/icons/HL.png" alt="logo">
          </h6>
          <p>
            Premium Apple & Android products, expert repairs, unlocking services,
            and accessories located at Prk. Cervantes, Mabini Street, Tagum City, Davao del Norte.
          </p>
        </div>


        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h4 class="text-uppercase fw-bold mb-4" style="color:#6805f2;">
            HOME
          </h4>
          <ul class="float-left " style="text-align: left">
            <li><a href="<?=$baseUrl?>index.php">HOME</a></li>
            <li><a href="<?=$baseUrl?>/pages/products.php">PRODUCTS</a></li>
            <li><a href="<?=$baseUrl?>/pages/about-us.php">ABOUT US</a></li>
            <li><a href="<?=$baseUrl?>/pages/contact-us.php">CONTACT US</a></li> 
          </ul>
        </div>



        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
 
          <h4 class="text-uppercase fw-bold mb-4" style="color:#6805f2;">
            CATEGORY'S
          </h4>
          <ul class="float-left " style="text-align: left">
              <li><a href="<?=$baseUrl?>/pages/products.php">MOBILE PHONE</a></li>
              <li><a href="<?=$baseUrl?>/pages/products.php">ACCESSORIES</a></li>
              <li><a href="<?=$baseUrl?>/pages/products.php">TABLET / IPAD</a></li> 
              <li><a href="<?=$baseUrl?>/pages/products.php">LAPTOPS</a></li> 
          </ul>
        </div>
       
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        
          <h4 class="text-uppercase fw-bold mb-4" style="color:#6805f2;">Contact us:</h4>
          <a href="<?=$baseUrl?>/pages/contact-us.php">
          <p style="text-align:left;"><img class="float-left mr-3" style="width:35px;height:35px;" src="../assets/icons/address.png" alt="logo">
            Prk. Cervantes, Mabini Street, Tagum City</p>
          <p style="text-align: left;">
          <img class="float-left mr-3" style="width:35px;height:35px;" src="../assets/icons/operation-hours.png" alt="logo">
          9:00 AM - 7:00 PM
          </p>
          <p style="text-align: left;"><img class="float-left mr-3" style="width:35px;height:35px; " src="../assets/icons/call.png" alt="logo">(+63) 906-747-4104</p>
        </a>
        </div>

      </div>
 
    </div>
  </section>



  <div class="text-center mt-5" style="background-color: #6805f2; color:#fefefe; height:30px; width:100%; padding-top:5px; ">
    © Changs Gadget's - All Rights Reserve.
  </div>

</div>