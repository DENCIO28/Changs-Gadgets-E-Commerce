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
    <title>Changs Gadgets | About us</title>
    <link rel="shortcut icon" href="../assets/HL.png" type="image/x-icon" />
    <link rel="stylesheet" href="../styles/about-us.css">
    <link rel="stylesheet" href="../style.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
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
        .content {
         
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: wrap;
        }

        .about {
    
            width: 50%;
            height: 400px;
            box-sizing: border-box;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

    

        h1, h3, p {
            margin: 0;
            padding: 0;
        }

        @media (max-width: 768px) {
            .about {
                width: 100%;
                height: auto;
            }
        }

        /* You can adjust the font sizes for different screen sizes as needed */
        @media (max-width: 1200px) {
            h1 {
                font-size: 1.8em;
            }

            h3 {
                font-size: 1.4em;
            }

            p {
                font-size: 0.9em;
            }
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 1.6em;
            }

            h3 {
                font-size: 1.3em;
            }

            p {
                font-size: 0.8em;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.2em;
            }

            h3 {
                font-size: 1em;
            }

            p {
                font-size: 0.6em;
            }
        }

        @media (max-width: 360px) {
            h1 {
                font-size: 1em;
            }

            h3 {
                font-size: 0.8em;
            }

            p {
                font-size: 0.5em;
            }
        }
    </style>
    
<body style="font-family:'Poppins','Sans-Serif">
    <div class="container">
    <header style="max-width: 1512px ">
        <?php include($header)?>
    </header>
    <nav style="max-width: 1512px">
    <?php include($nav)?>
    </nav>
    <main>
        
    <div class="hero w3-container" style="max-width: 1512px">
    <div class="hero-info w3-center">
        <h1 style="font-weight:700; margin-bottom:3.5rem">ABOUT US</h1>
    </div>
</div>

<div class="w3-container w3-center mt-5 mb-3">
    <div class="w3-container w3-margin-bottom " style="display: flex; align-items:center; justify-content: center; flex-flow: wrap; ">
        <div class="w3-container w3-half" >
            <h4 style="color:#6805f2;">OUR STORY</h4>
            <h1 style="color:#6805f2; font-weight:600">ABOUT CHANG'S GADGETS</h1>
            <p style="margin-top:3%">Chang's Gadget was established to address the growing demand for high-quality smartphone products and services in Tagum City, Davao del Norte. Located at Prk. Cervantes, Mabini Street, our store is strategically positioned near prominent landmarks such as Jalee Pharmacy and Aquino Hospital, making it easily accessible to the local community.</p>
        </div>
        <div class="w3-container">
            <img class="w3-image" src="../assets/about_us/about-us.png" alt="About Us">
        </div>
    </div>
    
</div>

<div class="content w3-container " style=" display:flex;align-items:center;justify-content:center; flex-flow: wrap;">
    <div class="about left bgc-l w3-container w3-margin-bottom w3-third" style="width:50%; height: 400px">
        <div class="w3-container" >
            <h1 class="w3-display-top" style="font-weight:700">OUR</h1>
            <h3 class="w3-center" style="color:#6805f2; font-weight:600; margin-top:1.5rem">MISSION</h3>
            <p style="color:#6805f2; margin-top: .8rem; font-weight:500; text-align:center">At Chang's Gadget, our mission is to be the premier destination in Tagum City for all your smartphone needs. We are dedicated to providing our customers with high-quality, premium, and pre-owned Apple and Android products, alongside exceptional repair services and authentic accessories. Our goal is to ensure every customer receives personalized, expert care, transforming their mobile experience into one of unparalleled satisfaction and reliability.</p>
        </div>
    </div>
    <div class="about right bgc-r w3-container w3-margin-bottom w3-third"style=" width:50%; height: 400px">
        <div class="w3-container">
            <h1 style="font-weight:700; margin-top:18px">GOAL</h1>
            <h3 class="w3-center" style="color:#fefefe; font-weight:600; margin-top: 1rem">VISION</h3>
            <p style="color:#fefefe; margin-top:1rem;text-align:center">Our vision is to be recognized as the leading smartphone service provider in Davao del Norte, known for our commitment to quality, innovation, and customer satisfaction. We aspire to expand our offerings and continually enhance our expertise, ensuring that Chang's Gadget remains synonymous with trust, excellence, and cutting-edge mobile solutions. We envision a community where every individual has access to the latest technology and the best support, making life more connected and convenient.</p>
        </div>
    </div>
</div>
    <div class="linenisya" style="height:5px; background-color:#6805f2; margin-top:2rem"></div>
    </main>
    <footer>
        <?php include($footer)?>
    </footer>
</div>
</body>
</html>