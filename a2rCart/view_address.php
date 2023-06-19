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

<style type="text/css">
  .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

@media only screen and (max-width: 467px)
  {
  .mob_hide{
   display: none;
  }
  }

  @media only screen and (min-width: 467px)
  {
  .desk_hide{
   display: none;
  }
  }
</style>

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

<div class="container-fluid card " style="padding-top: 15px; padding-bottom: 15px;">
 <div class="row">  
  <!-- view cart address hide for mobile size -->
  <div class="mob_hide">          
  <table class="table table-bordered ">
    <tbody>
      <tr>
        <td width="20%" class="">Name :</td>
        <td width="80%"><?php echo $uaadname_viewAddressApi; ?></td>
        
      </tr>
      <tr>
        <td width="20%" class="">Address :</td>
        <td width="80%"><?php echo $uadd_address_viewAddressApi; ?></td>
        
      </tr>
      <tr>
        <td width="20%" class="">Landmark :</td>
        <td width="80%"><?php echo $uadd_landmark_viewAddressApi; ?></td>
      </tr>

      <tr>
        <td width="20%" class="">City :</td>
        <td width="80%"><?php echo $uadd_city_viewAddressApi; ?></td>   
        </tr>
      
      <tr>
        <td width="20%" class="">State :</td>
        <td width="80%"><?php echo $uadd_state_viewAddressApi; ?></td>
      </tr>

      <tr>
        <td width="20%" class="">Country :</td>
        <td width="80%"><?php echo $uadd_country_viewAddressApi; ?></td>
      </tr>

      <tr>
        <td width="20%" class="">Pincode :</td>
        <td width="80%"><?php echo $pincode_viewAddressApi; ?></td>
      </tr>

      <tr>
        <td width="20%" class="">Contact Number :</td>
        <td width="80%"><?php echo $uadd_mob_viewAddressApi; ?></td>
      </tr>

      <tr>
        <td width="50%" class=""><a href="">Add Delivery instructions</a> </td>
        <td width="50%"><a href=""><i class="fa fa-map-marker" aria-hidden="true" style="color: <?php echo $btn_cartColorA2R; ?>;"></i> Update Delivery Location</a></td>
      </tr>

    </tbody>
  </table>
         <div class="row">
          <div class="col-sm-6">
          <a href="#" class="btn btn-outline-primary" role="button">Edit</a>
          </div>
          <div class="col-sm-6">
          <a href="#" class="btn btn-outline-primary" role="button">Remove</a>
          </div>
         </div>
  </div>
   <!-- end view cart address hide for mobile size -->
   <!-- view cart address hide for large size -->
      <div class="desk_hide">
      <div class="col-"><b><?php echo $uaadname_viewAddressApi; ?></b></div>
      <div class="col-">Add: <?php echo $uadd_address_viewAddressApi; ?></div>
      <div class="col-">City: <?php echo $uadd_city_viewAddressApi; ?></div>
      <div class="col-">State: <?php echo $uadd_state_viewAddressApi; ?></div>
      <div class="col-">Country: <?php echo $uadd_country_viewAddressApi; ?></div>
      <div class="col-">Pincode: <?php echo $pincode_viewAddressApi; ?></div>
      <div class="col-">Contact No : <?php echo $uadd_mob_viewAddressApi; ?></div>
      <hr>
      <div class="col-"><a href="">Add Delivery instructions</a></div>
      <div class="col-"><a href=""><i class="fa fa-map-marker" aria-hidden="true" style="color: <?php echo $btn_cartColorA2R; ?>;"></i> Update Delivery Location</a></div>
        <br>
        <div class="row">
          <div class="col-6">
          <a href="#" class="btn btn-outline-primary" role="button">Edit</a>
          </div>
          <div class="col-6">
          <a href="#" class="btn btn-outline-primary" role="button">Remove</a>
          </div>
         </div>
      </div>
      <!-- end view cart address hide for large size -->
  </div>
</div>


    <!-- <div class="row" style="margin-top: 20px;background-color: #fff;padding: 10px;box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;line-height: 2rem;">
      
      <div class="col-sm-4"><b>Name</b> : </div>
      <div class="col-sm-8"><b><?php echo $uaadname_viewAddressApi; ?></b></div>
      <div class="col-sm-4"><b>Address</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_address_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>Landmark</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_landmark_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>Pincode</b> : </div>
      <div class="col-sm-8"><?php echo $pincode_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>City</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_city_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>State</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_state_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>Country</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_country_viewAddressApi; ?></div>
      <div class="col-sm-4"><b>Contact No.</b> : </div>
      <div class="col-sm-8"><?php echo $uadd_mob_viewAddressApi; ?></div>

    </div> -->


      










