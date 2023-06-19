
<?php

//$action_order=$_GET['action_order'];   // if action_order==deliver it show only deliver  
                                         // product else 

error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../A2Rinclude/top-header.php');     // for use top-header

include('../A2Rinclude/root_1_folder.php');   // root 1 folder for include other folder


// get product orderList list  data from orderListApi

if($action_order=='delivered')
{
    $orderListApiUrl=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=orderList&action_order='.$action_order;


}
elseif($action_order=='pending')
{
    $orderListApiUrl=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=orderList&action_order='.$action_order;


}
elseif($action_order=='accepted')
{
    $orderListApiUrl=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=orderList&action_order='.$action_order;


}
elseif($action_order=='canceled')
{
    $orderListApiUrl=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=orderList&action_order='.$action_order;


}
else{

         $orderListApiUrl=$ApiUrlEcommerce.'orderApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$userId_a2r.'&action=orderList';
        

}

  

  
  
// Read JSON file
  $orderListApiJsonData = file_get_contents($orderListApiUrl);
// Decode JSON data into PHP array
  $orderListApiApiResponseData = json_decode($orderListApiJsonData);
// All user data exists in 'data' object
  $orderListApiCartProductListShow= $orderListApiApiResponseData;  
// for product show 
  // $orderListApiTotalShow= $orderListApiApiResponseData->total;   
// for total product show
//print_r($orderListApiCartProductListShow);

// End of get product orderList list  data from orderListApi



// get orderList Status
   // $orderListStatusTotalApi=$orderListApiTotalShow->orderListStatus;
// End of orderList status

  // get company detail api data from company_detailApi
// From URL to get webpage contents.
   $urlcompanyDetailApi=$apiUrl."/api/company_detailApi.php?a2rTokenKey=".$a2rTokenKey;

// Initialize a CURL session.
   $chcompanyDetailApi = curl_init();
// Return Page contents.
   curl_setopt($chcompanyDetailApi, CURLOPT_RETURNTRANSFER, 1);
// grab URL and pass it to the variable.
   curl_setopt($chcompanyDetailApi, CURLOPT_URL, $urlcompanyDetailApi);
   $resultcompanyDetailApi = curl_exec($chcompanyDetailApi);
// echo $result;
   $companyDetailApiVariable = json_decode($resultcompanyDetailApi, TRUE);
// end of get company detail api data from company_detailApi



// get company detail api data from company_detailApi
// initialize value in product detail variable

   $companyDetail_api_company_logo=$companyDetailApiVariable['logo'];
   $companyDetail_api_company_name=$companyDetailApiVariable['company_name'];
   $companyDetail_api_description=$companyDetailApiVariable['description'];
   $companyDetail_api_address=$companyDetailApiVariable['address'];
   $companyDetail_api_office_address=$companyDetailApiVariable['office_address'];
   $companyDetail_api_mob1=$companyDetailApiVariable['mob1'];
   $companyDetail_api_mob2=$companyDetailApiVariable['mob2'];
   $companyDetail_api_mob3=$companyDetailApiVariable['mob3'];
   $companyDetail_api_gmail=$companyDetailApiVariable['gmail'];
   $companyDetail_api_copyright_link=$companyDetailApiVariable['copyright_link'];
   $companyDetail_api_company_reserved=$companyDetailApiVariable['company_reserved'];
   $companyDetail_api_fb=$companyDetailApiVariable['fb'];
   $companyDetail_api_instagram=$companyDetailApiVariable['instagram'];
  
// initialize value in product detail variable
//end get company detail api data from company_detailApi




?>

<html lang="en">
  <head>

    <title>Order List ||  <?php echo $domainTitleShow; ?></title>
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
       $orderListApiCartProductListShow_num=count($orderListApiCartProductListShow);

       if($orderListApiCartProductListShow_num==0)
       {

          include("order_list_no_product.php");
       }
       else{

                 // show product page  

                    include("order_list_product.php");

               // end show product page

       }  

          // check product is added in cart or not
   ?>
   <!-- end of product section being -->
    

    <!-- Footer section being --
      <div class="container-fluid" id="footer">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p style="color: #000">&copy; All right Reversed.<a class="text-green ml-2" href="" target="_blank"> </a>
            </p>
          </div>
        </div>
      </div>
    <!-- end Footer section being -->
    
  </body>
</html>

<style type="text/css">
  

@media (min-width: 600px)
{
  #img img
{
  width: 100%;
  height: 180px;
  margin-left: 10%;
  object-fit: contain;
}
}

@media (max-width: 600px)
{
  #img img
{
  width: 100%;
  height: 100px;
  object-fit: contain;
}
}

      .basket {
     width: 100%; 
}
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