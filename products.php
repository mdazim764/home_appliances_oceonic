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


$NameShow_get='List';

// count array number for Product List Category
$productListApiCount=count($productListApiVariable);
// end
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
<?php
	//category from header menu.....
	$selected_option=$_POST["cat_name"];
	// echo $selected_option;

	//sub category from side menu....
	$subcat_name = $_GET['subcat_name'];
	// echo $subcat_name;
?>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		
		<li class="active"><?php echo $selected_option." Products"  ;?></li>
    </ul>
	<?php 
			if($subcat_name!=""){
				?>
				<h3> <?php echo $subcat_name  ;?><small class="pull-right"> 40 products are available </small></h3>
				<?php
			}else{
		?>
	<h3> <?php echo $selected_option." Products"  ;?><small class="pull-right"> 40 products are available </small></h3>	
	<?php } ?>
	
	<hr class="soft"/>
	<?php

for($i=0; $i<$PCatApiVariable[0]['num']; $i++)
{

 // get category data from productCatApi
 // initialize value in PCatApiVariable

  $pCat_pcat_name=$PCatApiVariable[$i]['pcat_name'];
  $pCat_pcat_uniq=$PCatApiVariable[$i]['pcat_uniq'];
  $pCat_pcat_link=$PCatApiVariable[$i]['pcat_link'];
  $pCat_pcat_img=$PCatApiVariable[$i]['pcat_img'];
  $pCat_pcat_description=$PCatApiVariable[$i]['pcat_description'];

  //end of get plist product data from productListApi
  if($pCat_pcat_name==$selected_option){

	 
	?>
	<p>
	<?php echo $pCat_pcat_description  ;?>
	</p>
	<?php }} ?>
	<?php 
		if($selected_option=="All"){

	 
	?>
	<p>
	<?php echo "Browse through the wide range of Home and kitchen products such as coolers, water bottles, mosquito nets, cycles, bedsheets, juicers, office chairs and much more online at Amazon.in"  ;?>
	</p>
	<?php }
	if($selected_option=="") 
	{

	 
		?>
		<p>
		<?php echo "Browse through the wide range of Home and kitchen products such as coolers, water bottles, mosquito nets, cycles, bedsheets, juicers, office chairs and much more online at Amazon.in"  ;?>
		</p>
		<?php }?>

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
 <!-- <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a> -->
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>

<!-- products -->
<div class="tab-content">
	<!-- <div class="tab-pane" id="listView">
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $140.00</h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br/>
			
			  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
			
				</form>
			</div>
		</div>
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/1.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				
			</form>
			</div>
		</div>
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
				<label class="checkbox">
					<input type="checkbox">  Adds product to compair
				</label><br/>
				
				  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				
			</form>
			</div>
		</div>
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				
				</form>
			</div>
		</div>
	
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
		</div>
		<hr class="soft"/>
		<div class="row">	  
			<div class="span2">
				<img src="themes/images/products/3.jpg" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
				<form class="form-horizontal qtyFrm">
				<h3> $140.00</h3>
				<label class="checkbox">
				<input type="checkbox">  Adds product to compair
				</label><br/>
				
				<a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
				<a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				
				</form>
			</div>
		</div>
		<hr class="soft"/>
	</div> -->

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
		<?php
				// count array number for Product Cat
             //$ProductCatApiCount=count($PCatApiVariable);
                   // end

             // get category data from productCatApi
            //$ProductCatApiCount
			
		

                 for($i=0; $i<$PCatApiVariable[0]['num']; $i++)
                   {

                    // get category data from productCatApi
                    // initialize value in PCatApiVariable

                     $pCat_pcat_name=$PCatApiVariable[$i]['pcat_name'];
                     $pCat_pcat_uniq=$PCatApiVariable[$i]['pcat_uniq'];
                     $pCat_pcat_link=$PCatApiVariable[$i]['pcat_link'];
                     $pCat_pcat_img=$PCatApiVariable[$i]['pcat_img'];
                     $pCat_pcat_description=$PCatApiVariable[$i]['pcat_description'];

                     //end of get plist product data from productListApi
					 if($pCat_pcat_name==$selected_option){

						
						// count array number for Product List Category
						$productListApiCount=count($productListApiVariable);
						// end
	 
					   //get product list data for mainbar from productListApi
					   //$ProductListApiCount
					  for($i=0; $i<$productListApiCount; $i++)
						{
	 
						  //get product list data for mainbar from productListApi
						 // initialize value in productListApiVariable
	 
						$pList_api_pImgImg=$productListApiVariable[$i]['pImgImg'];
						$pList_api_productUniq=$productListApiVariable[$i]['productUniq'];
						$pList_api_productlink=$productListApiVariable[$i]['productlink'];
						$pList_api_productName=$productListApiVariable[$i]['productName'];
						$pList_api_productDescription=$productListApiVariable[$i]['productDescription'];
						$pList_api_realPrice=$productListApiVariable[$i]['realPrice'];
						$pList_api_priceAfterOffer=$productListApiVariable[$i]['priceAfterOffer'];
						$pList_api_StockQuantity=$productListApiVariable[$i]['StockQuantity'];
						$pList_api_currencySymbol=$productListApiVariable[$i]['currencySymbol'];
						$pList_api_materialName=$productListApiVariable[$i]['materialName'];
	
						$pList_api_business_value_mlm=$productListApiVariable[$i]['business_value_mlm'];
	
						$pList_api_product_value_mlm=$productListApiVariable[$i]['product_value_mlm'];
	
						$pList_api_offerAmount=$productListApiVariable[$i]['offerAmount'];
	
						$pList_api_psubCatName=$productListApiVariable[$i]['psubCatName'];
						$pList_api_pCatName=$productListApiVariable[$i]['pcatName'];

						$pList_api_quantity=$productListApiVariable[$i]['quantity'];
	
						$pList_api_materialName=$productListApiVariable[$i]['materialName'];
						
						if($pList_api_pCatName==$selected_option){
						
	
	
	
						//end of get product list data for mainbar from productListApi
					?>

                  

			<li class="span3">
			  <div class="thumbnail" style="height: 500px;">
				<a href="<?php echo "details.php" ;?>"><img src="<?php echo $pList_api_pImgImg  ;?>" alt="" style="height: 300px;"/></a>
				<div class="caption">
				  <h5><?php echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
				  <p> 
				  <?php echo mb_strimwidth($pList_api_productDescription, 0, 100, "...") ;?>
				  </p>
				  <div style="position:absolute; left:20px; top:450px; ">
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo  $pList_api_priceAfterOffer;?></a></h4>
				  </div>
				</div>
			  </div>
			</li>
			<?php 
		} } }}

		if($selected_option=="All"){

			for($i=0; $i<$productListApiCount; $i++)
			{

			  //get product list data for mainbar from productListApi
			 // initialize value in productListApiVariable

			$pList_api_pImgImg=$productListApiVariable[$i]['pImgImg'];
			$pList_api_productUniq=$productListApiVariable[$i]['productUniq'];
			$pList_api_productlink=$productListApiVariable[$i]['productlink'];
			$pList_api_productName=$productListApiVariable[$i]['productName'];
			$pList_api_productDescription=$productListApiVariable[$i]['productDescription'];
			$pList_api_realPrice=$productListApiVariable[$i]['realPrice'];
			$pList_api_priceAfterOffer=$productListApiVariable[$i]['priceAfterOffer'];
			$pList_api_StockQuantity=$productListApiVariable[$i]['StockQuantity'];
			$pList_api_currencySymbol=$productListApiVariable[$i]['currencySymbol'];
			$pList_api_materialName=$productListApiVariable[$i]['materialName'];

			$pList_api_business_value_mlm=$productListApiVariable[$i]['business_value_mlm'];

			$pList_api_product_value_mlm=$productListApiVariable[$i]['product_value_mlm'];

			$pList_api_offerAmount=$productListApiVariable[$i]['offerAmount'];

			$pList_api_psubCatName=$productListApiVariable[$i]['psubCatName'];
			$pList_api_pCatName=$productListApiVariable[$i]['pcatName'];

			$pList_api_quantity=$productListApiVariable[$i]['quantity'];

			$pList_api_materialName=$productListApiVariable[$i]['materialName'];
			
		?>
		<li class="span3">
			  <div class="thumbnail" style="height: 500px;">
				<a href="<?php echo "details.php" ;?>"><img src="<?php echo $pList_api_pImgImg  ;?>" alt="" style="height: 300px;"/></a>
				<div class="caption">
				  <h5><?php echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
				  <p> 
				  <?php echo mb_strimwidth($pList_api_productDescription, 0, 100, "...") ;?>
				  </p>
				  <div style="position:absolute; left:20px; top:450px; ">
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo  $pList_api_priceAfterOffer;?></a></h4>
				  </div>
				</div>
			  </div>
			</li>
			<?php 
		} }
		if(($selected_option=="") && ($subcat_name=="")){
			for($i=0; $i<$productListApiCount; $i++)
			{

			  //get product list data for mainbar from productListApi
			 // initialize value in productListApiVariable

			$pList_api_pImgImg=$productListApiVariable[$i]['pImgImg'];
			$pList_api_productUniq=$productListApiVariable[$i]['productUniq'];
			$pList_api_productlink=$productListApiVariable[$i]['productlink'];
			$pList_api_productName=$productListApiVariable[$i]['productName'];
			$pList_api_productDescription=$productListApiVariable[$i]['productDescription'];
			$pList_api_realPrice=$productListApiVariable[$i]['realPrice'];
			$pList_api_priceAfterOffer=$productListApiVariable[$i]['priceAfterOffer'];
			$pList_api_StockQuantity=$productListApiVariable[$i]['StockQuantity'];
			$pList_api_currencySymbol=$productListApiVariable[$i]['currencySymbol'];
			$pList_api_materialName=$productListApiVariable[$i]['materialName'];

			$pList_api_business_value_mlm=$productListApiVariable[$i]['business_value_mlm'];

			$pList_api_product_value_mlm=$productListApiVariable[$i]['product_value_mlm'];

			$pList_api_offerAmount=$productListApiVariable[$i]['offerAmount'];

			$pList_api_psubCatName=$productListApiVariable[$i]['psubCatName'];
			$pList_api_pCatName=$productListApiVariable[$i]['pcatName'];

			$pList_api_quantity=$productListApiVariable[$i]['quantity'];

			$pList_api_materialName=$productListApiVariable[$i]['materialName'];
			
		?>
		<li class="span3">
			  <div class="thumbnail" style="height: 500px;">
				<a href="<?php echo "details.php" ;?>"><img src="<?php echo $pList_api_pImgImg  ;?>" alt="" style="height: 300px;"/></a>
				<div class="caption">
				  <h5><?php echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
				  <p> 
				  <?php echo mb_strimwidth($pList_api_productDescription, 0, 100, "...") ;?>
				  </p>
				  <div style="position:absolute; left:20px; top:450px; ">
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo  $pList_api_priceAfterOffer;?></a></h4>
				  </div>
				</div>
			  </div>
			</li>
			<?php 
		} }
		
		if($subcat_name !=""){
			for($i=0; $i<$productListApiCount; $i++)
			{

			  //get product list data for mainbar from productListApi
			 // initialize value in productListApiVariable

			$pList_api_pImgImg=$productListApiVariable[$i]['pImgImg'];
			$pList_api_productUniq=$productListApiVariable[$i]['productUniq'];
			$pList_api_productlink=$productListApiVariable[$i]['productlink'];
			$pList_api_productName=$productListApiVariable[$i]['productName'];
			$pList_api_productDescription=$productListApiVariable[$i]['productDescription'];
			$pList_api_realPrice=$productListApiVariable[$i]['realPrice'];
			$pList_api_priceAfterOffer=$productListApiVariable[$i]['priceAfterOffer'];
			$pList_api_StockQuantity=$productListApiVariable[$i]['StockQuantity'];
			$pList_api_currencySymbol=$productListApiVariable[$i]['currencySymbol'];
			$pList_api_materialName=$productListApiVariable[$i]['materialName'];

			$pList_api_business_value_mlm=$productListApiVariable[$i]['business_value_mlm'];

			$pList_api_product_value_mlm=$productListApiVariable[$i]['product_value_mlm'];

			$pList_api_offerAmount=$productListApiVariable[$i]['offerAmount'];

			$pList_api_psubCatName=$productListApiVariable[$i]['psubCatName'];
			$pList_api_pCatName=$productListApiVariable[$i]['pcatName'];

			$pList_api_quantity=$productListApiVariable[$i]['quantity'];

			$pList_api_materialName=$productListApiVariable[$i]['materialName'];
			if($pList_api_psubCatName==$subcat_name){
			
		?>
		<li class="span3">
			  <div class="thumbnail" style="height: 500px;">
				<a href="<?php echo "details.php" ;?>"><img src="<?php echo $pList_api_pImgImg  ;?>" alt="" style="height: 300px;"/></a>
				<div class="caption">
				  <h5><?php echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
				  <p> 
				  <?php echo mb_strimwidth($pList_api_productDescription, 0, 100, "...") ;?>
				  </p>
				  <div style="position:absolute; left:20px; top:450px; ">
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo  $pList_api_priceAfterOffer;?></a></h4>
				  </div>
				</div>
			  </div>
			</li>
			<?php 
		}
	} 
}
	
		 ?>


			<!-- <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure &amp; Pedicure</h5>
				  <p> 
					I'm a paragraph. Click here 
				  </p>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
				</div>
			  </div>
			</li> -->
		  </ul>
	<hr class="soft"/>
	</div>
</div>
<!-- products -->
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
</div>
</div>
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
	<script>
	console.log("<?php echo $pList_api_pCatName ?>")
</script>
</body>
</html>