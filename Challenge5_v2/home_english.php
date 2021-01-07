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
            <div class="menuimage"><a href="home_english.php" class="menuknopp"><img src="images/sitelogo.png" alt="kantine logo, maas catering"></a></div>
            <div class="menuknop"><a href="home_english.php" class="menuknopp">HOME</a></div>
            <div class="menuknop"><a href="eng/eng_menu.php" class="menuknopp">MENU</a></div>
            <div class="menuknop"><a href="eng/eng_contact.php" class="menuknopp">CONTACT</a></div>
            <div class="menuknop"><a href="nl/nl_aboutus.php"class="menuknopp">About Us</a></div>
        </div>
        <div class="translateknop"><a href="index.php" class="menuknopp"><img src="images/nl-vlag.png" alt="Nederlandse vlag"></a></div>
        <div class="translatetag">Vertaal naar Nederlands(Dutch):</div>
    </div> <!--einde menu -->
    </div> <!--einde top-->


    <div class="mid">
        <div class="left_border"></div>
        <div class="main_body">
        <h1>Welcome on the caferatia site!</h1>
            <h3>MAAS Catering stands for natural fresh food that
                gets prepared daily in your caferatia. </h3>
            <!-- Einde introductie -->
            <!-- Slideshow container -->
    <div class="slideshow-container">
<?php
    for ($i = 0; $i < count($images); $i++) {
?>
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"><?php echo $i+1 ?> / <?php echo count($images) ?></div>
    <img src="/challange4/images/<?php echo $images[$i] ?>.png" style="width:100%">
    <div class="text">MAAS Photoshow</div>
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
    <h2>Do you have a question?</h2>
    <p>Get all your answers quickly from our FAQ. <br />
    Here are all our most frequently asked topic with the information with them.
    </p>
    <a href="eng/eng_vaq.php">Read more here</a>
</div>
</div><!--einde main -->
    <div class="right_border"></div>
</div> <!--einde middle-->

<div class="bottom">
    <div class="left_lowerborder"></div>
    <div class="main_lowerbody"> <p> &copy; maas catering(2020)</p>
    </div><!--einde lowermain -->
    <div class="right_lowerborder"></div>
</div> <!--einde bottom-->
</body>
</html>
<?php //9mx%6kJ5