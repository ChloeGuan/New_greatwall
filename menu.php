<!DOCTYPE html>
<html lang="en">
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link href="../css/responsive.css" rel="stylesheet" type="text/css"/>
  <!-- View -->
 <headReplace metal:use-macro="/templating/head.xhtml/meta_head">
  </headReplace>
  
    <navReplace metal:use-macro="./templating/nav.xhtml/nav_bar">
    </navReplace>
  <body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/main.js"></script>
	
    <div id="menudiv">
<h1 class="menuT"> MENU & ORDER ONLINE</h1>
        
    <div id="shoppingdiv">
<h1 class="shoppingT">Shopping Cart</h1>
      <div id="shoppinginfo">
<hr class="style18"></hr>
        <table id="productTable">

          <thead>
            <tr class="shoppingT">
                <th>Image</th>
                <th>Name</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Add</th>
            </tr>
          </thead>
          <tbody id="productslist">
            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->


            <!-- THIS SECTION WILL BE REPLACED BY SERVER GENERATED ROWS -->
          </tbody>
        </table>


        <input type="button" value="Start Cart" id="startCart" class="button4"/>
        <input type="button" value="Cancel Cart" id="cancelCart" class="button4"/>

        <h2 class="shoppingT">Cart Summary</h2>
        <ul id="shoppingCart">
          <!--<li data-item-qty="1" data-item-sku="sk-438s3x">Coffee Cup (1) &#160;
            <input type="button" data-remove-button="remove" value="X"/></li>-->
        </ul>
        <input type="button" value="Check Out" id="checkoutcart" class="button3"/>
        <span style="display: inline; font-size: 8pt;"><i>You'll see taxes and other shipping costs (ha ha) during checkout.</i></span>
<br></br>
<br></br>
      </div>
    </div>

</div>

    <footerReplace metal:use-macro="/templating/footer.xhtml/page_footer">
    </footerReplace>
 <script src="js/function.js">
    </script>
      <script src="js/main.js">
    </script>

  </body>
</html>
