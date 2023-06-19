<?php

$uid=$_GET['uid'];
$sid=$_GET['sid'];
 $user_name=$_GET['user_name'];

$backPageLink=$_GET['backPageLink'];

session_start();

$_SESSION['uid']=$uid;

$_SESSION['sid']=$sid;

$_SESSION['user_name']=$user_name;


// replace  -a2r- from &

$referal_backPage_exp=explode("-a2r-",$backPageLink);


 $referal_backPage=implode('&',$referal_backPage_exp);


//$pageLink='../../../../../index.php';

header('location:'.$referal_backPage);




?>