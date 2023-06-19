<?php 

error_reporting(0);

include('A2Rinclude/top-header.php');     // for use top-header

include('A2Rinclude/root_folder.php');

include('functions/functions.php');   // for use functions
 


// get product category data for sidebar from productCatApi
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
// end of get product category data for sidebar from productCatApi



// get  product list  data for mainbar from productListApi
// From URL to get webpage contents.
   $urlproductListApi=$ApiUrlEcommerce."/productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get."&psubcat=".$psubcat_get."&plistId=".$plistId_get;
// Initialize a CURL session.
   $chproductListApi = curl_init();
// Return Page contents.
   curl_setopt($chproductListApi, CURLOPT_RETURNTRANSFER, 1);
//grab URL and pass it to the variable.
   curl_setopt($chproductListApi, CURLOPT_URL, $urlproductListApi);
   $resultproductListApi = curl_exec($chproductListApi);
//echo $result;
   $productListApiVariable = json_decode($resultproductListApi, TRUE);
// end of get  product list  data for mainbar from productListApi


$pcat_get_relatedApi=$pcatUniq_PDetailApiValue;   // use  for related products
//get related product data from productListApi
   $relatedProductApiUrl=$ApiUrlEcommerce."/productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get_relatedApi."&type=related";
  
// Read JSON file
   $relatedProductApiJsonData = file_get_contents($relatedProductApiUrl);
// Decode JSON data into PHP array
   $relatedProductApiResponseData = json_decode($relatedProductApiJsonData);
// All user data exists in 'data' object
   $relatedProductApiShow= $relatedProductApiResponseData;
//end of  related product data from productListApi


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


error_reporting(0);

$NameShow_get='List';

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
		include("A2Rinclude/Sidebar.php");
	?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Special offers</li>
    </ul>
	<?php
                   // count array number for Product List Category
                   $productListApiCount=count($productListApiVariable);
                   // end
				   ?>
	<h4> 20% Discount Special offer<small class="pull-right"> <?php echo  $productListApiCount;?> products are available </small></h4>	
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	<div id="myTab" class="pull-right">
	 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
	 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
	</div>
<br class="clr"/>
<!-- products -->
<?php
include("A2Rtemplate/products_list/products.php");
?>
<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
		<ul>
		<li><a href="#">&lsaquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">&rsaquo;</a></li>
		</ul>
	</div>
<br class="clr"/>
</div>
</div></div>
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