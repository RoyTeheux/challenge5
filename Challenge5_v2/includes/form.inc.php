<a href="eng_menu.php"><div class="return">RETURN</div></a>
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <input type="text" name="tb_title" value="" placeholder="vul een menu titel in"><br /> <!--title input -->
  <label for="foods">Choose a catagory:</label><br /> <!--start catagory part -->
  <select id="foods" name="tb_catagory"><!--catagory list -->
    <option value="drinks">drinks</option> <!--        option 1-->
    <option value="dishes">dishes</option> <!--option 2-->
    <option value="snacks">snacks</option> <!--        option 3-->
  </select><br /> <!--END catagory list -->
  <input type="file" name="file"/><br><br> <!--file uploader -->

  <input type="text" name="tb_price" value="" placeholder="vul een prijs in"><br /> <!--price input -->
  <input type="text" name="tb_description" value="" placeholder="vul een beschrijving in"><br /> <!--description input -->
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>
