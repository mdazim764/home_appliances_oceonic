<?php

// include page 

    // save page in include folder
    // include in top-header.php


//for Ecommerce

    //Base Url Variable =$ApiUrlEcommerce



// for Product Category


     //Api Name=productCatApi.php



// for show all the product category
    //Structure of Url Link

    //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey

    // Url Link  =https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productCatApi.php?a2rTokenKey=a2rhos1234


//end for show all the product category


// end of product category



// for Product Sub Category


      //Api Name=productSubCatApi.php



      // for show all the product category
          ///Structure of Url Link

         //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey     &   pcat

         //Url Link  =https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productSubCatApi.php?a2rTokenKey=a2rhos1234&pcat=60c73d002d06e




             if(empty($_GET['pcat']))
               {}
             else{
                    $pcat_get=$_GET['pcat'];
                 }


               //Call Api Url =$ApiUrlEcommerce."productSubCatApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get


     //end for show all the product sub category






// for Product list


      //Api Name=productListApi.php



     // for show all the product
         //Structure of Url Link

          //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey 

          //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234



         // for show category wise the product
          
           //Structure of Url Link

          //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey  &  pcat

          //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&pcat=60c461f032f2a



             if(empty($_GET['pcat']))
               {}
            else{
                    $pcat_get=$_GET['pcat'];

                    $pcatName_get=$_GET['pcatName'];

                    $NameShow_get=$pcatName_get;      // this variable use for show name on list page titile
               }


          //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&pcat=".$pcat_get


//end for show category wise product 



// for show sub category wise the product
      
      //Structure of Url Link

      //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey  &  psubcat

      //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&psubcat=60c462e07151c



         if(empty($_GET['psubcat']))
           {}
         else{
               $psubcat_get=$_GET['psubcat'];

               $psubCatName_get=$_GET['psubcatName'];

               $NameShow_get=$psubCatName_get;      // this variable use for show name on list page titile
              }


       //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&psubcat=".$psubcat_get


//end for show sub category wise the product



// for show single the product
//Structure of Url Link

       //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey  &  plistId

      //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&plistId=60cacee2ee4ff



      if(empty($_GET['plistId']))
       {}
     else{
            $plistId_get=$_GET['plistId'];

            $pListName_get=$_GET['pListName'];

            $NameShow_get=$pListName_get;      // this variable use for show name on list page titile
         }


          //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&plistId=".$plistId_get


//end for show single wise the product






// for show related  product
//Structure of Url Link

       //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey  &  plistId &type=related

      //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&plistId=60cacee2ee4ff&type=related



      


          //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&plistId=".$plistId_get."&type=related"


//end for show related product


// for show trending  product
//Structure of Url Link

       //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey   &type=trending

      //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&type=trending



      


          //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&type=trending"


//end for show related product



// for show Best Deal  product
//Structure of Url Link

       //Url Link  = $ApiUrlEcommerce + Api Name ? a2rTokenKey   &type=bestDeal

      //Url Link  = https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/productListApi.php?a2rTokenKey=a2rhos1234&type=bestDeal



      


          //Call Api Url =$ApiUrlEcommerce."productListApi.php?a2rTokenKey=".$a2rTokenKey."&type=bestDeal"


//end for show related product


     // start order Id in order list page 
     
    if(empty($_GET['orderId']))
      {}
     else{
            $orderId_get=$_GET['orderId'];

         }

     // end order Id in order list page    


?>











