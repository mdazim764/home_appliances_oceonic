<?php
error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../A2Rinclude/top-header.php');     // for use top-header

include('../A2Rinclude/root_1_folder.php');   // root 1 folder for include other folder

// get product detail list  data from orderApi


 $orderDetailApiUrl=$ApiUrlEcommerce."orderApi.php?a2rTokenKey=".$a2rTokenKey."&uid=".$userId_a2r."&action=orderProductList&orderId=".$orderId_get;

  
// Read JSON file
  $orderDetailApiJsonData = file_get_contents($orderDetailApiUrl);
// Decode JSON data into PHP array
  $orderDetailApiResponseData = json_decode($orderDetailApiJsonData);
// All user data exists in 'data' object
  $orderDetailApiCartProductListShow= $orderDetailApiResponseData->product;  
// for product show 

//print_r($orderDetailApiCartProductListShow);
  $orderDetailApiTotalShow= $orderDetailApiResponseData->total;         // for total product show



// $orderDetailApiTotalShow->grandTotalOfferPrice;
// end of  get product detail list  data from orderApi


//print_r($orderDetailApiCartProductListShow);



// grand total price detail from api

// grand total real price of products
$grandTotalProductRealPrice=$orderDetailApiTotalShow->grandTotalPrice;

// grand total offer price of products
$grandTotalProductOfferPrice=$orderDetailApiTotalShow->grandTotalOfferPrice;

// grand total price (minus) Offer Price
$grandTotalPriceAfterOffer=$orderDetailApiTotalShow->grandTotalPriceAfterOffer;

// delivery name
$deliveryNameTotalApi=$orderDetailApiTotalShow->deliveryName;

// delivery name
$deliveryChargeTotalApi=$orderDetailApiTotalShow->deliveryCharge;



//end grand total price detail from api


//


?>

<html lang="en">
  <head>

    <title>Order Detail ||  <?php echo $domainTitleShow; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>
     


    <?php include('include/header_cdn.php');   // profile header cdn for include header cdn
     ?>

  </head>
  <body>

    <?php include('include/header.php');   // profile header for include header 
     ?>


<!--  product section being -->
     <div class="container">
       
       <!--
        <div class="basket-module" style="margin-bottom: 20px;">
          <a href="my_cart.php">
            <button class="promo-code-cta">My Cart</button>
          </a>
          
            
          
        </div>
       -->


        
      <!-- edit by manuraj 14-04-22 --  
        <div class="basket-labels">
          <ul>
            <li class="item item-heading">Item</li>
            <li class="price">Price</li>
            <li class="quantity">Status</li>
            <li class="subtotal">Subtotal</li>
          </ul>
        </div>
      --> 

      <div class="mob_hide">
<hr>

<div class="row" style="text-align: center;">
    <div class="col-sm-2 col-4">Img</div>
    <div class="col-sm-4 col-8">Item Name</div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;">
         <!--<div class="col-3">Amount</div>
         <div class="col-3">Status</div>
         <div class="col-3">Total Amount</div>
         <div class="col-3">&nbsp;</div> -->
         <div class="col-6">Price</div>
         <div class="col-6">SubTotal</div>
       </div> 
    </div>
</div>
</div> 



    <?php

    // start loop for show cart list

    foreach ($orderDetailApiCartProductListShow as $orderDetailApiCartProductListValue) 
      {
          $plistId_orderDetailApiProduct=$orderDetailApiCartProductListValue->plistId;

          $plistPriceId_orderDetailApiProduct=$orderDetailApiCartProductListValue->plistPriceId;

           //price per quantity  
          $quantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->quantity;


          // added product quantity in add to cart
          $orderQuantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->orderQuantity;



          // product name
          $productName_orderDetailApiProduct=$orderDetailApiCartProductListValue->productName;


          // product Code
          $productCode_orderDetailApiProduct=$orderDetailApiCartProductListValue->productCode;


           // product link
          $productlink_orderDetailApiProduct=$orderDetailApiCartProductListValue->productlink;

          
          // product real price without offer  
          $productRealPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->productRealPrice;


          // product show price after offer
          $productPriceAfterOffer_orderDetailApiProduct=$orderDetailApiCartProductListValue->productPriceAfterOffer;

          $productOfferAmountMulOrdrQuantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->productOfferAmountMulOrdrQuantity;


          // it show the produt image
          $pImgImg_orderDetailApiProduct=$orderDetailApiCartProductListValue->pImgImg;


          // sub total original price
          $subTotalRealPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalRealPrice;

          // sub total offer price
          $subTotalofferPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalofferPrice;


         // sub total original price (minus) sub total offer price
          $subTotalPriceAfterOffer_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalPriceAfterOffer;



         $date_orderDetailApiProduct=$orderDetailApiCartProductListValue->date;
         $originalDate = $date_orderDetailApiProduct;
          $newDate = date("d-m-Y H:i:s", strtotime($originalDate));

       

  ?>

       <div class="row" style="text-align: center;margin-top: 20px;background-color: #fff;padding-top: 10px; padding-bottom: 10px;box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;">

    <div class="col-sm-2 col-4">
      <img src="<?php echo $pImgImg_orderDetailApiProduct; ?>" alt="<?php echo $productName_orderDetailApiProduct;  ?>"  style="width:100%; height: 150px;">
    </div>
    <div class="col-sm-4 col-8" style="text-align: left;">
      <div>
        <span><a href="../<?php echo $productlink_orderDetailApiProduct;  ?>" >
          <strong>
           <?php
                      // product name
                        echo $productName_orderDetailApiProduct;
                      ?>
          </strong></a></span> <br>

          <!--
        <span>Product Code - 
                      <?php
                             // product Code
                               echo$productCode_orderDetailApiProduct;
                         ?>
        </span> <br>
        -->
        <span>Quantity :
             <?php
                        echo $quantity_orderDetailApiProduct;
                    ?>
         </span> <br>
        <span>Order Quantity :
             <?php

                      // added product quantity in add to cart

                        echo $orderQuantity_orderDetailApiProduct;
                      ?>
         </span> <br>
        <span>Date - 
                      <?php
                         // product cart date
                            echo $newDate;
                      ?> 
        </span> <br>
      </div>
    </div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;margin-top: 5%;">
        <!--
         <div class="col-3 ">Rs 
           <?php
               // product show price after offer
             echo $totalAmount_orderListApi;
          ?>/-
         </div>
         <div class="col-3">
           <?php echo $deliveryStatus_orderListApi;?>
         </div>
         <div class="col-3">
          Rs 
           <?php
              // sub total original price (minus) sub total offer price
              echo $totalAmount_orderListApi;
           ?>/-
         </div>
         <div class="col-3">
           <a href="#" class="btn btn-outline-primary" role="button">Remove</a>
         </div>
       -->

         <div class="col-6">
           Rs 
           <?php
           // Product real price
            echo $productPriceAfterOffer_orderDetailApiProduct;
            ?>/-
         </div>
         <div class="col-6">
          Rs 
           <?php
              // sub total original price (minus) sub total offer price
              echo $subTotalRealPrice_orderDetailApiProduct;
           ?>/- 
         </div>
       </div> 
    </div>
</div>

      <?php

       }       // end loop for show cart list

      ?>

</div>

     


    <!--  product section being --
    <main>
      <div class="basket">

        <div class="basket-module" style="margin-bottom: 20px;">
          <a href="order_list.php">
            <button class="promo-code-cta">Order List</button>
          </a>
          
          <a href="my_cart.php"> 
             <button class="promo-code-cta" >My Cart</button>
          </a>   
          
        </div>
         








<br><br>


        <!-- Use for futureA2r
        <div class="basket-module">
          <label for="promo-code">Enter a promotional code</label>
          <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
          <button class="promo-code-cta">Apply</button>
        </div>
        --
        
        <div class="basket-labels">
          <ul>
            <li class="item item-heading">Item</li>
            <li class="price">Price</li>
            <!--<li class="quantity">Quantity</li>--
            <li class="subtotal">Subtotal</li>
          </ul>
        </div>


  <?php

    // start loop for show cart list

    foreach ($orderDetailApiCartProductListShow as $orderDetailApiCartProductListValue) 
      {
          $plistId_orderDetailApiProduct=$orderDetailApiCartProductListValue->plistId;

          $plistPriceId_orderDetailApiProduct=$orderDetailApiCartProductListValue->plistPriceId;

           //price per quantity  
          $quantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->quantity;


          // added product quantity in add to cart
          $orderQuantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->orderQuantity;

          $date_orderDetailApiProduct=$orderDetailApiCartProductListValue->date;


          // product name
          $productName_orderDetailApiProduct=$orderDetailApiCartProductListValue->productName;


          // product Code
          $productCode_orderDetailApiProduct=$orderDetailApiCartProductListValue->productCode;


           // product link
          $productlink_orderDetailApiProduct=$orderDetailApiCartProductListValue->productlink;

          
          // product real price without offer  
          $productRealPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->productRealPrice;


          // product show price after offer
          $productPriceAfterOffer_orderDetailApiProduct=$orderDetailApiCartProductListValue->productPriceAfterOffer;

          $productOfferAmountMulOrdrQuantity_orderDetailApiProduct=$orderDetailApiCartProductListValue->productOfferAmountMulOrdrQuantity;


          // it show the produt image
          $pImgImg_orderDetailApiProduct=$orderDetailApiCartProductListValue->pImgImg;


          // sub total original price
          $subTotalRealPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalRealPrice;

          // sub total offer price
          $subTotalofferPrice_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalofferPrice;


         // sub total original price (minus) sub total offer price
          $subTotalPriceAfterOffer_orderDetailApiProduct=$orderDetailApiCartProductListValue->subTotalPriceAfterOffer;






       

  ?>
        
        <!-- show product --
        <div class="basket-product">
          <div class="item">





            <!-- image section --
            <div class="product-image" id="img">


              <img src="<?php echo $pImgImg_orderDetailApiProduct; ?>" alt="<?php echo $productName_orderDetailApiProduct;  ?>" class="product-frame">
            </div>
            <!-- end image section -->

            <!-- product description being --
            <div class="product-details">

              <a href="../<?php echo $productlink_orderDetailApiProduct;  ?>" >
              <h1>
                <strong >
                    <span class="item-quantity">
                      <?php

                      // product name
                        echo $productName_orderDetailApiProduct;
                      ?>
                    </span> 
                    
                   
                </strong> 

                <span style="color:black;">
                  
                
                 <?php
                        echo $quantity_orderDetailApiProduct;
                    ?>
                </span>    
              </h1>
            </a>

              <p>
                <strong>
                    Quantity : <?php

                      // added product quantity in add to cart

                        echo $orderQuantity_orderDetailApiProduct;
                      ?>
                </strong>
              </p>
              <!--
              <p>Product Code - 
                         <?php
                             // product Code
                               echo$productCode_orderDetailApiProduct;
                         ?>
              </p>
            --
            </div>
             <!-- end product description being --
          </div><!---end item class ---


          <!-- price being --
          <div class="price">
          <?php
               // product show price after offer
             echo$productPriceAfterOffer_orderDetailApiProduct;
          ?>

          </div>
          <!-- end price --

         

          <!-- total price being --
          <div class="subtotal">
           <?php


              // sub total original price (minus) sub total offer price
              echo $subTotalRealPrice_orderDetailApiProduct;
           ?>
          </div>
          <!-- end price being -->


          <!-- get remove button -
          <div class="remove">
            <button>Remove</button>
          </div>
           <!-- end remove button --


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
        <!-- Placeorder button end --


      </div><!---end basket--->


      <!-- sidebar section being --
      <aside>
        <div class="summary">

          <!-- get total amount --
          <div class="summary-total-items">
            <span class="total-items"></span>Total amount
          </div>
          <!-- end -->

          <!-- get product summary --
          <div class="summary-subtotal">

            <!-- show product amount --
            <div class="subtotal-title">Product amount</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
                <?php echo $grandTotalProductRealPrice; ?>
            </div><br><br>
            <!--end show product amount --


            <!-- show offer amount --
            <div class="subtotal-title">Offer amount</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
               - <?php echo $grandTotalPriceAfterOffer; ?>
            </div><br><br>
            <!--end show offer amount -->
        


           <!-- show shipping charge --   
            <div class="subtotal-title">Shipping Charge</div>
            <div class="subtotal-value final-value" id="basket-subtotal">
               <?php echo $deliveryChargeTotalApi; ?>
            </div>
            
            <!--end show shipping charge --
            
            <div class="summary-promo hide">
              <div class="promo-title">Promotion</div>
              <div class="promo-value final-value" id="basket-promo"></div>
            </div>
          </div>
          <!-- end product summary -->

          
          <!-- get total amount --
          <div class="summary-total">
            <div class="total-title">Total</div>
            <div class="total-value final-value" id="basket-total">

              <?php echo $grandTotalPriceAfterOffer;  ?>
            </div>
          </div>
          <!-- end total amount --


          <!-- get Placeorder button --
        <div class="mt-4 apointment" >
          <a href="#" title="">
            <button class="btn btn-success text-uppercase" style="margin-top: 20px;">
            Pending
            </button>
          </a>
        </div>


        </div><!--- end summary class ---
      </aside>
      <!-- end sidebar section --
    </main>
   <!-- end of product section being -->
    

    <!-- Footer section being --
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






<?php 

$a2rTokenKey="a2rhos1234";
  // $api_name='regcoded.php';

   $api_name='https://a2rstore.in/oceonicApi/ecommerce/v1/api/addressApi.php?a2rTokenKey='.$a2rTokenKey.'&action=addAddress';

   
?>

<!-- 
<script src="jquery.js">
  

</script> -->


<script >
  
  var $api_url='<?php echo $api_name;  ?>';

  //alert(api_url);
</script>



<script src="api/login/js/formApiUpload.js" >

  

</script>







