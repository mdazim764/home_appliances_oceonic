
<?php


// get company detail api data from company_detailApi
// From URL to get webpage contents.
//echo   $urlcompanyDetailApi=$apiUrl."/api/company_detailApi.php?a2rTokenKey=".$a2rTokenKey;

  //$a2rTokenKey='a2r00021';

  $urlcompanyDetailApi="https://a2rworld.com/api/shopListApi.php?a2rTokenKey=".$a2rTokenKey;

// Initialize a CURL session.
   $chcompanyDetailApi = curl_init();
// Return Page contents.
   curl_setopt($chcompanyDetailApi, CURLOPT_RETURNTRANSFER, 1);
// grab URL and pass it to the variable.
   curl_setopt($chcompanyDetailApi, CURLOPT_URL, $urlcompanyDetailApi);
   $resultcompanyDetailApi = curl_exec($chcompanyDetailApi);
// echo $result;
   $companyDetailApiVariable = json_decode($resultcompanyDetailApi, TRUE);
// end of get company detail api data from company_detailApi



// get company detail api data from company_detailApi
// initialize value in product detail variable

     $companyDetail_api_company_logo=$companyDetailApiVariable[0]['logo'];
    $companyDetail_api_company_name=$companyDetailApiVariable[0]['company_name'];
    
    $companyDetail_api_domainTitle_name=$companyDetailApiVariable[0]['company_name'];
    
    $companyDetail_api_domain_name=$companyDetailApiVariable[0]['company_name'];

   
   $companyDetail_api_description=$companyDetailApiVariable[0]['description'];
   $companyDetail_api_address=$companyDetailApiVariable[0]['address'];
   $companyDetail_api_office_address=$companyDetailApiVariable[0]['office_address'];
   $companyDetail_api_mob1=$companyDetailApiVariable[0]['mob1'];
   $companyDetail_api_mob2=$companyDetailApiVariable[0]['mob2'];
   $companyDetail_api_mob3=$companyDetailApiVariable[0]['mob3'];
   $companyDetail_api_gmail=$companyDetailApiVariable[0]['email'];
   $companyDetail_api_copyright_link=$companyDetailApiVariable[0]['copyright_link'];
   $companyDetail_api_company_reserved=$companyDetailApiVariable[0]['company_reserved'];
   $companyDetail_api_fb=$companyDetailApiVariable[0]['fb'];
   $companyDetail_api_instagram=$companyDetailApiVariable[0]['instagram'];
  
// initialize value in product detail variable
//end get company detail api data from company_detailApi
?>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <a href="index.php" class="navbar-brand"><img src="<?php echo $companyDetail_api_company_logo
; ?>"  style="height: 70px!important;" ></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <div class="navbar-nav">
      <a href="my_cart.php" class="nav-item nav-link active">My Cart</a>
      <a href="order_list.php" class="nav-item nav-link">My Orders</a>
      
      <a href="order_list.php?action_order=delivered" class="nav-item nav-link">Delivered Orders</a>
      <a href="order_list.php?action_order=pending" class="nav-item nav-link">Pending Orders</a>
      <a href="order_list.php?action_order=accepted" class="nav-item nav-link">Accepted Orders</a>
      <a href="order_list.php?action_order=canceled" class="nav-item nav-link">Cancel Orders</a>
      <!--
      <a href="#" class="nav-item nav-link">My Rewards</a>
      <a href="#" class="nav-item nav-link">My Wishlist</a> 
    -->
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Others</a>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Notification Preferences</a>
          <a href="#" class="dropdown-item">Help Center</a>
          <a href="#" class="dropdown-item">Privacy Police</a>
          <a href="#" class="dropdown-item">Legal</a>
        </div>
      </div>
      <!--<a href="#" class="nav-item nav-link">Offer Zone</a>-->
      <a href="my_address.php" class="nav-item nav-link"><i class="fa fa-address-card" aria-hidden="true"></i> My Address</a>
    </div>
    
    <div class="navbar-nav ml-auto">
      <!--
      <a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a>
    
      <a href="#" class="nav-item nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></a> -->
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" style="margin-top: -5px;">
          <!--<img src="/examples/images/avatar/2.jpg" class="avatar" alt="Avatar">-->
          <i class="fa fa-user avatar" aria-hidden="true"></i>
            <!-- // show user name from a2r -->
                    <?php echo $userName_a2r; ?>
                  <!-- show user name from a2r  -->
          <b class="caret"></b></a>
        <div class="dropdown-menu" >
          <a href="my_profile.php" class="dropdown-item"><i class="fa fa-user-o"></i>My Profile</a></a>
          <!--
          <a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>-->
          <div class="dropdown-divider"></div>
          <a href="../a2r/logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
        </div>
      </div>
    </div>
  </div>
</nav>