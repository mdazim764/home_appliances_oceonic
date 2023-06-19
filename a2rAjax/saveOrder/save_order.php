

<html lang="en">
  <head>

    <title>My Cart ||  <?php echo $domainTitleShow; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>


  </head>
  <body>



    <!-- header section being -->
    <div class="header">
      <div class="container">
        <img src="logo/bk.png" class="small-profile.jpeg" alt="">
      </div>
    </div>
    <!-- end of header section  -->


    <!--  product section being -->
    <main>
      <div class="basket">
          <div class="basket-module" style="margin-bottom: 20px;">
          <label for="promo-code">Add User</label>
          <input id="promo-code" type="address" name="promo-code" maxlength="5" class="promo-code-field" placeholder="">
          <button class="promo-code-cta" id="hide_address">Add</button>
          
        </div>
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
        $(document).ready(function() {
            $("#hide_address").click(function() {
                $("#show_address").toggle();
            });
        });
    </script>
    
      <div class="form-bg" id="show_address" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Add User</h3>
                    <form action="" method="post" id="regform" class="form-horizontal">


 <span id='msg'></span>
                       <input type="hidden" name="action" value="Registration">


        <input type="hidden" name="uid" id="uid" value="6124d4b352f6d352355">


                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="User Name">
                        </div>




                         <div class="form-group">
                            <label>Pin Code</label>
                            <input type="text" id="pincode" name="pincode" class="form-control" placeholder="******">
                        </div>


                         <div class="form-group">
                            <label>City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="Varanasi">
                        </div>



                        <div class="form-group">
                            <label>State</label>
                            <input type="text" id="state" name="state"  class="form-control" placeholder="Uttar Pradesh">
                        </div>

                         <div class="form-group">
                            <label>Country</label>
                            <input type="text"  id="country" name="country"  class="form-control" placeholder="India">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="@gmail.com">
                        </div>
                      <!--   <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div> -->
                       <!--  <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div> -->
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text"  id="mobile_no" name="mobile_no" class="form-control" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                      <!--   <div class="form-group">
                            <label>City</label>
                            <select class="form-control">
                                <option value="paris">Paris</option>
                                <option value="new york">New York</option>
                            </select>
                        </div> -->
                       <!--  <div class="check-terms">
                            <input type="checkbox" class="checkbox">
                            <span class="check-label">I agree to the terms</span>
                        </div> -->
                        <!-- <span class="signin-link">Already have an account? Click here to <a href="">Login</a></span> -->
                        <!-- <button class="btn signup">Submit</button> -->



<input class="btn signup" type="submit" name="submit" id="btn_submit" value="upload" class="btn btn-success">


<input class="btn signup" type="button" name="submit" id="btn_uploading" value="uploading..........." class="btn btn-primary">




<buttion class="btn signup" type="button" name="submit" id="btn_uploaded" value="uploaded" class="btn btn-warning">

  
uploaded
     
  
</buttion>


                    </form>
           



















<br><br>


        <!-- Use for futureA2r
        <div class="basket-module">
          <label for="promo-code">Enter a promotional code</label>
          <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
          <button class="promo-code-cta">Apply</button>
        </div>
        -->
        
        <div class="basket-labels">
          <ul>
            <li class="item item-heading">Item</li>
            <li class="price">Price</li>
            <li class="quantity">Quantity</li>
            <li class="subtotal">Subtotal</li>
          </ul>
        </div>


  <?php

    // start loop for show cart list

    foreach ($addToCartApiCartProductListShow as $addToCartApiCartProductListValue) 
      {
          $plistId_addToCartApiProduct=$addToCartApiCartProductListValue->plistId;

          $plistPriceId_addToCartApiProduct=$addToCartApiCartProductListValue->plistPriceId;

           //price per quantity  
          $quantity_addToCartApiProduct=$addToCartApiCartProductListValue->quantity;


          // added product quantity in add to cart
          $orderQuantity_addToCartApiProduct=$addToCartApiCartProductListValue->orderQuantity;

          $date_addToCartApiProduct=$addToCartApiCartProductListValue->date;


          // product name
          $productName_addToCartApiProduct=$addToCartApiCartProductListValue->productName;


          // product Code
          $productCode_addToCartApiProduct=$addToCartApiCartProductListValue->productCode;


           // product link
          $productlink_addToCartApiProduct=$addToCartApiCartProductListValue->productlink;

          
          // product real price without offer  
          $productRealPrice_addToCartApiProduct=$addToCartApiCartProductListValue->productRealPrice;


          // product show price after offer
          $productPriceAfterOffer_addToCartApiProduct=$addToCartApiCartProductListValue->productPriceAfterOffer;

          $productOfferAmountMulOrdrQuantity_addToCartApiProduct=$addToCartApiCartProductListValue->productOfferAmountMulOrdrQuantity;


          // it show the produt image
          $pImgImg_addToCartApiProduct=$addToCartApiCartProductListValue->pImgImg;


          // sub total original price
          $subTotalRealPrice_addToCartApiProduct=$addToCartApiCartProductListValue->subTotalRealPrice;

          // sub total offer price
          $subTotalofferPrice_addToCartApiProduct=$addToCartApiCartProductListValue->subTotalofferPrice;


         // sub total original price (minus) sub total offer price
          $subTotalPriceAfterOffer_addToCartApiProduct=$addToCartApiCartProductListValue->subTotalPriceAfterOffer;






       

  ?>
        
        <!-- show product -->
        <div class="basket-product">
          <div class="item">





            <!-- image section -->
            <div class="product-image">


              <img src="<?php echo $pImgImg_addToCartApiProduct; ?>" alt="<?php echo $productName_addToCartApiProduct;  ?>" class="product-frame">
            </div>
            <!-- end image section -->

            <!-- product description being -->
            <div class="product-details">

              <a href="../<?php echo $productlink_addToCartApiProduct;  ?>" >
              <h1>
                <strong >
                    <span class="item-quantity">
                      <?php

                      // product name
                        echo $productName_addToCartApiProduct;
                      ?>
                    </span> 
                    
                   
                </strong> 

                <span style="color:black;">
                  
                
                 <?php
                        echo $quantity_addToCartApiProduct;
                    ?>
                </span>    
              </h1>
            </a>

              <p>
                <strong>
                    Quantity : <?php

                      // added product quantity in add to cart

                        echo $orderQuantity_addToCartApiProduct;
                      ?>
                </strong>
              </p>
              <p>Product Code - 
                         <?php
                             // product Code
                               echo$productCode_addToCartApiProduct;
                         ?>
              </p>
            </div>
             <!-- end product description being -->
          </div><!---end item class --->


          <!-- price being -->
          <div class="price">
          <?php
               // product show price after offer
             echo$productPriceAfterOffer_addToCartApiProduct;
          ?>

          </div>
          <!-- end price -->

           <!-- quantity being - forFutureUseA2R-->
           <div class="quantity">
            <div class="counter">
              <!-- <span class="down" onClick='decreaseCount(event, this)'>-</span>-->
              <input type="readonly" value="<?php echo $orderQuantity_addToCartApiProduct; ?>">
              <!--<span class="up" onClick='increaseCount(event, this)'>+</span>-->
            </div>
          </div>
           <!-- end quantity being -->

          <!-- total price being -->
          <div class="subtotal">
           <?php


              // sub total original price (minus) sub total offer price
              echo $subTotalRealPrice_addToCartApiProduct;
           ?>
          </div>
          <!-- end price being -->


          <!-- get remove button -
          <div class="remove">
            <button>Remove</button>
          </div>
           <!-- end remove button -->


        </div>

      <?php

       }       // end loop for show cart list

      ?>


        <!----end basket-product class--->
        




         <!-- show product --
        <div class="basket-product">
          <div class="item">

            <!-- image section --
            <div class="product-image">
              <img src="http://shop.arogyambharat.com/upload/products/1622717834neuro%20care%20tablet%2030%20tab.jpg" alt="Placholder Image 2" class="product-frame">
            </div>
       
            <!-- end image section -->

            <!-- product description being --
            <div class="product-details">
              <h1>
                <strong>
                    <span class="item-quantity">4</span> 
                    DOWN B.P 30TAB
                </strong> DOWN B.P 30TAB
              </h1>

              <p><strong>Navy, Quantity 18</strong></p>
              <p>Product Code - 232321939</p>
            </div>
             <!-- end product description being -->
          </div><!---end item class --->


          <!-- price being --
          <div class="price">26.00</div>
          <!-- end price -->

           <!-- quantity being --
           <div class="quantity">
            <div class="counter">
              <span class="down" onClick='decreaseCount(event, this)'>-</span>
              <input type="text" value="1">
              <span class="up" onClick='increaseCount(event, this)'>+</span>
            </div>
          </div>
           <!-- end quantity being -->

          <!-- total price being --
          <div class="subtotal">104.00</div>
          <!-- end price being -->


          <!-- get remove button --
          <div class="remove">
            <button>Remove</button>
          </div>
           <!-- end remove button --


        </div><!----end basket-product class--->





       <!-- get Placeorder button -
        <div class="mt-4 apointment" >
          <a href="shoping_cart.php" title="">
            <button class="btn btn-success text-uppercase" style="margin-top: 20px;">
            Placeorder
            </button>
          </a>
        </div>
        <!-- Placeorder button end -->


      </div><!---end basket--->


      <!-- sidebar section being -->
      <aside>
        <div class="summary">

          <!-- get total amount -->
          <div class="summary-total-items">
            <span class="total-items"></span>Total amount
          </div>
          <!-- end -->

          <!-- get product summary -->
          <div class="summary-subtotal">

            <!-- show product amount -->
            <div class="subtotal-title">Product amount</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
                <?php echo $grandTotalProductRealPrice; ?>
            </div><br><br>
            <!--end show product amount -->


            <!-- show offer amount -->
            <div class="subtotal-title">Offer amount</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
               - <?php echo $grandTotalPriceAfterOffer; ?>
            </div><br><br>
            <!--end show offer amount -->
        


           <!-- show shipping charge -->    
            <div class="subtotal-title">Shipping Charge</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
               <?php echo $deliveryChargeTotalApi; ?>
            </div>
            
            <!--end show shipping charge -->
            
            <div class="summary-promo hide">
              <div class="promo-title">Promotion</div>
              <div class="promo-value final-value" id="basket-promo"></div>
            </div>
          </div>
          <!-- end product summary -->

          
          <!-- get total amount -->
          <div class="summary-total">
            <div class="total-title">Total</div>
            <div class="total-value final-value" id="basket-total">

              <?php echo $grandTotalPriceAfterOffer;  ?>
            </div>
          </div>
          <!-- end total amount -->


          <!-- get Placeorder button -->
        <div class="mt-4 apointment" >
          <a href="#" title="">
            <button class="btn btn-success text-uppercase" onclick="palceOrder()" style="margin-top: 20px;">
            Placeorder
            </button>
          </a>
        </div>


        </div><!--- end summary class --->
      </aside>
      <!-- end sidebar section -->
    </main>
   <!-- end of product section being -->
    

    <!-- Footer section being -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p class="h6" style="color: #000; text-align: center; font-size: 15px;">&copy; All right Reversed.<a class="text-green ml-2" href="" target="_blank">Oceonic it solution pvt Ltd </a></p>
          </div>
          <hr>
        </div>
      </div>
    </section>
    <!-- end Footer section being -->
    
  </body>
</html>







    <style type="text/css">
    /* Header Title */
    .header {
    background: #7fb82d !important;
    font-size:20px !important;
    }
    .container img
    {
    height: 40px !important;
    width: 120px !important;
    margin: 10px !important;
    }
    @media (max-width: 600px)
    {
    .container img
    {
    height: 40px;
    width: 120px;
    margin: 10px;
    }

    </style>




















<?php 

$a2rTokenKey="a2rhos1234";
  // $api_name='regcoded.php';

   //$api_name='https://a2rstore.in/oceonicApi/ecommerce/v1/api/addressApi.php?a2rTokenKey='.$a2rTokenKey.'&action=addAddress';
   $api_palceOrder = 'https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/orderApi.php?a2rTokenKey=a2rrebit&uid=5f4e3cf3b22fc805162&action=saveOrder';
   
?>

<!-- 
<script src="jquery.js">
  

</script> -->


<script >
  
  var api_url='<?php echo $api_name;  ?>';
  var api_palceOrder='<?php echo $api_palceOrder;  ?>';

  //alert(api_url);
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/formApiUpload.js" >

  

</script>







