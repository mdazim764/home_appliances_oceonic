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


<div id="sidebar" class="span3">
					<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
						<ul id="sideManu" class="nav nav-tabs nav-stacked">
                     <?php
                     $pCat_pcat_name=$PCatApiVariable[0]['pcat_name'];
                     $pCat_pcat_uniq=$PCatApiVariable[0]['pcat_uniq'];
                     $pCat_pcat_link=$PCatApiVariable[0]['pcat_link'];
                     $pCat_pcat_img=$PCatApiVariable[0]['pcat_img'];
                     $pCat_pcat_description=$PCatApiVariable[0]['pcat_description'];

                        // count array number for Product List Category
                        $productListApiCount=count($productListApiVariable);
                        $no_cat_pro=0;
                     for($j=0; $j<$productListApiCount; $j++)
                     {
              
                       //get product list data for mainbar from productListApi
                      // initialize value in productListApiVariable
              
                     
              
                     $pList_api_psubCatName=$productListApiVariable[$j]['psubCatName'];
                     $pList_api_pCatName=$productListApiVariable[$j]['pcatName'];
                  
                     if($productListApiVariable[$j]['pcatName']==$pCat_pcat_name){
                        $no_cat_pro++;
                     }}
                     ?>
                     <li class="subMenu open"><a> <?php echo $pCat_pcat_name ;?> [<?php echo $no_cat_pro ;?>]</a>
								<ul>
                        <?php

                        // count array number for Product List Category
						$productListApiCount=count($productListApiVariable);
						// end
                  $subcatname="";
                        for($i=0; $i<$productListApiCount; $i++)
                        {
          
                          //get product list data for mainbar from productListApi
                         // initialize value in productListApiVariable
          
                        
         
                        $pList_api_psubCatName=$productListApiVariable[$i]['psubCatName'];
                        $pList_api_pCatName=$productListApiVariable[$i]['pcatName'];
      
                        if($productListApiVariable[$i]['pcatName']==$pCat_pcat_name){
                        if($pList_api_psubCatName==$subcatname){
                           continue;
                        }
                        else{
                        ?>
								<li><a class="active" href="products.php?subcat_name=<?php echo $pList_api_psubCatName ;?>"><i class="icon-chevron-right"></i><?php echo $pList_api_psubCatName ;?> </a></li>
								<?php 
                        // break;
                        $subcatname=$pList_api_psubCatName;
                     }
                         }
                      }
                        ?>
                        
                        <!-- <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li> -->
								</ul>
							</li>

                     <!--Categories api loop start -->
			<?php
				// count array number for Product Cat
             //$ProductCatApiCount=count($PCatApiVariable);
                   // end

             // get category data from productCatApi
            //$ProductCatApiCount
            // print_r($PCatApiVariable);
               $catnames[100];
               $subcatnames[100];
                 for($i=1; $i<$PCatApiVariable[0]['num']; $i++)
                   {
                     $no_cat_pro=0;
 // count array number for Product List Category
 $productListApiCount=count($productListApiVariable);
 // end
       for($k=0; $k<$productListApiCount; $k++)
       { 

         //get product list data for mainbar from productListApi
        // initialize value in productListApiVariable

        $pCat_pcat_name=$PCatApiVariable[$i]['pcat_name'];

       $pList_api_psubCatName=$productListApiVariable[$k]['psubCatName'];
       $pList_api_pCatName=$productListApiVariable[$k]['pcatName'];
       if($productListApiVariable[$k]['pcatName']==$pCat_pcat_name){
          $no_cat_pro++;
       }}
                    // get category data from productCatApi
                    // initialize value in PCatApiVariable

                     $pCat_pcat_name=$PCatApiVariable[$i]['pcat_name'];
                     // $pCat_pcat_uniq=$PCatApiVariable[$i]['pcat_uniq'];
                     // $pCat_pcat_link=$PCatApiVariable[$i]['pcat_link'];
                     // $pCat_pcat_img=$PCatApiVariable[$i]['pcat_img'];
                     // $pCat_pcat_description=$PCatApiVariable[$i]['pcat_description'];
                     
					?>

							<li class="subMenu open"><a> <?php echo $pCat_pcat_name ;?> [<?php echo $no_cat_pro ;?>]</a>
								<ul style="display:none">
                        <?php
                        // count array number for Product List Category
						$productListApiCount=count($productListApiVariable);
						// end
                        for($j=0; $j<$productListApiCount; $j++)
                        {
          
                          //get product list data for mainbar from productListApi
                         // initialize value in productListApiVariable
          
                        
         
                        $pList_api_psubCatName=$productListApiVariable[$j]['psubCatName'];
                        $pList_api_pCatName=$productListApiVariable[$j]['pcatName'];
                     
                        if($productListApiVariable[$j]['pcatName']==$pCat_pcat_name){
                           

                           if($pList_api_psubCatName==$subcatname){
                              continue;
                           }
                           else{
                        
                        ?>
								<li><a href="products.php?subcat_name=<?php echo $pList_api_psubCatName ;?>"><i class="icon-chevron-right"></i><?php echo $pList_api_psubCatName ;?> </a></li>
								<!-- <li><a href="products.html"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li> -->
                        <?php 
                        // break;
                        $subcatname=$pList_api_psubCatName;
                     }
                        } }
                        ?>
								</ul>
							</li>
                     <?php } ?>
							<!-- <li class="subMenu"><a> CLOTHES [840] </a>
							<ul style="display:none">
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
								<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
							</ul>
							</li>
							<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
								<ul style="display:none">
								<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
								<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
								<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
								<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
							</ul>
							</li>
							<li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
							<li><a href="products.html">SPORTS & LEISURE [58]</a></li>
							<li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li> -->
						</ul>
						<br/>
						<?php
                   // count array number for Product List Category
                   //$productListApiCount=count($productListApiVariable);
                   $productListApiCount=$productListApiVariable[0]['num'];
                   // end

                  //get product list data for mainbar from productListApi
                  //$ProductListApiCount

                   //for($i=0; $i<$productListApiCount; $i++) eidt by manuraj

                   //start of To show only 12 products instead of maximum products

                   if($productListApiCount>12)
                   {
                    $productListApiCountshow=12;
                   }
                   elseif($productListApiCount<12)
                   {
                    $productListApiCountshow=$productListApiCount;
                   }
                   else{
                         $productListApiCountshow=0; 
                   }

                   //end of To show only 12 products instead of maximum products


                   for($i=0; $i<4; $i++)
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
    $pList_api_offerAmount=$productListApiVariable[$i]['offerAmount'];
    $pList_api_quantity=$productListApiVariable[$i]['quantity'];

  /*
    $pList_api_business_value_mlm=$productListApiVariable[$i]['business_value_mlm'];

    $pList_api_product_value_mlm=$productListApiVariable[$i]['product_value_mlm'];

   */

    //end of get product list data for mainbar from productListApi
	// if($pList_api_productName=="Top Collection Green Tara Female Buddha Statue- The Great Compassionate Mother Sculpture in Premium Cold Cast Bronze- 7.75-Inch Collectible East Asian New Age Buddha Figurine"){
                  ?>
						<!-- <div class="thumbnail">
							<img src="<?php 
							// echo $pList_api_pImgImg;
							?>" alt="Bootshop panasonoc New camera"/>
							<div class="caption">
							<h5><?php // echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php //echo $pList_api_realPrice ?>Rs</a></h4>
							</div>
						</div><br/> -->
						<?php
	// }
	if(($pList_api_productName=="Skywalk Hand Crafted Metal Flower Vase with Beads (10 Inch),Golden")||($pList_api_productName=="JaipurCrafts Decorative Royal Rajasthan Handmade Coaster Wall")){
	?>

							<div class="thumbnail">
								<img src="<?php echo $pList_api_pImgImg;?>" title="Bootshop New Kindel" alt="Bootshop Kindel">
								<div class="caption">
								<h5><?php  echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
									<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $pList_api_realPrice ?></a></h4>
								</div>
							</div><br/>
							<?php
	}}
	?>
							<!-- <div class="thumbnail">
								<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
								<div class="caption">
								<h5>Payment Methods</h5>
								</div>
							</div> -->
				</div>