<?php
error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../A2Rinclude/top-header.php');     // for use top-header

include('../A2Rinclude/root_1_folder.php');   // root 1 folder for include other folder


// get product Cart list image data from addToCartListApi

$latitude=$_GET['lat'];

$longitude=$_GET['long'];

$latlng=$latitude.",".$longitude;


if(empty($latitude) && empty($longitude))
{

}
else{

}


 $googleMapApiUrl="https://maps.googleapis.com/maps/api/geocode/json?latlng=".$latlng."&key=".$googleMapApiKey;
  
// Initialize a CURL session.
   $chproductDetailApi= curl_init();
// Return Page contents.
   curl_setopt($chproductDetailApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chproductDetailApi, CURLOPT_URL, $googleMapApiUrl);
   $resultproductDetailApi = curl_exec($chproductDetailApi);
//echo $result;
   $productDetailApiVariable = json_decode($resultproductDetailApi, TRUE);
// end of get product detail data from productListApi

   //print_r($productDetailApiVariable);




// show Address from api


 $addAddressApiUrl=$ApiUrlEcommerce."addressApi.php?a2rTokenKey=".$a2rTokenKey."&uid=".$userId_a2r."&action=showaddress";
  
// Read JSON file
  $addAddressApiJsonData = file_get_contents($addAddressApiUrl);
// Decode JSON data into PHP array
  $addAddressApiResponseData = json_decode($addAddressApiJsonData);
// All user data exists in 'data' object
  $addAddressApiShow= $addAddressApiResponseData;
// for product show 

 
  $uadd_address_addAddressApi=$addAddressApiShow->uadd_address;

//end // show Address from api


?>

<html lang="en">
  <head>

    <title>Address ||  <?php echo $domainTitleShow; ?></title>
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
    <main>

      <div class="container">
        <div class="row" style="text-align: center;">

          <div class="col-sm-4" style="margin-top: 5px;">
            <a href="my_address.php" class="btn btn-outline-primary btn-block">Add New Address</a>
          </div>
          <div class="col-sm-4" style="margin-top: 5px;">
            <a href="view_address.php" class="btn btn-outline-primary btn-block">View Your Address</a>
          </div>
          <!--
          <div class="col-sm-4" style="margin-top: 5px;">
            <a href="update_address" class="btn btn-outline-primary btn-block">Update Address</a>
          </div>
          -->
          <div class="col-sm-4" style="margin-top: 5px;">
            <a href="pick_location.php" class="btn btn-outline-primary btn-block">Add a new pick Location</a>
          </div>
        </div>
      </div>

    <br>

     

  

    <div class="alert alert-info alert-dismissible fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong><p class="lblmsg"></p></strong>
    </div>
  <br>


      <div class="basket">
        
        <!--
        <div class="basket-module" style="margin-bottom: 20px;">
        
            
          
          <a href="my_cart.php"> 
             <button class="promo-code-cta" >My Cart</button>
          </a>

             
          
        </div>
      
            
          <div class="basket-module" style="margin-bottom: 20px;">
          <label for="promo-code">Last address</label>
          <input class="showAddress" type="address" name="promo-code" maxlength="5" class="promo-code-field" placeholder="<?php echo $uadd_address_addAddressApi;?>"  readonly>

          <a href="../a2rMap/getlatLong/getLatLongUserA2R.php">
             <button class="promo-code-cta" id="hide_address">Detect My Location</button>
          </a>   
          
        </div>
      -->
    
      
        <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <h3 class="title" style="">Add Address</h3>
                    <form  enctype="multipart/form-data" id="regform" class="form-horizontal">


                        <span id='msg'></span>
                        <input type="hidden" name="action" value="addAddress">


                        <input type="hidden" name="uid" id="uid" value="<?php echo $userId_a2r;  ?>">


                        <div class="form-group">
                            <label>Contact Person Name</label>
                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Contact Person Name">
                        </div>

                        <div class="form-group">
                            <label>Contact Detail</label>
                            <input type="text"  id="mobile_no" name="mobile_no" class="form-control" placeholder="Phone Number">
                        </div>


                        <div class="form-group">
                            <label>Flat,Floor,Building Name</label>
                            <input type="text"  id="address" name="address" class="form-control" placeholder="Flat,Floor,Building Name">
                        </div>

                         <div class="form-group">
                            <label>Landmark</label>
                            <input type="text"  id="landmark" name="landmark" class="form-control" placeholder="Landmark">
                        </div>






                         <div class="form-group">
                            <label>Pincode</label>
                            <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode">
                        </div>


                         <div class="form-group">
                            <label>City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City">
                        </div>



                        <div class="form-group">
                            <label>State</label>
                            <input type="text" id="state" name="state"  class="form-control" placeholder="State">
                        </div>

                         <div class="form-group">
                            <label>Country</label>
                            <input type="text"  id="country" name="country" value="india" class="form-control" placeholder="India">
                        
                            
                        </div>


                           
                        
                        <div class="form-group">

                             <!--<label  class="lblmsg">msg</label>-->
                          <input class="btn signup" type="submit" name="submit" id="btn_submit" value="upload" class="btn btn-success">



                         
                          <input class="btn signup" type="button" name="submit" id="btn_uploading" value="uploading..........." class="btn btn-primary">




                          <buttion class="btn signup" type="button" name="submit" id="btn_uploaded" value="uploaded" class="btn btn-warning">

                            
                          uploaded
                               
                            
                          </button>

                        </div>  

                      


                      </form>
                  </div>
              </div>
          </div>
        </div>




         <!-- start code for api add Address-->


                     <?php 

                          $api_name=$ApiUrlEcommerce.'/addressApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$a2rTokenKey.'&action=addAddress';

                         

                         //'https://a2rstore.in/oceonicApi/ecommerce/v1/api/userAuthenticationApi.php?a2rTokenKey='.$a2rTokenKey.'&action=registration';
                      ?>

                      <script src="../a2rAjax/addAddress/js/jquery.js">
                      </script>


                      <script>
  
                          var $api_url='<?php echo $api_name;  ?>';
                         //alert(api_url);
                     </script>

                     <script src="../a2rAjax/addAddress/js/formApiUpload.js" >
                     </script>

                    <!-- start code for api add Address-->
      


   </div><!---end of main div --->
</main><!--- end of main--->

  </body>
</html>







    <style type="text/css">
    /* Header Title */
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

    </style>


<style type="text/css">

  .lblmsg{
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb; 
    width: 100%;
    padding: 5px;
    text-align: center;
  }

  @media (min-width: 700px)
  {
    .form-container{
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    padding: 30px;
    width: 220%;
      position: relative;
    left: 30%;
    right: -20%;
    border-radius: 20px;
     box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    height: 100%;
 }


  }



  @media (max-width: 700px)
  {
    .form-container{
    background-color: #fff;
    font-family: 'Titillium Web', sans-serif;
    font-size: 0;
    padding: 30px;
    width: 100%;
    border-radius: 20px;
     box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    height: 100%;
  }
    .basket {
        width: 100%;
    }

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
    background-color: <?php echo $btn_cartColorA2R; ?>;
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
    border-bottom: 2px solid <?php echo $btn_cartColorA2R; ?>;
    border-left: 2px solid <?php echo $btn_cartColorA2R; ?>;
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
    color: <?php echo $btn_cartColorA2R; ?>;
    font-weight: 600;
    transition: all 0.3s ease 0s;
}
.form-container .signin-link a:hover{ text-decoration: underline; }
.form-container .form-horizontal .signup{
    color: #fff;
    background: <?php echo $btn_cartColorA2R; ?>;
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

</style>











