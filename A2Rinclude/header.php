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

<div id="header">
		<div class="container">
		<div id="welcomeLine" class="row">
			<div class="span6">Welcome!<strong> User</strong></div>
			<div class="span6">
			<div class="pull-right">
				<a href="product_summary.html"><span class="">Fr</span></a>
				<a href="product_summary.html"><span class="">Es</span></a>
				<span class="btn btn-mini">En</span>
				<a href="product_summary.html"><span>&pound;</span></a>
				<span class="btn btn-mini">$155.00</span>
				<a href="product_summary.html"><span class="">$</span></a>
				<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
			</div>
			</div>
		</div>
		<!-- Navbar ================================================== -->
		<div id="logoArea" class="navbar">
		<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-inner">
			<a class="brand" href="index.php"><img style="border-radius: 10px;" src="<?php echo $companyDetail_api_company_logo;?>"  alt="<?php echo $companyDetail_api_domain_name ;?>"/></a>
				<form class="form-inline navbar-search" method="post" action="products.php" >
				<input id="srchFld" class="srchTxt" type="text" />
				<select name="cat_name" class="srchTxt">
				<option value="All">All</option>


			<!--Categories api loop start -->

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

                  ?> 
					<option value="<?php echo $pCat_pcat_name ;?>"><?php echo $pCat_pcat_name ;?></option>
					<?php } ?>
					<!-- <option>CLOTHES </option>
					<option>FOOD AND BEVERAGES </option>
					<option>HEALTH & BEAUTY </option>
					<option>SPORTS & LEISURE </option>
					<option>BOOKS & ENTERTAINMENTS </option> -->
				</select> 
				<button type="submit" id="submitButton" class="btn btn-primary">Go</button>
			</form>
			<ul id="topMenu" class="nav pull-right">
			<li class=""><a href="list.php">Specials Offer</a></li>
			<li class=""><a href="normal.html">Delivery</a></li>
			<li class=""><a href="contact.html">Contact</a></li>
			<li class="">
			<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
			<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>Login Block</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal loginFrm">
					<div class="control-group">								
						<input type="text" id="inputEmail" placeholder="Email">
					</div>
					<div class="control-group">
						<input type="password" id="inputPassword" placeholder="Password">
					</div>
					<div class="control-group">
						<label class="checkbox">
						<input type="checkbox"> Remember me
						</label>
					</div>
					</form>		
					<button type="submit" class="btn btn-success">Sign in</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</div>
			</li>
			</ul>
		</div>
		</div>
		</div>
	</div>