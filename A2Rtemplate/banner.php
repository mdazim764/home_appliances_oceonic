<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container" style=" height: 400px;">
		  <?php
                            // count array number for productListApiCount
                           $bannerApiCount=$bannerApiVariable['num'];
						   $banner_name_banner_api=$bannerApiVariable[0]['banner_name'];
                           $bannerWebsite_img_banner_api=$bannerApiVariable[0]['bannerWebsite_img'];

						   ?>
			<a href="register.html"><img style="width:100%; height: 400px; " src="<?php echo $bannerWebsite_img_banner_api;?>" alt="special offers"/></a>
			<div class="carousel-caption" style="visibility: visible;">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <?php
                            // count array number for productListApiCount
                           $bannerApiCount=$bannerApiVariable['num'];
                           // end
                             for($i=1; $i<$bannerApiCount; $i++)
                            {

                        //  get get banner data from bannerApi
                        // initialize value in bannerApiVariable

                           $banner_name_banner_api=$bannerApiVariable[$i]['banner_name'];
                           $bannerWebsite_img_banner_api=$bannerApiVariable[$i]['bannerWebsite_img'];
                           $banner_description_banner_api=$bannerApiVariable[$i]['banner_description'];
                           $banner_link_banner_api=$bannerApiVariable[$i]['banner_link'];
                            //end of get banner data from bannerApi

                            ?>
        
         
		  <div class="item">
		  <div class="container" style=" height: 400px;">
			<a href="register.html"><img style="width:100%; height: 400px;" src="<?php echo $bannerWebsite_img_banner_api;?>" alt="<?php $pList_api_productName ?>"/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <?php
                                }  
                                 // end of show data of banner image api
                               ?>
		  <!-- <div class="item">
		  <div class="container">
			<a href="register.html"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/6.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div> -->
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<!-- <div id="mainBody">
	<div class="container">
	<div class="row"> -->