<div class="well well-small">
						<h4>Featured Products <small class="pull-right"><?php echo $productListApiCount ?>+ featured products</small></h4>
						<div class="row-fluid">
						<div id="featured" class="carousel slide">
						<div class="carousel-inner">
						<div class="item active">
						<ul class="thumbnails">
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
                  ?>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="<?php echo $pList_api_productlink ?>"><img src="<?php echo $pList_api_pImgImg;?>" alt=""></a>
									<div class="caption">
									<h5><?php  echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
									<h4><a class="btn" href="<?php echo $pList_api_productlink ;?>">VIEW</a> <span class="pull-right"><?php echo $pList_api_realPrice ?></span></h4>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- <li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="product_details.html"><img src="themes/images/products/b2.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="product_details.html"><img src="themes/images/products/b3.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="product_details.html"><img src="themes/images/products/b4.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li> -->
						</ul>
						</div>
						<div class="item">
						<ul class="thumbnails">
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


                   for($i=4; $i<8; $i++)
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
                  ?>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="<?php echo $pList_api_productlink ?>"><img src="<?php echo $pList_api_pImgImg;?>" alt=""></a>
									<div class="caption">
									<h5><?php  echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
									<h4><a class="btn" href="<?php echo $pList_api_productlink ;?>">VIEW</a> <span class="pull-right"><?php echo $pList_api_realPrice ?></span></h4>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- <li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="product_details.html"><img src="themes/images/products/6.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/7.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/8.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li> -->
						</ul>
						</div>
						<div class="item">
						<ul class="thumbnails">
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


                   for($i=8; $i<12; $i++)
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
                  ?>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="<?php echo $pList_api_productlink ?>"><img src="<?php echo $pList_api_pImgImg;?>" alt=""></a>
									<div class="caption">
									<h5><?php  echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
									<h4><a class="btn" href="<?php echo $pList_api_productlink ;?>">VIEW</a> <span class="pull-right"><?php echo $pList_api_realPrice ?></span></h4>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- <li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/9.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li> -->
						</ul>
						</div>
						<div class="item">
						<ul class="thumbnails">
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


                   for($i=12; $i<16; $i++)
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
                  ?>
							<li class="span3">
								<div class="thumbnail">
								<i class="tag"></i>
									<a href="<?php echo $pList_api_productlink ?>"><img src="<?php echo $pList_api_pImgImg;?>" alt=""></a>
									<div class="caption">
									<h5><?php  echo mb_strimwidth($pList_api_productName, 0, 40, "...");?></h5>
									<h4><a class="btn" href="<?php echo $pList_api_productlink ;?>">VIEW</a> <span class="pull-right"><?php echo $pList_api_realPrice ?></span></h4>
									</div>
								</div>
							</li>
							<?php } ?>
							<!-- <li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/4.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li>
							<li class="span3">
								<div class="thumbnail">
									<a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
									<div class="caption">
									<h5>Product name</h5>
									<h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
									</div>
								</div>
							</li> -->
						</ul>
						</div>
						</div>
						<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
						<a class="right carousel-control" href="#featured" data-slide="next">›</a>
						</div>
						</div>
					</div>