<?php

include('../include/top-header.php');     // for use top-header

include('../include/root_1_folder.php');   // root 1 folder for include other folder


$uid=$_POST['uid'];
$user_name=$_POST['user_name'];
echo $mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];
$landmark=$_POST['landmark'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];



// API URL
$url = 'https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/addressApi.php?a2rTokenKey='.$a2rTokenKey.'&uid='.$uid.'&action=addAddress';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'uid' => $uid,
    'user_name' =>$user_name,
    'address' => $address,
    'mobile_no' => $mobile_no,
    'landmark' =>$landmark,
    'pincode' =>$pincode,
    'city' => $city,
    'state' => $state,
    'country' => $country,
    'latitude' => $latitude,
    'longitude' => $longitude
);
$payload = json_encode(array("user" => $data));


curl_setopt($ch, CURLOPT_POST, true);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
}


print_r($result);


//print_r($data);

print_r(json_decode($payload));



?>