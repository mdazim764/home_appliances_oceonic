<?php
error_reporting(0);

include('A2Rinclude/top-header.php');     // for use top-header

include('A2Rinclude/root_folder.php');

include('functions/functions.php');   // for use functions
 
error_reporting(0);


  //https://a2rstore.com/oceonicApi/ecommerce/v1/api/galleryApi.php?a2rTokenKey=A2REco22110263621b26211eb&imgType=2&plistId=


 
 // get gallery data from galleryApi
// From URL to get webpage contents.
   $urlgalleryApi=$ApiUrlEcommerce."galleryApi.php?a2rTokenKey=".$a2rTokenKey."&imgType=2";
// Initialize a CURL session.
   $chgalleryApi = curl_init();
// Return Page contents.
   curl_setopt($chgalleryApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chgalleryApi, CURLOPT_URL, $urlgalleryApi);
   $resultgalleryApi = curl_exec($chgalleryApi);
//echo $result;
   $galleryApiVariable = json_decode($resultgalleryApi, TRUE);
// end of get gallery data from galleryApi




// get banner data from bannerApi
// From URL to get webpage contents.
   $urlbannerApi=$ApiUrlEcommerce."bannerApi.php?a2rTokenKey=".$a2rTokenKey;
// Initialize a CURL session.
   $chbannerApi = curl_init();
// Return Page contents.
   curl_setopt($chbannerApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chbannerApi, CURLOPT_URL, $urlbannerApi);
   $resultbannerApi = curl_exec($chbannerApi);
//echo $result;
   $bannerApiVariable = json_decode($resultbannerApi, TRUE);
// end of get banner data from bannerApi




   // get category data from productCatApi
// From URL to get webpage contents.
   $urlPCatApi=$ApiUrlEcommerce."productCatApi.php?a2rTokenKey=".$a2rTokenKey;
// Initialize a CURL session.
   $chPCatApi = curl_init();
// Return Page contents.
   curl_setopt($chPCatApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chPCatApi, CURLOPT_URL, $urlPCatApi);
   $resultPCatApi = curl_exec($chPCatApi);
//echo $result;
   $PCatApiVariable = json_decode($resultPCatApi, TRUE);
// end of get category data from productCatApi






// get featured_product  data from productListApi
// From URL to get webpage contents.
   $trendingPlistApiUrl=$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&type=priority";

// Initialize a CURL session.
   $chtrendingPlistApi = curl_init();
// Return Page contents.
   curl_setopt($chtrendingPlistApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chtrendingPlistApi, CURLOPT_URL, $trendingPlistApiUrl);
   $resulttrendingPListApi = curl_exec($chtrendingPlistApi);
//echo $result;
   $trendingPListApiVariable = json_decode($resulttrendingPListApi, TRUE);  
// end of get featured_product data from productListApi


// get top selling data from productListApi
// From URL to get webpage contents.
   $bestDealPlistApiUrl=$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&type=priority";

// Initialize a CURL session.
   $chbestDealPlistApi = curl_init();
// Return Page contents.
   curl_setopt($chbestDealPlistApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chbestDealPlistApi, CURLOPT_URL, $bestDealPlistApiUrl);
   $resultbestDealPlistApi = curl_exec($chbestDealPlistApi);
//echo $result;
   $bestDealPListApiVariable = json_decode($resultbestDealPlistApi, TRUE);  
// end of get top selling data from productListApi





// get main_tab_product_slider data from productListApi
// From URL to get webpage contents.
 $urlPlistApi=$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey; 
// Initialize a CURL session.
   $chPlistApi = curl_init();
// Return Page contents.
   curl_setopt($chPlistApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chPlistApi, CURLOPT_URL, $urlPlistApi);
   $resultPlistApi = curl_exec($chPlistApi);
//echo $result;
   $productListApiVariable = json_decode($resultPlistApi, TRUE);
// end of get main_tab_product_slider data from productListApi




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


$NameShow_get='Home';


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

	<!-- banner -->
		<?php
			include("A2Rtemplate/banner.php");
		?>
	<!-- //banner -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php
					include("A2Rinclude/Sidebar.php");
				?>
			<!-- Sidebar end=============================================== -->
				<div class="span9">	
				<!-- Featured Products -->
					<?php
						include("A2Rtemplate/Featured-Products.php");
					?>
				<!--// Featured Products -->

				<!-- Latest Products -->
					<?php
						include("A2Rtemplate/Latest-Products.php");
					?>
				<!-- Latest Products -->
				</div>
			</div>
		</div>
	</div>
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