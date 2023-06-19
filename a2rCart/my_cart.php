
<?php
error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../A2Rinclude/top-header.php');     // for use top-header

include('../A2Rinclude/root_1_folder.php');   // root 1 folder for include other folder



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


//address api 


// show Address from api


 $addAddressApiUrl=$ApiUrlEcommerce."addressApi.php?a2rTokenKey=".$a2rTokenKey."&uid=".$userId_a2r."&action=showaddress";

 
  
// Read JSON file
  $addAddressApiJsonData = file_get_contents($addAddressApiUrl);
// Decode JSON data into PHP array
  $addAddressApiResponseData = json_decode($addAddressApiJsonData);
// All user data exists in 'data' object
  $addAddressApiShow=$addAddressApiResponseData;
// for product show 

//$cout_addAddressApiShow=count($addAddressApiShow);

 // echo $cout_addAddressApiShow=0;
 
  $uadd_address_addAddressApi=$addAddressApiShow->uadd_address;



//end // show Address from api

// end address api


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
    
    <?php include('include/header_cdn.php');   // profile header cdn for include header cdn
     ?>

  </head>
  <body>

    <?php include('include/header.php');   // profile header for include header 
     ?>


    <!--  product section being -->
     <?php

       // check product is added in cart or not
       $addToCartApiCartProductListShow_num=count($addToCartApiCartProductListShow);

       if($addToCartApiCartProductListShow_num==0)
       {

          include("no_cart_product.php");
       }
       else{

                 // show product page  

                    include("my_cart_product_show.php");

               // end show product page

       }  

          // check product is added in cart or not
   ?>

   <!-- end of product section being -->
    

    <!-- Footer section being -
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
    /* Header Title *
    .header {
    background:#0090f0 !important;
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
   */
    </style>


    







