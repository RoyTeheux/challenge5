<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="icon" type="image/png" sizes="16×16" href="../favicon/favicon-32.png"><!--browser tab icon recommended to keep at 32×32 for HD resolution-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
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
            <div class="menuimage"><a href="../home_english.php" class="menuknopp"><img src="../images/sitelogo.png" alt="kantine logo, maas catering"></a></div>
            <div class="menuknop"><a href="../home_english.php" class="menuknopp">HOME</a></div>
            <div class="menuknop"><a href="" class="menuknopp">MENU</a></div>
            <div class="menuknop"><a href="eng_contact.php" class="menuknopp">CONTACT</a></div>
            <div class="menuknop"><a href="form.php" class="menuknopp">click here to add item</a></div>
        </div>
        <div class="translateknop"><a href="../nl/nl_menu.php" class="menuknopp"><img src="../images/nl-vlag.png" alt="Nederlandse vlag"></a></div>
        <div class="translatetag">Vertaal naar Nederlands(Dutch):</div>
    </div> <!--einde menu -->
</div><!--einde top-->

<body>
<main>

        <div id="Category1"></div>
        <div class="menu-bottom menu-container">
            <div class="menu menuleft">
                <div>
                    <h3>Sandwiches</h3>
                </div>
                <?php include("../eng/menus/sandwiches.php"); ?>
            </div>

            <div class="menu">
                <div>
                    <h3>Snacks</h3>
                </div>
                <?php include("../eng/menus/snacks.php"); ?>
            </div>
        </div>

        <div id="Category2"></div>
        <div class="menu-container">
            <div class="menu menuleft">
                <div>
                    <h3>Drinks</h3>
                </div>
                <?php include("../eng/menus/drinks.php"); ?>
            </div>

            <div class="menu">
                <div>
                    <h3>Warm Drinks</h3>
                </div>
                <?php include("../eng/menus/warmdrinks.php"); ?>
            </div>
        </div>
    </main>
    <main>
        
    </main>
    <script src="js/main.js"></script>
</body>
</html>
</body>
</html>