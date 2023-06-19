<main>
      <div class="basket">
       
       <!--
        <div class="basket-module" style="margin-bottom: 20px;">
          <a href="my_cart.php">
            <button class="promo-code-cta">My Cart</button>
          </a>
          
            
          
        </div>
       -->


        
      <!-- edit by manuraj 14-04-22 --  
        <div class="basket-labels">
          <ul>
            <li class="item item-heading">Item</li>
            <li class="price">Price</li>
            <li class="quantity">Status</li>
            <li class="subtotal">Subtotal</li>
          </ul>
        </div>
      --> 

      <div class="mob_hide">
<hr>

<div class="row" style="text-align: center;">
    <div class="col-sm-2 col-4">Img</div>
    <div class="col-sm-4 col-8">Item Name</div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;">
         <!--<div class="col-3">Amount</div>
         <div class="col-3">Status</div>
         <div class="col-3">Total Amount</div>
         <div class="col-3">&nbsp;</div> -->
         <div class="col-4">Status</div>
         <div class="col-4">Total Amount</div>
         <div class="col-4">&nbsp;</div> 
       </div> 
    </div>
</div>
</div> 



    <?php

    // start loop for show orderList list

    foreach ($orderListApiCartProductListShow as $orderListApiCartProductListValue) 
      {

          $real_price_orderListApi='500';

          // get order id
          $orderId_orderListApi=$orderListApiCartProductListValue->orderId;

          // get order name
          $orderName_orderListApi=$orderListApiCartProductListValue->orderName;

          // get order delivery name
          $deliveryStatus_orderListApi=$orderListApiCartProductListValue->deliveryStatus;
          

          // get order quantty
          $quantty_orderListApi=$orderListApiCartProductListValue->quantty;


          // get order img
          $img_orderListApi=$orderListApiCartProductListValue->img;

          // get order user_name
          $user_name_orderListApi=$orderListApiCartProductListValue->user_name;


          // get order totalAmount
          $totalAmount_orderListApi=$orderListApiCartProductListValue->totalAmount;

          $orderId_orderListApi=$orderListApiCartProductListValue->orderId;
          
          $orderStatusName_orderListApi=$orderListApiCartProductListValue->orderStatusName;

        // get order date
          $date_orderListApi=$orderListApiCartProductListValue->date;

          $originalDate = $date_orderListApi;
          $newDate = date("d-m-Y H:i:s", strtotime($originalDate));

     ?>

       <div class="row" style="text-align: center;margin-top: 20px;background-color: #fff;padding-top: 10px; padding-bottom: 10px;box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;">
    <div class="col-sm-2 col-4">
      <img src="<?php echo $companyDetail_api_company_logo;?>" alt="<?php echo $domainTitleShow; ?>" style="width: 100%; height: 80px;">
    </div>
    <div class="col-sm-4 col-8" style="text-align: left;">
      <div>
        <span><a href="order_detail.php?orderId=<?php echo $orderId_orderListApi; ?>" ><strong><?php echo $orderName_orderListApi;  ?> </strong></a></span> <br>
        <span>Order ID - 
                      <?php
                         // product Code
                            echo$orderId_orderListApi;
                      ?> 
        </span> <br>
        <span>Quantity :
             <?php 
                     // quantty  order list cart 
                  echo $quantty_orderListApi;
             ?>
         </span> <br>
        <span>Date - 
                      <?php
                         // product cart date
                            echo $newDate;
                      ?> 
        </span> <br>
      </div>
    </div>
    <div class="col-sm-6">
       <div class="row" style="text-align: center;margin-top: 5%;">
        <!--
         <div class="col-3 ">Rs 
           <?php
               // product show price after offer
             echo $totalAmount_orderListApi;
          ?>/-
         </div>
         <div class="col-3">
           <?php echo $deliveryStatus_orderListApi;?>
         </div>
         <div class="col-3">
          Rs 
           <?php
              // sub total original price (minus) sub total offer price
              echo $totalAmount_orderListApi;
           ?>/-
         </div>
         <div class="col-3">
           <a href="#" class="btn btn-outline-primary" role="button">Remove</a>
         </div>
       -->

         <div class="col-4">
           <?php echo $orderStatusName_orderListApi;?>
         </div>
         <div class="col-4">
          Rs 
           <?php
              // sub total original price (minus) sub total offer price
              echo $totalAmount_orderListApi;
           ?>/-
         </div>
         <div class="col-4">
          <!--
           <a href="#" class="btn btn-outline-primary" role="button">Remove</a>
         -->
         </div>
       </div> 
    </div>
</div>

      <?php

       }       // end loop for show cart list

      ?>



     

      </div><!---end basket--->


    </main>