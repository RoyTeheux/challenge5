<!DOCTYPE html><?php
    $images = array("img1", "img2", "img3","img4", "img5");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="icon" type="image/png" sizes="16×16" href="favicon/favicon-32.png"><!--browser tab icon recommended to keep at 32×32 for HD resolution-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <script src="js/app.js"></script>
</head>
<body>
    <div class="top"> 
    <div id="menu"> 
        <div class="NAVcontainer">
            <div class="menuimage"><a href="index.php" class="menuknopp"><img src="images/sitelogo.png" alt="kantine logo, maas catering"></a></div>
            <div class="menuknop"><a href="index.php" class="menuknopp">HOME</a></div>
            <div class="menuknop"><a href="nl/nl_menu.php" class="menuknopp">MENU</a></div>
            <div class="menuknop"><a href="nl/nl_contact.php" class="menuknopp">CONTACT</a></div>
            <div class="menuknop"><a href="nl/nl_aboutus.php"class="menuknopp">About Us</a></div>
        </div>
        <div class="translateknop"><a href="home_english.php" class="menuknopp"><img src="images/uk-flag.png" alt="United Kingdom flag"></a></div>
        <div class="translatetag">translate to english:</div>
    </div> <!--einde menu -->
    </div> <!--einde top-->


    <div class="mid">
        <div class="left_border"></div>
        <div class="main_body">
            <h1>Welkom op de kantine site!</h1>
            <h3>MAAS Catering staat voor natuurlijke vers eten dat
                dagelijks wordt voorbereid in uw kantine. </h3>
            <!-- Einde introductie -->
            <!-- Slideshow container -->
    <div class="slideshow-container">
<?php
    for ($i = 0; $i < count($images); $i++)//counts the ammount of images in the image var 
    {
?>
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"><?php echo $i+1 ?> / <?php echo count($images) ?></div>
    <img src="/challange4/images/<?php echo $images[$i] ?>.png" style="width:100%">
    <div class="text">MAAS fotoshow</div>
  </div>
<?php
    }
?>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<?php
    for ($i = 0; $i < count($images); $i++) {
?>
    <span class="dot" onclick="currentSlide(<?php echo $i+1 ?>)"></span>
<?php
    }
?>
</div>
<!--
    <p>
    <input type="submit" value="stop" onclick="stopslideshow();" />
    <input type="submit" value="start" onclick="startslideshow();" />
    <input type="submit" value="is running" onclick="valrunslideshow();" />
-->

<div class="FAQblock">
    <h2>Heeft u een vraag?</h2>
    <p>Krijg snel de antwoorden waar naar u zoek bent in onze VAQ. <br />
    Hier staan de meest gevraagde onderwerpen met de informatie erbij gezet
    </p>
    <a href="nl/nl_vaq.php">Lees hier meer</a>
</div>
</div><!--einde main -->
    <div class="right_border"></div>
</div> <!--einde middle-->


</div> <!--einde bottom-->
</body>
</html>
<?php //9mx%6kJ5 ?>

<footer class="footer-distributed">

<div class="footer-left">

    <h3>Maas<span>Catering</span></h3>

    <p class="footer-links">
        <a href="#" class="link-1">Home</a>
        
        <a href="#">Menu</a>
    
        <a href="#"></a>
    
        <a href="#">About Us</a>
        
        <a href="#">Faq</a>
        
        <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">Maas Catering © 2020</p>
</div>

<div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Arendstraat 12</span> 6135KT Sittard-Geleen</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p> +31-088 - 001 50 00</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">info@vistacollege.nl</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>About the company</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

        <a href="https://www.facebook.com/VISTAcollege.officialpage/"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/rocvistacollege"><i class="fa fa-twitter"></i></a>
        <a href="https://nl.linkedin.com/school/hetvistacollege/"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/RoyTeheux/challenge5"><i class="fa fa-github"></i></a>

    </div>

</div>

</footer>
    