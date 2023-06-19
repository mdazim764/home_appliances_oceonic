<h4>Latest Products </h4>
					<ul class="thumbnails">
					<?php
              // this is use for count product
               //$trending_count=count($trendingPListApiVariable);
               $trending_count=$trendingPListApiVariable[0]['num'];

               //start of To show only 8 products instead of maximum products
               $trending_given_count=8;
               $trending_given=$trending_given_count;


               if ($trending_count>$trending_given_count) {
                  
                  $trending_given=$trending_given_count;

               }
               elseif ($trending_count<=$trending_given_count) {
                
                 $trending_given=$trending_count;
               }
               //end of To show only 8 products instead of maximum products

               

               for($itrending=0; $itrending<$trending_given; $itrending++)
               {
				


               // get featured_product  data from productListApi
              // initialize value in trendingPListApiVariable

               $trending_productName=$trendingPListApiVariable[$itrending]['productName'];
               $trending_productUniq=$trendingPListApiVariable[$itrending]['productUniq'];
               $trending_productDescription=$trendingPListApiVariable[$itrending]['productDescription'];
               $trending_realPrice=$trendingPListApiVariable[$itrending]['realPrice'];
               $trending_priceAfterOffer=$trendingPListApiVariable[$itrending]['priceAfterOffer'];
               $trending_pImgImg=$trendingPListApiVariable[$itrending]['pImgImg'];
               $trending_productlink=$trendingPListApiVariable[$itrending]['productlink'];

               $trending_pcatName=$trendingPListApiVariable[$itrending]['pcatName'];
               $trending_offerAmount=$trendingPListApiVariable[$itrending]['offerAmount'];

               $trending_priceAfterOffer=$trendingPListApiVariable[$itrending]['priceAfterOffer'];

               $trending_quantity=$trendingPListApiVariable[$itrending]['quantity'];


               $trending_materialName=$trendingPListApiVariable[$itrending]['materialName'];

              /* $trending_business_value_mlm=$trendingPListApiVariable[$itrending]['business_value_mlm'];
               $trending_product_value_mlm=$trendingPListApiVariable[$itrending]['product_value_mlm'];*/

			//    if($trending_productName==" Samsung 322 L 2 Star Convertible 5In1, Digital Inverter Frost Free Double Door Refrigerator"){
			// 	continue;
			//    }

               //end of  get featured_product  data from productListApi
 
             ?>  
						<li class="span3">
							<div class="thumbnail" style="height: 500px;">
								<a  href="product_details.html"><img src="<?php echo $trending_pImgImg; ?>" alt="" style="height: 300px;" /></a>
								<div class="caption">
								<h5><?php echo mb_strimwidth($trending_productName, 0, 40, "..."); ?></h5>
								<p> 
								<?php echo mb_strimwidth($trending_productDescription, 0, 100, "...");  ?> 
								</p>
								<div style="position:absolute; left:20px; top:450px; ">
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">
								<?php  echo $trending_realPrice; ?>/-
								</a></h4>
								</div>
								</div>
							</div>
						</li>

						<?php  }   ?>  
						<!-- <li class="span3">
							<div class="thumbnail">
								<a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
								<div class="caption">
								<h5>Product name</h5>
								<p> 
									Lorem Ipsum is simply dummy text. 
								</p>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
								<div class="caption">
								<h5>Product name</h5>
								<p> 
									Lorem Ipsum is simply dummy text. 
								</p>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
								<div class="caption">
								<h5>Product name</h5>
								<p> 
									Lorem Ipsum is simply dummy text. 
								</p>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
								<div class="caption">
								<h5>Product name</h5>
								<p> 
									Lorem Ipsum is simply dummy text. 
								</p>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
								<div class="caption">
								<h5>Product name</h5>
								<p> 
									Lorem Ipsum is simply dummy text. 
								</p>
								<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
								</div>
							</div>
						</li> -->
					</ul>	