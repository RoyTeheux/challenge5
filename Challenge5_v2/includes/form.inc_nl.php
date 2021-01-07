<a href="nl_menu.php"><div class="return">RETURN</div></a>
<div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <input type="text" name="tb_title" value="" placeholder="item naam"><br /> <!--title input -->
  <label for="foods">Kies een catagorie:</label><br /> <!--start catagory part -->
  <select id="foods" name="tb_catagory"><!--catagory list -->
    <option value="dranken">dranken</option> <!--        option 1-->
    <option value="warme dranken">warme dranken</option> <!--  option 2-->
    <option value="broodjes">broodjes</option> <!--       option 3-->
    <option value="snacks">snacks</option> <!--         option 4-->
    
  </select><br /> <!--END catagory list -->
  <input type="file" name="file"/><br><br> <!--file uploader -->

  <input type="text" name="tb_price" value="" placeholder="prijs"><br /> <!--price input -->
  <input type="text" name="tb_description" value="" placeholder="beschrijving"><br /> <!--description input -->
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div>
