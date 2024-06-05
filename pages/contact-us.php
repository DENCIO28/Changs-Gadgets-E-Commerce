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
    <title>CONTACT US</title>
    <link rel="stylesheet" href="../styles/contact-us.css">
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

<style>
    *{
        font-family: 'Poppins', 'Sans-Serif';
    }
    h3{
        color:#6805f2;
        font-weight: 600;
    }
</style>

<body >
    <div class="w3-container" style="max-width:1512px; margin: auto;">
    <header>
    <?php include($header)?>
    </header>
    <nav>
    <?php include($nav)?>
    </nav>
    <div>
        <main style="max-width: 1612px;">
        <div class="hero w3-container"style="max-width:1512px;background-image: url(../assets/about_us/banner-img.png); ">
        <div class="info w3-center" style="font-family:'Poppins','Sans-Serif'">
             <h1 style="color:#fefefe; font-weight:700">CONTACT US</h1><br>
             <p style="color:#fefefe; font-size:24px">We're just a click away.</p>
        </div>
     </div>
     <section style="display:flex; flex-flow: column; margin-top: 5re">
     <div class="w3-container " style="display:flex; align-items:center; justify-content:space-evenly; flex-flow: wrap;">
    
        <div class="w3-row-padding" style="display: flex;flex-flow:column; font-family:'Poppins','Sans-Serif'">

            <div class="w3-container w3-margin-bottom" >
                <div class="w3-container w3-padding-16"  >
                    <div>
                        <img src="../assets/icons/call.png" alt="icon" class="w3-image w3-left w3-margin-right" style="height:60px">
                    </div>
                    <div class="w3-container">
                        <h3>Call Us:</h3>
                        <p>+808 724 6309</p>
                    </div>
                </div>
            </div>
            <div class="w3-container w3-padding-16 w3-margin-bottom" >
                <img  src="../assets/icons/operation-hours.png" alt="icon" class="w3-image w3-left w3-margin-right"style="height:60px">
                <div class="w3-container">
                    <h3>Operating Time:</h3>
                    <p>+808 724 6309</p>
                </div>
            </div>
            <div class="w3-container w3-padding-16" >
                <img src="../assets/icons/address.png" alt="icon" class="w3-image w3-left w3-margin-right"style="height:60px">
                <div class="w3-container">
                    <h3>Address:</h3>
                    <p>Mabini, Davao</p>
                </div>
            </div>
        </div>
        <div class="w3-container w3-padding-16 mess-login">
            <h2 style="color:#6805f2; font-weight:500">Message Us</h2>
            <p>Our line is always open to hear you out.</p>
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input class="w3-input" type="text" placeholder="Your Name">
                    <input class="w3-input" type="email" placeholder="Your Email">
                </div>
                <div class="w3-half">
                    <input class="w3-input" type="text" placeholder="Phone Number">
                    <input class="w3-input" type="text" placeholder="Subject">
                </div>
            </div>
            <div class="w3-container">
                <input class="w3-input w3-padding-32" type="text" placeholder="Message">
            </div>
            <button class="w3-button w3-margin-top" style="background-color:#6805f2;color:#fefefe; font-weight:500">Send Message</button>
        </div>
    </div>

    <div class="w3-container w3-center" style=" max-width:1512px; background: #D9D9D9">
        <div class="w3-container">
        <h1 style="color: #6805f2; font-weight:600; margin-top:1rem">FIND US ON GOOGLE MAP</h1>
        </div>
        <div class="w3-container" style="height:30px">
        <P>Located at mabini ST. Tagum,8100 Davao del Norte</P>
        <br>
        </div>
        <div class="w3-image">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1609335340636!2d125.78885807403489!3d7.447440511739416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f953043eda96d3%3A0x5f2e17d8f2ce7b33!2sMabini%20St%2C%20Tagum%2C%20Davao%20del%20Norte!5e0!3m2!1sen!2sph!4v1716952061273!5m2!1sen!2sph" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
         
    </div>  
     </section>
     
     <div class="linenisya" style="height:5px; background-color:#6805f2; margin-top:2rem"></div>
    </main>
    <footer>
        <?php include($footer)?>
    </footer>
</div>
</body>
</html>