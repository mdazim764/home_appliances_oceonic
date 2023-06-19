<?php
error_reporting(0);

include('A2Rinclude/top-header.php');     // for use top-header
include('A2Rinclude/root_folder.php');   // root folder for include other folder
include('functions/functions.php');   // for use functions
include('a2rColor/colorA2R.php');        // for provide A2R library to change color





// get detail_categories_sidebar data for sidebar from productCatApi
// From URL to get webpage contents.
   $urlpListCatApi=$ApiUrlEcommerce."productCatApi.php?a2rTokenKey=".$a2rTokenKey;
// Initialize a CURL session.

   $chpListCatApi = curl_init();
// Return Page contents.
   curl_setopt($chpListCatApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chpListCatApi, CURLOPT_URL, $urlpListCatApi);
   $resultpListCatApi = curl_exec($chpListCatApi);
//echo $result;
   $pListCatApiVariable = json_decode($resultpListCatApi, TRUE);
// end of get detail_categories_sidebar data for sidebar from productCatApi




// get product detail image data from productListApi
// From URL to get webpage contents.
   $productDetailImgApiUrl=$ApiUrlEcommerce."/productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get."&psubcat=".$psubcat_get."&plistId=".$plistId_get;
// Initialize a CURL session.
   $chproductDetailImgApi= curl_init();
// Return Page contents.
   curl_setopt($chproductDetailImgApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chproductDetailImgApi, CURLOPT_URL, $productDetailImgApiUrl);
   $resultproductDetailImgApi = curl_exec($chproductDetailImgApi);
//echo $result;
   $productDetailImgApiVariable = json_decode($resultproductDetailImgApi, TRUE);
// end of get product detail image data from productListApi




// get product detail description data from productListApi
// From URL to get webpage contents.
   $productDetailApiUrl=$ApiUrlEcommerce."/productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get."&psubcat=".$psubcat_get."&plistId=".$plistId_get;
// Initialize a CURL session.
   $chproductDetailApi= curl_init();
// Return Page contents.
   curl_setopt($chproductDetailApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chproductDetailApi, CURLOPT_URL, $productDetailApiUrl);
   $resultproductDetailApi = curl_exec($chproductDetailApi);
//echo $result;
   $productDetailApiVariable = json_decode($resultproductDetailApi, TRUE);
// end of  get product detail description data from productListApi
  


   $pcat_get_relatedApi=$pcatUniq_PDetailApiValue;   // use  for related products
//get related product data from productListApi
    $relatedProductApiUrl=$ApiUrlEcommerce."/productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get_relatedApi."&type=priority";
  
// Read JSON file
   $relatedProductApiJsonData = file_get_contents($relatedProductApiUrl);
// Decode JSON data into PHP array
   $relatedProductApiResponseData = json_decode($relatedProductApiJsonData);
// All user data exists in 'data' object
   $relatedProductApiShow= $relatedProductApiResponseData;
//end of  related product data from productListApi




//  get product detail description data from productListApi
// initialize value in productDetailApiVariable

  $productNamePDetailApiValue=$productDetailApiVariable[0]['productName'];
   $productCode_PDetailApiValue=$productDetailApiVariable[0]['productCode'];
   $productUniqPDetailApiValue=$productDetailApiVariable[0]['productUniq'];
   $plistPriceUniqPDetailApiValue=$productDetailApiVariable[0]['plistPriceUniq'];
   $productDescriptionPDetailApiValue=$productDetailApiVariable[0]['productDescription'];
   $realPrice_PDetailApiValue=$productDetailApiVariable[0]['realPrice'];
   $priceAfterOffer_PDetailApiValue=$productDetailApiVariable[0]['priceAfterOffer'];
   $priceOfferPDetailApiValue=$productDetailApiVariable[0]['priceOffer'];
   $pImgImgPDetailApiValue=$productDetailApiVariable[0]['pImgImg'];


   // category
   $pcatUniq_PDetailApiValue=$productDetailApiVariable[0]['pcatUniq'];
   $pcatName_PDetailApiValue=$productDetailApiVariable[0]['pcatName'];
   $pcat_link_PDetailApiValue=$productDetailApiVariable[0]['pcat_link'];
   // end category

   // sub category
   $psubCatUniq_PDetailApiValue=$productDetailApiVariable[0]['psubCatUniq'];
   $psubCatName_PDetailApiValue=$productDetailApiVariable[0]['psubCatName'];
   $psubCatlink_PDetailApiValue=$productDetailApiVariable[0]['psubCatlink'];
   // end sub category


   $materialNamePDetailApiValue=$productDetailApiVariable[0]['materialName'];
   $productlinkPDetailApiValue=$productDetailApiVariable[0]['productlink'];


   $brandUniqPDetailApiValue=$productDetailApiVariable[0]['brandUniq'];
   $brandNamePDetailApiValue=$productDetailApiVariable[0]['brandName'];
   $brandLinkPDetailApiValue=$productDetailApiVariable[0]['brand_link'];

   $colorNamePDetailApiValue=$productDetailApiVariable[0]['colorName'];
   $colorUniqPDetailApiValue=$productDetailApiVariable[0]['colorUniq'];
   $colorImgPDetailApiValue=$productDetailApiVariable[0]['colorImg'];
   $colorImgFolderPDetailApiValue=$productDetailApiVariable[0]['colorImgFolder'];
   $colorImageShowPDetailApiValue=$ApiUrlEcommerce.$colorImgFolderPDetailApiValue.$colorImgPDetailApiValue;


   // stock 

   
   // stock 

   $StockQuantityPDetailApiValue=$productDetailApiVariable[0]['StockQuantity'];

   $StockStatusPDetailApiValue=$productDetailApiVariable[0]['StockStatus'];

   $businessValueMlmPDetailApiValue=$productDetailApiVariable[0]['business_value_mlm'];

   $productValueMlmPDetailApiValue=$productDetailApiVariable[0]['product_value_mlm'];

//end of  get product detail description data from productListApi




// get brand data from brandApi
// From URL to get webpage contents.
   $urlbrandApi=$ApiUrlEcommerce."/brandApi.php?a2rTokenKey=".$a2rTokenKey;
// Initialize a CURL session.
   $chbrandApi = curl_init();
// Return Page contents.
   curl_setopt($chbrandApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chbrandApi, CURLOPT_URL, $urlbrandApi);
   $resultbrandApi = curl_exec($chbrandApi);
//echo $result;
   $brandApiVariable = json_decode($resultbrandApi, TRUE);
// end of get brand data from brandApi

   $NameShow_get='Details';


             if(isset($_GET['plistId']))
                {
            
                    $pro_id = $_GET['plistId'];

                 
                 }
       

               if(isset($_GET['pListName']))
                {
            
                    $pListName_get = $_GET['pListName'];

                 }

                
      

   ?>


<!DOCTYPE html>
<html lang="en">
  <!-- header cdn -->
	<?php
	include("A2Rinclude/header_cdn.php");
	?>
<!--// header cdn -->
<body>
<!-- header -->
<?php
include("A2Rinclude/header.php");
?>
	<!-- //header -->
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php
		// include("A2Rinclude/Sidebar.php");
	?>
<!-- Sidebar end=============================================== -->
	<div class="span9" style="width: 100%;">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li class="active"><a href="products.html">Products</a> <span class="divider">/</span></li>
    <!-- <li class="active">product Details</li> -->
    </ul>	
	<div class="row">	  
			<!-- Single Page -->
	<?php
		include("A2Rtemplate/details_single/Single_Page.php");
	?>
	<!-- //Single Page -->
	<!-- Product Details -->
	<?php
		include("A2Rtemplate/details_single/Product-Details.php");
	?>
	<!--// Product Details -->
	<!-- Related Products -->
	<?php
		include("A2Rtemplate/details_single/Related-Products.php");
	?>
	<!--// Related Products -->
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<!-- footer -->
	<?php
		include("A2Rinclude/footer.php");
	?>
	<!-- //footer -->
<!-- footer cdn -->
<?php
		include("A2Rinclude/footer_cdn.php");
	?>

	<!--// footer cdn -->
</body>
</html>