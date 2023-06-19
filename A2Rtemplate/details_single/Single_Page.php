<?php
           // count array number for Product List Category
           //$productDetailImgApiCount=count($productDetailImgApiVariable);
             $productDetailImgApiCount=$productDetailImgApiVariable[0]['num'];
			 
           // end

          // get product detail image data from productListApi
          //$ProductListApiCount
         for($i=0; $i< $productDetailImgApiCount; $i++)
           {

             //get product list data for mainbar from productListApi
            // initialize value in productDetailImgApiVariable

             $pList_api_pImgImg=$productDetailImgApiVariable[$i]['pImgImg'];

			 $pList_api_pImgdetail=$productDetailImgApiVariable[$i]['productImg'];
			 $pList_api_pImggroup=$pList_api_pImgdetail[$i]['imgPath'];

             $productNamePDetailApiValue=$productDetailImgApiVariable[$i]['productName'];
             $productCodePDetailApiValue=$productDetailImgApiVariable[$i]['productCode'];
             $productlinkPDetailApiValue=$productDetailImgApiVariable[$i]['productlink'];
              $pList_api_priceAfterOffer=$productDetailImgApiVariable[$i]['priceAfterOfferNum'];
             //end of  get product detail image data from productListApi
			 if($productNamePDetailApiValue=="JaipurCrafts Designer Sports Bike Shaped Iron Wall Clock for Home/Living Room/Bedroom/Kitchen- 15.50 in x 22 in, Red & Gold"){
          
		  ?>
<div id="gallery" class="span3" style="margin-left: 200px;">
            <a href="<?php echo  $pList_api_pImgImg ;?>" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="<?php echo  $pList_api_pImgImg ;?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				  <?php 
				  for($j=0;$j<count($pList_api_pImgdetail);$j++)
				  {
					?>
                   <a href="<?php echo  $pList_api_pImgdetail[$j]['imgPath'] ;?>"> <img style="width:29%" src="<?php echo  $pList_api_pImgdetail[$j]['imgPath'] ;?>" alt=""/></a>
                   <!-- <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a> -->
				   <?php
				  } ?>
				</div>
				  
                  <div class="item">

				  <?php 
				  for($j=count($pList_api_pImgdetail);$j>0;$j--)
				  {
					?>
                   <a href="<?php echo  $pList_api_pImgdetail[$j]['imgPath'] ;?>"> <img style="width:29%" src="<?php echo  $pList_api_pImgdetail[$j]['imgPath'] ;?>" alt=""/></a>
                   <!-- <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a> -->
				   <?php
				  } ?>
                   <!-- <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a> -->
                  </div>
                </div>
 			<!--                
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
				<h3><?php echo mb_strimwidth($productNamePDetailApiValue, 0, 60, "...");?>  </h3>
				<!-- <small>- (14MP, 18x Optical Zoom) 3-inch LCD</small> -->
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><?php echo  $pList_api_priceAfterOffer;?> Rs</span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>100 items in stock</h4>
				<!-- <form class="form-horizontal qtyFrm pull-right">
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span2">
						  <option>Black</option>
						  <option>Red</option>
						  <option>Blue</option>
						  <option>Brown</option>
						</select>
					</div>
				  </div>
				</form> -->
				<hr class="soft clr"/>
				<p>
				<!-- 14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. 
				Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 ×81.4x73.4mm. 
				Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card). -->
				<?php echo $productNamePDetailApiValue ;
					// print_r($pList_api_pImgdetail);
					// print_r($pList_api_pImggroup);
					?>
				</p>
				<!-- <a class="btn btn-small pull-right" href="#detail">More Details</a> -->
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			<?php }}
			// print_r($productDetailImgApiVariable);
			// print_r($pList_api_pImgdetail);
			 ?>