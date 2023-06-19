
<?php


include('../include/top-header.php');     // for use top-header

include('../include/root_1_folder.php');   // root 1 folder for include other folder


// get product Cart list image data from addToCartListApi


 $addToCartApiUrl=$ApiUrlEcommerce."addToCartApi.php?a2rTokenKey=".$a2rTokenKey."&action=addToCartList&uid=".$userId_a2r;
  
// Read JSON file
  $addToCartApiJsonData = file_get_contents($addToCartApiUrl);
// Decode JSON data into PHP array
  $addToCartApiResponseData = json_decode($addToCartApiJsonData);
// All user data exists in 'data' object
  $addToCartApiCartProductListShow= $addToCartApiResponseData->product;  
// for product show 

  $addToCartApiTotalShow= $addToCartApiResponseData->total;         // for total product show

// $addToCartApiTotalShow->grandTotalOfferPrice;
// end of product list image data from productListApi

//print_r($addToCartApiCartProductListShow);



// grand total price detail from api

// grand total real price of products
$grandTotalProductRealPrice=$addToCartApiTotalShow->grandTotalPrice;

// grand total offer price of products
$grandTotalProductOfferPrice=$addToCartApiTotalShow->grandTotalOfferPrice;

// grand total price (minus) Offer Price
$grandTotalPriceAfterOffer=$addToCartApiTotalShow->grandTotalPriceAfterOffer;

// delivery name
$deliveryNameTotalApi=$addToCartApiTotalShow->deliveryName;

// delivery name
$deliveryChargeTotalApi=$addToCartApiTotalShow->deliveryCharge;



//end grand total price detail from api


//


?>

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
          <label for="promo-code">Enter your address</label>
          <input id="promo-code" type="address" name="promo-code" maxlength="5" class="promo-code-field" placeholder="10/13 sarnath">
          <button class="promo-code-cta" id="hide_address">Edit</button>
          
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
    

 <span id='msg'></span>

 
 
      <form action="" method="post" id="regform">
          <input type="hidden" name="action" value="Registration">


        <input type="hidden" name="uid" id="uid" value="6124d4b352f6d352355">

      <div class="form-bg" id="show_address" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title">Add Address</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label>User Name</label>
                            <input id="user_name" name="user_name" type="text" class="form-control" placeholder="User Name">
                        </div>
                         <div class="form-group">
                            <label>Pin Code</label>
                            <input id="pincode" name="pincode" type="text" class="form-control" placeholder="******">
                        </div>
                         <div class="form-group">
                            <label>City</label>
                            <input id="city" name="city" type="text" class="form-control" placeholder="Varanasi">
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input id="state" name="state" type="text" class="form-control" placeholder="Uttar Pradesh">
                        </div>
                         <div class="form-group">
                            <label>Country</label>
                            <input id="country" name="country" type="text" class="form-control" placeholder="India">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="@gmail.com">
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
                            <input type="text" id="mobile_no" name="mobile_no" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"id="password" name="password" class="form-control" placeholder="Password">
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
                        <label id="lblmsg"></label>

<input type="submit" name="submit" id="btn_submit" value="upload" class="btn btn-success">


<input type="button" name="submit" id="btn_uploading" value="uploading..........." class="btn btn-primary">




<buttion type="button" name="submit" id="btn_uploaded" value="uploaded" class="btn btn-warning">

  
uploaded
     
  
</buttion>





                        <button class="btn signup">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<style type="text/css">

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
    background-color: #7fb82d;
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
    border-bottom: 2px solid #7fb82d;
    border-left: 2px solid #7fb82d;
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
    color: #7fb82d;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: #7fb82d;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 2px 30px 1px;
    border-radius: 20px;
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

</style>







<?php 

$a2rTokenKey="a2rhos1234";
  // $api_name='regcoded.php';

   $api_name='https://a2rstore.in/oceonicApi/ecommerce/v1/api/addressApi.php?a2rTokenKey='.$a2rTokenKey.'&action=addAddress';
?>

<script src="jquery.js">
  

</script>


<script >
  
  var $api_url='<?php echo $api_name;  ?>';

  //alert(api_url);
</script>



<script src="API/LOGIN/js/formApiUpload.js" >

  

</script>



<script scr="addToCart/countAddToCartProduct.js"></script>




















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
            <button class="btn btn-success text-uppercase" style="margin-top: 20px;">
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
