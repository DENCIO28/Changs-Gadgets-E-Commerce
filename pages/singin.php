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
    <link rel="stylesheet" href="../styles/signin.css">
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
            <div class="login">
                <div class="log-in-box">
                    <h1>Sing in</h1>
                    <h4>Login your account to continue</h4>

                    <div class="type-user">
                        <input type="text" placeholder="Username"><br>
                        <input type="password" placeholder="Enter Password">
                        <h6>Forgot your Password?</h6>
                    </div>
                    <button><h3>Sing up</h3></button>
                    <h5>Don't have an account? <b>Sing up</b></h5>
                    <p>or with</p>
                    
                    <div class="google-icon">
                    <img src="#" alt="icon">
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