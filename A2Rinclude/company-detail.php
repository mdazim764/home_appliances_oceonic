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