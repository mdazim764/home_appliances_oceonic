<?php
error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../include/top-header.php');     // for use top-header

include('../include/root_1_folder.php');   // root 1 folder for include other folder


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

  //print_r($addAddressApiShow);
// for product show 
  
  //$uaadname_viewAddressApi=$addAddressApiShow->Yourname;
  $uaadname_viewAddressApi='Yourname';
  $uadd_address_viewAddressApi=$addAddressApiShow->uadd_address;
  $uadd_landmark_viewAddressApi=$addAddressApiShow->uadd_landmark;
  $pincode_viewAddressApi=$addAddressApiShow->pincode;
  $uadd_state_viewAddressApi=$addAddressApiShow->uadd_state;
  $uadd_country_viewAddressApi=$addAddressApiShow->uadd_country;
  $uadd_city_viewAddressApi=$addAddressApiShow->uadd_city;
  $uadd_mob_viewAddressApi=$addAddressApiShow->uadd_mob;
  
//end // show Address from api


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
    <main>

      <div class="container">
        <div class="row">
         
         <div class="col-sm-3">
         </div>
         <div class="col-sm-6">
           <div class="card">
             <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 100px;margin-top: 15px;"></i><br>
              <h3>
                <!-- // show user name from a2r -->
                    <?php echo $userName_a2r; ?>
                  <!-- show user name from a2r  -->
              </h3>
              <p class="title">Your@gmail.com</p>
              <p class="title">
                <?php echo $uadd_mob_viewAddressApi; ?>
              </p>

              <p><?php echo $uadd_address_viewAddressApi; ?></p>
              <p><?php echo $uadd_landmark_viewAddressApi; ?></p>
              <p><?php echo $uadd_city_viewAddressApi; ?></p>
              <p><?php echo $uadd_state_viewAddressApi; ?></p>
              <p><?php echo $uadd_country_viewAddressApi; ?></p>
              <p><?php echo $pincode_viewAddressApi; ?></p>
               
               <hr>
               <div class="row" style="padding-bottom: 15px;">
         
                <div class="col-sm-6" style="margin-bottom: 5px;">
                  <a href="order_list.php" class="btn btn-info" role="button">Total Orders</a>
                </div>
                <div class="col-sm-6" style="margin-bottom: 5px;">
                  <a href="order_list.php?action_order=delivered" class="btn btn-info" role="button">Delivered Orders</a>
                </div>

           </div>
         </div>
         <div class="col-sm-3">
         </div>

      

        </div>
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

  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



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











