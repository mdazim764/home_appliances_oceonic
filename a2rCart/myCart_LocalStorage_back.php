
<?php
error_reporting(0);

include('../a2rColor/colorA2R.php');     // for use color

include('../A2Rinclude/top-header.php');     // for use top-header

include('../A2Rinclude/root_1_folder.php');   // root 1 folder for include other folder
//echo $userId_a2r;
//echo $sid_a2r;

//$addAddressApiUrl=$ApiUrlEcommerce."addressApi.php?a2rTokenKey=".$a2rTokenKey."&uid=".$userId_a2r."&action=showaddress";
//Customer_address_ecommerce
$addAddressApiUrl=$ApiUrlEcommerce."addressApi.php?a2rTokenKey=".$a2rTokenKey."&uid=";

$dataSendUrl=$ApiUrlEcommerce."orderBillingSoftwareEcommerceApi.php";


$addToCartApiUrl=$ApiUrlEcommerce."addToCartApi.php?a2rTokenKey=".$a2rTokenKey."&action=addToCartList&uid=".$userId_a2r;


 $Order_api='https://a2rstore.in/oceonicApi/ecommerce/v1/api/orderApi.php?a2rTokenKey=restro12demo&uid='.$userId_a2r.'&action=saveOrder';
   

?>

<html lang="en">
  <head>

    <title>My Cart ||  <?php echo $domainTitleShow; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

  <style type="text/css">
    body{
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
}
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}




/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



  </style>
</head>
<body>

<input type="text" id="apiUrl" value="<?php echo $ApiUrlEcommerce;?>" hidden>
<input type="text" id="tokenKey" value="<?php echo $a2rTokenKey;?>" hidden>
<input type="text" id="uid" value="<?php echo $userId_a2r;?>" hidden>
<input type="text" id="sid" value="<?php echo $sid_a2r;?>" hidden>

<input type="text" id="addressApiurl" value="<?php echo $addAddressApiUrl;?>" hidden>
<input type="text" id="orderApiurl" value="<?php echo $Order_api;?>" hidden>
<input type="text" id="dataSendUrl" value="<?php echo $dataSendUrl;?>" hidden>
<input type="text" id="baseUrl" value="<?php echo $baseUrl; ?>" hidden>

<!-------------nav --------------------->




<!-------------nav ---end------------------>




















<style type="text/css">
    h1 {
    text-align: center;
}
h2 {
    margin: 0;
}
#multi-step-form-container {
    margin-top: 5rem;
}
.text-center {
    text-align: center;
}
.mx-auto {
    margin-left: auto;
    margin-right: auto;
}
.pl-0 {
    padding-left: 0;
}
.button {
    padding: 0.7rem 1.5rem;
    border: 1px solid #4361ee;
    background-color: #4361ee;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}
.submit-btn {
    border: 1px solid #0e9594;
    background-color: #0e9594;
}
.mt-3 {
    margin-top: 2rem;
}
.d-none {
    display: none;
}
.form-step {
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    padding: 3rem;
}
.font-normal {
    font-weight: normal;
}
ul.form-stepper {
    counter-reset: section;
    margin-bottom: 3rem;
}
ul.form-stepper .form-stepper-circle {
    position: relative;
}
ul.form-stepper .form-stepper-circle span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
}
.form-stepper-horizontal {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
ul.form-stepper > li:not(:last-of-type) {
    margin-bottom: 0.625rem;
    -webkit-transition: margin-bottom 0.4s;
    -o-transition: margin-bottom 0.4s;
    transition: margin-bottom 0.4s;
}
.form-stepper-horizontal > li:not(:last-of-type) {
    margin-bottom: 0 !important;
}
.form-stepper-horizontal li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: start;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}
.form-stepper-horizontal li:not(:last-child):after {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: 1px;
    content: "";
    top: 32%;
}
.form-stepper-horizontal li:after {
    background-color: #dee2e6;
}
.form-stepper-horizontal li.form-stepper-completed:after {
    background-color: #4da3ff;
}
.form-stepper-horizontal li:last-child {
    flex: unset;
}
ul.form-stepper li a .form-stepper-circle {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right: 0;
    line-height: 1.7rem;
    text-align: center;
    background: rgba(0, 0, 0, 0.38);
    border-radius: 50%;
}
.form-stepper .form-stepper-active .form-stepper-circle {
    background-color: #4361ee !important;
    color: #fff;
}
.form-stepper .form-stepper-active .label {
    color: #4361ee !important;
}
.form-stepper .form-stepper-active .form-stepper-circle:hover {
    background-color: #4361ee !important;
    color: #fff !important;
}
.form-stepper .form-stepper-unfinished .form-stepper-circle {
    background-color: #f8f7ff;
}
.form-stepper .form-stepper-completed .form-stepper-circle {
    background-color: #0e9594 !important;
    color: #fff;
}
.form-stepper .form-stepper-completed .label {
    color: #0e9594 !important;
}
.form-stepper .form-stepper-completed .form-stepper-circle:hover {
    background-color: #0e9594 !important;
    color: #fff !important;
}
.form-stepper .form-stepper-active span.text-muted {
    color: #fff !important;
}
.form-stepper .form-stepper-completed span.text-muted {
    color: #fff !important;
}
.form-stepper .label {
    font-size: 1rem;
    margin-top: 0.5rem;
}
.form-stepper a {
    cursor: default;
}
</style>









  <div class="card" id="tran">

<!----this is used for form step---->

<div>
    
    <div id="multi-step-form-container">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
            <!-- Step 1 -->
            <!--add form-stepper-completed to below class-->
            <li class="form-stepper-active text-center form-stepper-list " step="1">
                <a class="mx-2" step="1" onclick="goBack('1')">
                    <span class="form-stepper-circle">
                        <span>1</span>
                    </span>
                    <div class="label">Cart</div>
                </a>
            </li>
            <!-- Step 2 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                <a class="mx-2" step="2" onclick="goBack('2')">
                    <span class="form-stepper-circle text-muted">
                        <span>2</span>
                    </span>
                    <div class="label text-muted">Address</div>
                </a>
            </li>
            <!-- Step 3 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                <a class="mx-2" step="3" onclick="goBack('3')">
                    <span class="form-stepper-circle text-muted">
                        <span>3</span>
                    </span>
                    <div class="label text-muted">Payment</div>
                </a>
            </li>
        </ul>
        <!-- Step Wise Form Content -->
       
    </div>
</div>


<!----this is used for form step-end***--->




























            <div class="row">
                <div class="col-md-8 cart" id="mainDiv" style="" step="1">
                    <div class="title" id="after" >
                        <div class="row" >
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted" id="totalItems1">0 items</div>
                        </div>
                    </div>    



       


      <!------Div which going to modify using Javascript- will be pushed here--Start-------->              
                    


<!------------
 <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Shirt</div>
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
    -------->

     <!------Div which going to modify using Javascript---End-------->
                   
                    <div class="back-to-shop"><a href="../index.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
                </div>



<!----------customer address---------->

     <div class=" col-md-8 cart" id="customerInfo" step="2">
                
                        <div class="row" >
                          
                           <div class="form-container ">
                    <h3 class="title" style="">Add Address </h3>
                    <form enctype="multipart/form-data" id="regform" class="form-horizontal" style="display: flex;
    /* display: flex; */
    /* flex-wrap: wrap; */
    width: 101%;
    flex-wrap: wrap;
    gap: 3px;">


                        <span id="msg"></span>
                        <input type="hidden" name="action" value="addAddress">


                        <input type="hidden" name="uid" id="userId" value="<?php echo $userId_a2r;?>">
                        <input type="hidden" name="orderId" id="orderId" value="">


                        <div class="form-group">
                            <label>Contact Person Name <span style="color:red">*</span>  </label>
                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Contact Person Name" value="" onkeyup="setValue(this)" required>
                        </div>

                        <div class="form-group">
                            <label>Mobile Number <span style="color:red">*</span></label>
                            <input type="number" id="mobile_no" name="mobile_no" class="form-control" placeholder="Phone Number" value="" onkeyup="setValue(this)" required>
                        </div>


                        <div class="form-group">
                            <label>Flat,Floor,Building Name <span style="color:red">*</span></label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Flat,Floor,Building Name" value="" onkeyup="setValue(this)" required>
                        </div>

                         <div class="form-group">
                            <label>Landmark <span style="color:red">*</span></label>
                            <input type="text" id="landmark" name="landmark" class="form-control" placeholder="Landmark" value="" onkeyup="setValue(this)" required>
                        </div>






                         <div class="form-group">
                            <label>Pincode <span style="color:red">*</span></label>
                            <input type="number" id="pincode" name="pincode" class="form-control" placeholder="Pincode" value="" onkeyup="setValue(this)" required>
                        </div>


                         <div class="form-group">
                            <label>City <span style="color:red">*</span></label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City" value="" onkeyup="setValue(this)" required>
                        </div>



                        <div class="form-group">
                            <label>State <span style="color:red">*</span></label>
                            <input type="text" id="state" name="state" class="form-control" placeholder="State" value="" onkeyup="setValue(this)" required>
                        </div>

                         <div class="form-group">
                            <label>Country </label>
                            <input type="text" id="country" name="country" value="india" class="form-control" placeholder="India" onkeyup="setValue(this)" required>
                        
                            
                        </div>


                           
                        
                  <!---      <div class="form-group">

                             <!-<label  class="lblmsg">msg</label>
                          <input class="btn signup" type="submit" name="submit" id="btn_submit" value="upload" style=" border:1px solid #ccc; color:black;">



                         
                          <input class="btn signup" type="button" name="submit" id="btn_uploading" value="uploading..........." style="border: 1px solid rgb(204, 204, 204); color: black; display: none;">




                     <buttion class="btn signup" type="button" name="submit" id="btn_uploaded" value="uploaded" style="border: 1px solid rgb(204, 204, 204); color: black; display: none;">

                            
                          uploaded
                               
                            
                          

                        </buttion>-



                        </div>  
--->
                      


                      </form>
                  </div>
                        </div>
                    </div>   


<!----------customer address--end-------->




<!-------------payment type--------------->








                <div class="col-md-8 cart" id="" style="" step="3">
                    <div class="title" id="" >
                        <div class="row" style="display:contents;">
                            <div class="col"><h4><b>Cash On Delivery</b></h4></div>
                           <div class="col">
                           <div class="form-check">
  <input class="form-check-input" type="radio" name="" id="codRadio" style="    width: 41%;">
  <label class="form-check-label" for="flexRadioDefault1">
   COD
  </label>
</div></label></div>
                        </div>
                    </div>    


                    <div class="back-to-shop"><a href="../index.php">&leftarrow;<span class="text-muted"></span></a></div>
                </div>











<!---------------payment type end------------>

























                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;" id="totalItems2">ITEMS 3</div>
                        <div class="col text-right" id="totalPrice1">&euro; 132.00</div>
                    </div>
                 <!--   <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>-->
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right" id="totalPrice2">&euro; 137.00</div>
                    </div>
                 <!----   <button class="btn" id="addToCart">CONFIRM ORDER</button>--->
                 <button class="btn" id="confirmOrder" onclick="nextStep()">CONFIRM ORDER</button>
                   <button class="btn " id="addToCart" onclick="placeOrder()" style="display: none;" disabled>PLACE ORDER</button>
                </div>
            </div>
            
        </div>



<!-------Modal opens on Successfully Added to cart----Start----->

<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="color: #1c1cc4ed;font-size: 20px;text-align: center;" id="modalText">Successfully Added to Cart</p>
  </div>

</div>


<!-------Modal opens on Successfully Added to cart----End----->


       

  

    <script src="<?php echo $baseUrl; ?>a2rCart/shoppingCart.js" type="text/javascript"></script>
  </body>
</html>







   


    







