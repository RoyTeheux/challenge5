<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="icon" type="image/png" sizes="16×16" href="../favicon/favicon-32.png"><!--browser tab icon recommended to keep at 32×32 for HD resolution-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/menustyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
   
</head>
<body>
    <div class="top"> 
    <div id="menu"> 
        <div class="NAVcontainer">
            <div class="menuimage"><a href="../index.php" class="menuknopp"><img src="../images/sitelogo.png" alt="kantine logo, maas catering"></a></div>
            <div class="menuknop"><a href="../index.php" class="menuknopp">HOME</a></div>
            <div class="menuknop"><a href="" class="menuknopp">MENU</a></div>
            <div class="menuknop"><a href="nl_contact.php" class="menuknopp">CONTACT</a></div>
            <div class="menuknop"><a href="nl/nl_aboutus.php"class="menuknopp">About Us</a></div>
            <div class="menuknop"><a href="form_nl.php" class="menuknopp">Druk hier om item te plaatsen</a></div>
        </div>
        <div class="translateknop"><a href="../eng/eng_menu.php" class="menuknopp"> <img src="../images/uk-flag.png" alt="United Kingdom flag"> </a></div>
        <div class="translatetag">translate to english:</div>
    </div> <!--einde menu -->
    </div> <!--einde top-->


    <div class="mid">
        <div class="left_border"></div>
        <div class="main_body">
        <?php include_once('../includes/connection.inc.php'); //connectie met DB maken
        include_once('../includes/select.inc_nl.php'); ?>
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