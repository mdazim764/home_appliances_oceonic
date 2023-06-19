
<?php

error_reporting(0);
session_start();

$baseUrl='http://localhost/bootstrap-shop-electronics/';

//$baseUrl='http://localhost/boutique/boutique-16-3-22/en/';


$apiUrl='http://localhost/bootstrap-shop-electronics/';
////$apiUrl='http://localhost/boutique/boutique-16-3-22/en/';




 $ApiUrlEcommerce="https://a2rstore.com/oceonicApi/ecommerce/v1/api/";
//$ApiUrlEcommerce='https://oceonicitsolution.in/winlight/v1/oceonicApi/ecommerce/v1/api/';
//"http://www.a2rstore.in/oceonicApi/ecommerce/v1/api/";

$a2rTokenKey='A2REco2306116485edb612796';//'restro12demo';//'a2rBak12i1';


$themeId_get=$_GET['themeId'];

setcookie("themeId", $themeId_get, time() + (86400 * 30), "/"); // 86400 = 1 day

$themId=$_COOKIE['themeId'];


$_GET['a2rTokenKey']=$a2rTokenKey;

$a2rTokenKey_get=$_GET['a2rTokenKey'];

$a2rTokenKey_cookie=$_COOKIE['a2rTokenKey'];

if($a2rTokenKey_get!='' && $a2rTokenKey_cookie!='' )
{
    if($a2rTokenKey_get==$a2rTokenKey_cookie)
      {
          $a2rTokenKey=$a2rTokenKey_get;
      }
    elseif($a2rTokenKey_get!=$a2rTokenKey_cookie)
      {
           $a2rTokenKey=$a2rTokenKey_get;
           setcookie("a2rTokenKey", $a2rTokenKey_get, time() + (86400 * 30), "/");
      }
    
}
elseif($a2rTokenKey_get!='' && $a2rTokenKey_cookie=='')
{
         $a2rTokenKey=$a2rTokenKey_get;
           setcookie("a2rTokenKey", $a2rTokenKey_get, time() + (86400 * 30), "/");
}
elseif($a2rTokenKey_get=='' && $a2rTokenKey_cookie!='')
{
    $a2rTokenKey=$a2rTokenKey_cookie;
}
elseif($a2rTokenKey_get=='' && $a2rTokenKey_cookie=='')
{
    $a2rTokenKey='a2r';
}
else{
     $a2rTokenKey='a2r1';
}

//echo $a2rTokenKey;




include('company-detail.php');



//$domainTitleShow='Meatndo';

$domainTitleShow=$companyDetail_api_domain_name;

$domainLogoA2R=$companyDetail_api_company_logo;

?>

 


<!-- a2rVariableEcommerce being -->
<?php include ('a2rVariableEcommerce.php'); ?>
<!-- End -->

<!-- a2rVariableHospital being -->
<?php include ('a2rVariableHospital.php'); ?>
<!-- End -->         

<!-- for show user detail ---->
                <?php //include ('a2r/userA2R.php'); ?>
                <!-- End for show user detail -->  
                
                
                
                



