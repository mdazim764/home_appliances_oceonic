
<?php

include('../include/top-header.php');

?>	

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack-->
<head>
	<title>register || <?php echo$domainTitleShow; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->


<meta name="robots" content="noindex, follow">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  enctype="multipart/form-data" class="login100-form validate-form p-l-55 p-r-55 p-t-140 form-horizontal" action="../validate/validate_enquiry.php" method="post">
					<span class="login100-form-title">
						Enquiry Form!
					</span><hr>


                     <!-- <input type="hidden" name="backPagelink" id="backPagelink" value="<?php echo $referal_backPage; ?>"> -->


					<div class="form-group1 wrap-input100 validate-input m-b-16" data-validate="Please enter First Name">
						<input class="input100 form-control" type="text" name="name" placeholder="First Name">
						<i class="fa fa-user"></i>
						<span class="focus-input100"></span>
					</div>

                    <div class="form-group1 wrap-input100 validate-input m-b-16" data-validate="Please enter Last Name">
                        <input class="input100 form-control" type="text" id="user_name" name="lastname" placeholder="Last Name">
                        <i class="fa fa-user"></i>
                        <span class="focus-input100"></span>
                    </div>
                    

					<div class="form-group1 wrap-input100 validate-input m-b-16" data-validate="Email">
						<input class="input100 form-control" type="text"  name="email"  placeholder="Email" >
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<span class="focus-input100"></span>
					</div>

					

					<div class="form-group1 wrap-input100 validate-input m-b-16" data-validate="Mobile No">
						<input class="input100 form-control" type="number"  name="mobile_no"  placeholder="Mobile No" >
						<i class="fa fa-mobile" aria-hidden="true"></i>
						<span class="focus-input100"></span>
					</div>	

					<div class="container-login100-form-btn">

						<!--
						<button class="login100-form-btn">
							Sign in
						</button>
					-->

                    <!-- this all button and msg use for api-->
					  <!-- label msg use for show msg-->

                       <label id="lblmsg"></label>

                        <!-- label msg use for show msg-->



						<input type="submit" name="submit"  value="Submit" class="login100-form-btn">

                        <!--end  this all button and msg use for api-->
					</div>

					
				</form>
			</div>
		</div>
	</div>



	<!-- start code for api registration-->



<?php 

//$a2rTokenKey='a2rhos1234';
  // $api_name='regcoded.php';

    $api_name=$ApiUrlEcommerce.'/userAuthenticationApi.php?a2rTokenKey='.$a2rTokenKey.'&action=registration';
?>

<script src="../a2rAjax/login/js/jquery.js">
  

</script>


<script >
  
  var $api_url='<?php echo $api_name;  ?>';

  //alert(api_url);
</script>



<script src="../a2rAjax/login/js/formApiUpload.js" >

  

</script>





<!-- start code for api registration-->


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6669e035b9d6dc7d","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
</body>


</html>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&family=Josefin+Sans:wght@700&family=Pacifico&display=swap" rel="stylesheet">
<style type="text/css">
	body{
		font-family: 'Hina Mincho', serif;
font-family: 'Josefin Sans', sans-serif;
font-family: 'Pacifico', cursive;
	}
	
hr.style-one {
border: 0;
height: 1px;
width: 30%;
background: #333;
background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc);
background-image: -moz-linear-gradient(left, #ccc, #333, #ccc);
background-image: -ms-linear-gradient(left, #ccc, #333, #ccc);
background-image: -o-linear-gradient(left, #ccc, #333, #ccc);
 
background: #095484;
background-image: linear-gradient(to right, #ccc, #095484, #ccc);
}


 /* Gradient color1 - color2 - color1 */
hr {
    border: none;
    border-top: 3px double #0088cc;
    color:#0088cc;
    overflow: visible;
    text-align: center;
    height: 5px;
    width: 100%;
    position: relative;
    bottom: 2.5rem;
}





hr:after {
    background: #fff;
    content: '§';
    padding: 0 4px;
    position: relative;
    top: -16px;
    color: #0088cc;
    font-size: 22px;
    font-family: 'Pacifico', cursive;
}

</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


<style type="text/css">
.p-t-170 {
	padding-top: 50px
}
.form-horizontal{
    background: #fff;
    padding-bottom: 40px;
    border-radius: 15px;
    text-align: center;
}
.form-horizontal .heading{
    display: block;
    font-size: 35px;
    font-weight: 700;
    padding: 35px 0;
    border-bottom: 1px solid #f0f0f0;
    margin-bottom: 30px;
}
.form-horizontal .form-group{
    padding: 0 40px;
    margin: 0 0 25px 0;
    position: relative;
}
.form-horizontal .form-control{
    background: #f0f0f0;
    border: none;
    border-radius: 20px;
    box-shadow: none;
    padding: 0 20px 0 45px;
    height: 40px;
    transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
    background: #e0e0e0;
    box-shadow: none;
    outline: 0 none;
}
.form-horizontal .form-group1 i{
    position: absolute;
    top: 12px;
    left: 20px;
    font-size: 17px;
    color: #0088cc;
    transition : all 0.5s ease 0s;
}
.form-horizontal .form-control:focus + i{
    color: #0088cc;
}
.form-horizontal .fa-question-circle{
    display: inline-block;
    position: absolute;
    top: 12px;
    right: 60px;
    font-size: 20px;
    color: #808080;
    transition: all 0.5s ease 0s;
}
.form-horizontal .fa-question-circle:hover{
    color: #000;
}
.form-horizontal .main-checkbox{
    float: left;
    width: 20px;
    height: 20px;
    background: #11a3fc;
    border-radius: 50%;
    position: relative;
    margin: 5px 0 0 5px;
    border: 1px solid #11a3fc;
}
.form-horizontal .main-checkbox label{
    width: 20px;
    height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
}
.form-horizontal .main-checkbox label:after{
    content: "";
    width: 10px;
    height: 5px;
    position: absolute;
    top: 5px;
    left: 4px;
    border: 3px solid #fff;
    border-top: none;
    border-right: none;
    background: transparent;
    opacity: 0;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
.form-horizontal .main-checkbox input[type=checkbox]{
    visibility: hidden;
}
.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
    opacity: 1;
}
.form-horizontal .text{
    float: left;
    margin-left: 7px;
    line-height: 20px;
    padding-top: 5px;
    text-transform: capitalize;
}
.form-horizontal .btn{
    float: right;
    font-size: 14px;
    color: #fff;
    background: #00b4ef;
    border-radius: 30px;
    padding: 10px 25px;
    border: none;
    text-transform: capitalize;
    transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 479px){
    .form-horizontal .form-group{
        padding: 0 25px;
    }
    .form-horizontal .form-group1 i{
        left: 20px;
    }
    .form-horizontal .btn{
        padding: 10px 20px;
    }
}
</style>