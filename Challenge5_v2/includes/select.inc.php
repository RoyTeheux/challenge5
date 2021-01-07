<?php 

    $sql = "SELECT * FROM tb_menu_item";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        
        foreach($result as $key => $row) {
            echo "<div class='foodwrapper'> <div class='foodmenu'> <div class='foodtitle'><h1>" . $row['title'] . "</h1></div>";
            echo "<div class='foodcatagory'><h2> " . $row['catagory'] . "</h2> </div>";
            echo "<h2><img class='foodimage' src='../imagess/" . $row['picture'] . "' /></h2>";
            echo "<div class='destriptioncontainer'> <div class='foodprice'> &pound;" . $row['price'] . "</div><br />";
            echo "<div class='fooddescription'>" . $row['description'] . "</div></div></div></div>";
        }
?>