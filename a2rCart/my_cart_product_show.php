<main>

      <div class="basket">
      
      <!--
        <div class="row">
          <div class="col-sm-6">
            <div class="basket-module" style="margin-bottom: 20px;">
            <a href="order_list.php">
              <button class="promo-code-cta">Order List</button>
            </a> 
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="basket-module" style="margin-bottom: 20px;">
        
            <input type="text" readonly class="promo-code-cta" value="<?php echo $uadd_address_addAddressApi; ?>">
          
               <a href="my_address.php"> 
                   <button class="promo-code-cta" >Edit/Add Address</button>
               </a>    
          
            </div>
          </div>
        </div>
      -->



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
                </div>
            </div>
        </div>
    </div>
  </div>

<style type="text/css">
  @media only screen and (max-width: 467px)
  {
  .mob_hide{
   display: none;
  }
  }

  @media (min-width: 700px)
  {
    .form-container{
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    padding: 30px;
    width: 200%;
    border-radius: 20px;
     box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
   height: 100%;
 }


  }
  .form-container{
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    padding: 10px;
    border-radius: 20px;
   box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
   height: 100%;
}
.form-container .title{
    color: #000;
    font-size: 25px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 25px;
}
.form-container .title:after{
    content: '';
    background-color: #0090f0;;
    height: 3px;
    width: 60px;
    margin: 10px 0 0;
    display: block;
    clear: both;
}
.form-container .sub-title{
    color: #333;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 20px;
}
.form-container .form-horizontal{ font-size: 0; }
.form-container .form-horizontal .form-group{
    color: #333;
    width: 50%;
    padding: 0 8px;
    margin: 0 0 15px;
    display: inline-block;
}
.form-container .form-horizontal .form-group:nth-child(4){ margin-bottom: 30px; }
.form-container .form-horizontal .form-group label{
    font-size: 17px;
    font-weight: 600;
}
.form-container .form-horizontal .form-control{
    color: #888;
    background: #fff;
    font-weight: 400;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 12px;
    border-radius: 10px;
    border: 2px solid #e7e7e7;
    box-shadow: none;
}
.form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #dcdcdc; }
.form-container .form-horizontal .check-terms{
    padding: 0 8px;
    margin: 0 0 25px;
}
.form-container .form-horizontal .check-terms .check-label{
    color: #333;
    font-size: 14px;
    font-weight: 500;
    font-style: italic;
    vertical-align: top;
    display: inline-block;
}
.form-container .form-horizontal .check-terms .checkbox{
    height: 17px;
    width: 17px;
    min-height: auto;
    margin: 2px 8px 0 0;
    border: 2px solid #d9d9d9;
    border-radius: 2px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease 0s;
}
.form-container .form-horizontal .check-terms .checkbox:before{
    content: '';
    height: 5px;
    width: 9px;
    border-bottom: 2px solid #0090f0;;
    border-left: 2px solid #0090f0;;
    transform: rotate(-45deg);
    position: absolute;
    left: 2px;
    top: 2.5px;
    transition: all 0.3s ease;
}
.form-container .form-horizontal .check-terms .checkbox:checked:before{ opacity: 1; }
.form-container .form-horizontal .check-terms .checkbox:not(:checked):before{ opacity: 0; }
.form-container .form-horizontal .check-terms .checkbox:focus{ outline: none; }
.form-container .signin-link{
    color: #333;
    font-size: 14px;
    width: calc(100% - 190px);
    margin-right: 30px;
    display: inline-block;
    vertical-align: top;
}
.form-container .signin-link a{
    color: #0090f0;;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: #0090f0;;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 8% 1px;
    border-radius: 15px;
    transition: all 0.3s ease 0s;
    margin-bottom: 20px;
}
.form-container .form-horizontal .btn:hover,
.form-container .form-horizontal .btn:focus{
    text-shadow: 0 0 5px rgba(0,0,0,0.5);
    box-shadow: 3px 3px rgba(0,0,0,0.15),5px 5px rgba(0,0,0,0.1);
    outline: none;
}
@media only screen and (max-width:479px){
    .form-container .form-horizontal .form-group{ width: 100%; }
    .form-container .signin-link{
        width: 100%;
        margin: 0 10px 15px;
    }
}


.zoom {
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

<div class="alert alert-Info">
  <strong><i class="fa fa-shopping-cart" aria-hidden="true"></i></strong> Shopping Cart <a href="../index.php" class="alert-link">
      <i class="fa fa-share-alt" aria-hidden="true"></i></span> Continue shopping
  </a>
</div>
<div class="mob_hide">
<hr>

<div class="row" style="text-align: center;">
    <div class="col-sm-2 col-4">Item</div>
    <div class="col-sm-4 col-8">Name</div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;">
         <div class="col-3">Price</div>
         <div class="col-3">Quantity</div>
         <div class="col-3">Subtotal</div>
         <div class="col-3">Action</div>
       </div> 
    </div>
</div>
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


<div class="row" style="text-align: center;margin-top: 20px;background-color: #fff;padding-top: 10px; padding-bottom: 10px;box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;">
    <div class="col-sm-2 col-4">
      <img src="<?php echo $pImgImg_addToCartApiProduct; ?>" alt="<?php echo $productName_addToCartApiProduct;  ?>" style="width: 100%; height: 80px;">
    </div>
    <div class="col-sm-4 col-8" style="text-align: left;">
      <div>
        <span><a href="../<?php echo $productlink_addToCartApiProduct;  ?>" ><strong><?php echo $productName_addToCartApiProduct;  ?> </strong></a></span> <br>
        <span>Quantity :
             <?php
                  echo $orderQuantity_addToCartApiProduct;
             ?>
         </span> <br>
        <span>Product Code - 
                      <?php
                         // product Code
                            echo$productCode_addToCartApiProduct;
                      ?> 
        </span> <br>
      </div>
    </div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;margin-top: 5%;">
         <div class="col-3 ">Rs 
           <?php
               // product show price after offer
             echo$productPriceAfterOffer_addToCartApiProduct;
          ?>/-
         </div>
         <div class="col-3">
           <form>
            <!-- Quantity edit only purpose -->
             <input type="number" min="0" value="<?php echo $orderQuantity_addToCartApiProduct; ?>" style="width: 100%; color : #fff; margin-bottom: 5px; background-color: <?php echo $btn_cartColorA2R; ?> ">
             <!-- end Quantity edit only purpose -->
              <br>
              <!-- read only purpose -->
             <input type="readonly" min="0" value="<?php echo $orderQuantity_addToCartApiProduct; ?>" style="width: 100%; color : #fff; background-color: <?php echo $btn_cartColorA2R; ?> ">
             <!-- end read only purpose -->
           </form>
         </div>
         <div class="col-3">
          Rs 
           <?php
              // sub total original price (minus) sub total offer price
              echo $subTotalRealPrice_addToCartApiProduct;
           ?>/-
         </div>
         <div class="col-3">
          <i class="fa fa-edit" style="font-size:24px"></i>
          <i class="fa fa-remove" style="font-size:24px; margin-left: 10px;color: red;"></i> 
         </div>
       </div> 
    </div>
</div>

<?php

       }       // end loop for show cart list

      ?>


        <!----end basket-product class--->
  




        <!-- Use for futureA2r
        <div class="basket-module">
          <label for="promo-code">Enter a promotional code</label>
          <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
          <button class="promo-code-cta">Apply</button>
        </div>
        -->
        
        <!------------------------------------------------------------------------- update 12-04-22 by manuraj sharma --

        <div class="basket-labels" style="padding-right: 15px;">
          <ul>
            <li class="item item-heading">Item</li>
            <li class="price">Price</li>
            <li class="quantity">Quantity</li>
            <li class="subtotal">Subtotal</li>
          </ul>
        </div>


  
        
        <!-- show product --
        <div class="basket-product">
          <div class="item">





            <!-- image section --
            <div class="product-image" >

              
              <img src="<?php echo $pImgImg_addToCartApiProduct; ?>" alt="<?php echo $productName_addToCartApiProduct;  ?>" class="product-frame zoom" style="margin-left: 10px;height: 160px;">
            </div>
            <!-- end image section --

            <!-- product description being --
            <div class="product-details">

              <a href="../<?php echo $productlink_addToCartApiProduct;  ?>" >
              <h6>
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
              </h6>
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
             <!-- end product description being --
          </div><!---end item class ---


          <!-- price being --
          <div class="price">
          <?php
               // product show price after offer
             echo$productPriceAfterOffer_addToCartApiProduct;
          ?>

          </div>
          <!-- end price --

           <!-- quantity being - forFutureUseA2R--
           <div class="quantity">
            <div class="counter">
              <!-- <span class="down" onClick='decreaseCount(event, this)'>-</span>--
              <input type="readonly" value="<?php echo $orderQuantity_addToCartApiProduct; ?>" style="background-color: <?php echo $btn_cartColorA2R; ?>">
              <!--<span class="up" onClick='increaseCount(event, this)'>+</span>--
            </div>
          </div>
           <!-- end quantity being --

          <!-- total price being --
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
           <!-- end remove button --


        </div>

      
        




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
             <!-- end product description being --
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

              <?php
                    // check address uploaded or not 
                  
                    
                    //if($cout_addAddressApiShow==0)
                  if($uadd_address_addAddressApi=='')
                    {
              ?>
                      <span>Address Not Added</span>
                      <a href="my_address.php">
                            <button type="button"  class="btn btn-danger">
                                  Add Address
                            </button>
                      </a>  
                      
                            

              <?php

                    }
                  else{
              ?>

             
           <!-- Payment Method-->

            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="pay" id='codRadio'>Cash On Delivery
              </label>
            </div>
            <div class="form-check" style="margin-bottom: 15px;">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="pay" id="payRadio">Pay Online
              </label>
            </div>




                     <!-- Payment Method--

                     <input type="radio" name="pay" id='codRadio'> Cash On Delivery
                     <br>
                     <input type="radio" name="pay" id="payRadio">Pay Online

                    -->


                     <script>
$(document).ready(function(){
  
  $("#codDiv").hide();

    $("#payDiv").hide();

  $("#codRadio").click(function(){
    $("#codDiv").show();

    $("#payDiv").hide();

    console.log('ffff');
  });
$("#payRadio").click(function(){
    $("#codDiv").hide();

    $("#payDiv").show();

    console.log('ffff');
  });
});
</script>


                     <!-- end payment method -->

                  <div id="payDiv">

                       <input type="text" value="Online Pay not Available" class="btn btn-danger " readonly>
                  </div>  



                <!-- this div use for add to cart -->
 



                <div id="codDiv"><!-- this div use for check it is cash on delivery-->
          
                  <form  id="regform" enctype="multipart/form-data" class="form-horizontal">
          
                       <span id="lblmsg"></span>

                       <input type="hidden" id="uid" name="uid" value="<?php echo $userId_a2r; ?>" >

                       <input type="hidden" id="pincode" name="pincode" value="232101" >

                       <input type="submit"  name="submit" id="btn_submit " value="Place Order" class="btn" style="background-color: <?php echo $btn_cartColorA2R; ?>">

                       <input type="button" name="submit" id="btn_uploading" value="Place Order..........." class="btn btn-warning">

                      <button type="button" name="submit" id="btn_uploaded" value="Succesfully Sign In" class="btn btn-danger">
                                    Order placed
                      </button>
                    </form>

                    <!--end this div use for add to cart --> 

                    <?php

                      }  //end check address uploaded or not

                    ?>

                  </div>  <!--end this div use for check it is cash on delivery-->

        </div>

        
        
        </div><!--- end summary class --->
  

      </aside>

      <!-- end sidebar section -->
    </main>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php 

// this code is use for save Order 


   $api_name=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=saveOrder';
   
?>

<!--<script src="jquery.js">
</script> 
-->


<script >
  
  var api_url='<?php echo $api_name;  ?>';
  
</script>






<script src="../a2rAjax/saveOrder/js/jquery.js">
  

</script>
<script src="../a2rAjax/saveOrder/js/formApiUpload.js" >
</script>




<!--// this code is use for save Order -->