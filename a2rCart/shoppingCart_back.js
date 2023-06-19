
//https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/addToCartApi.php?a2rTokenKey=a2rjmk123&action=addToCartList&uid=63660898c708a996213 --->To see data

let step=1;//making step count for progress bar

let addAddressApiUrl=document.getElementById('addressApiurl').value;
let api_url=document.getElementById("apiUrl").value;
let a2rTokenKey=document.getElementById("tokenKey").value;
let uid=document.getElementById("uid").value;
let sid=document.getElementById("sid").value;
let orderApiurl=document.getElementById('orderApiurl').value;
let baseUrl="";
//alert(orderApiurl);

productArray=[];//product array from api

let add2Cart_url = api_url+"addToCartBulkApi.php?a2rTokenKey="+a2rTokenKey+"&action=addToCart&uid=";
console.log(add2Cart_url);
 baseUrl=document.getElementById('baseUrl').value;//getting base url
//alert(baseUrl);
let cart_Product_Array_Original=[];//user's cart items array

let a2rCart_Product_Array=[];//to send this array to server





//let $api_url="https://a2rstore.in/oceonicApi/ecommerce/v1/api//addToCartApi.php?a2rTokenKey=a2rwin12iv&action=addToCart&uid=";



/*1111--------------On page Load---Start------*/
window.onload = function(){

cart_Product_Array_Original=JSON.parse(localStorage.getItem("MyCartdata")) || [];//getting data from localstorage
   console.log(cart_Product_Array_Original);

productArray=JSON.parse(localStorage.getItem("productList")) || [];//getting  api product data from localstorage
   console.log(productArray);


//console.log("jjj");
console.log(document.getElementById('codRadio'));
//open Confirm Order Button when  COD is selcted
document.getElementById('codRadio').addEventListener('click',function(e){
  console.log(e.target.checked);
  document.querySelector('#addToCart').disabled =false;//opening the Confirm Order Button
});



show_cart_Product_Array_Original_on_Page();

Hide_OR_Show_Div_and_FormStep(step);//showing on first div

//get_a2rCart_Product_Array();



}

/*1111--------------On page Load---End------*/


/*2222-----------Showing data on Page------Start---*/

function show_cart_Product_Array_Original_on_Page(){
let productUniq="";
let ShowArray_With_Img=[];//filtered array from api product list to show on cart page
ShowArray_With_Img=JSON.parse(JSON.stringify(cart_Product_Array_Original));//for deep copy of original array

for(let i=0;i<cart_Product_Array_Original.length;i++){

     productUniq=cart_Product_Array_Original[i]['productUniq'];
    let findObject=productArray.find((e)=>{
        return e.productUniq==productUniq;
    });
   
   let findObject_Cart=ShowArray_With_Img.find((e)=>{
        return e.productUniq==productUniq;
    });
   //findObject_Cart.pImgImg= findObject.pImgImg;
  // findObject_Cart.pcatName=findObject.pcatName;

   console.log(ShowArray_With_Img);
   console.log(cart_Product_Array_Original);
}



//Making Div with Cart Product Array------Start
let myDiv=ShowArray_With_Img.map((product,index)=>`
           <div class="row border-top border-bottom" id="delDiv-${product.productUniq}">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="${product.pImgImg}" loading="lazy"></div>
                            <div class="col">
                                <div class="row text-muted"></div>
                                <div class="row">${product.productName}</div>
                            </div>
                            <div class="col">
                                <a  style="font-size: 1.01rem;cursor:pointer" onclick="decrease('${product.productUniq}')">-</a><a  class="border" id="${product.productUniq}">${product.quantity}</a><a  onclick="increase('${product.productUniq}')" style="cursor:pointer">+</a>
                            </div>
                            <div class="col" id="total-${product.productUniq}">  ${product.total}</div>
                            <span class="close" style="cursor:pointer" onclick="onDelete('${product.productUniq}')">&#10005;</span>
                        </div>
                    </div>
    `);

//Making Div with Cart Product Array------End

document.querySelector("#after").insertAdjacentHTML('afterend',myDiv);
//$("#after").after(myDiv);

//let a="<p>Hello World</p>"//checking ,not important 
//$( "#after" ).after( a );//checking  ,not important 
updateCartPAge(productUniq); 




}

/*2222-----------Showing data on Page------End---*/


/*3333-----------Getting a2rCart Product Array for calculation--Start---*/

/*function get_a2rCart_Product_Array(){
 
           cart_Product_Array_Original.map((product)=>{

            a2rCart_Product_Array.push({
                productUniq : product.productUniq,
                productId    : product.productUniq,
                plistVariantId:product.plistPriceUniq,
                plistPriceId:product.plistPriceUniq,
                productName : product.productName,
                uid         :uid,
                sid         :sid,
                quantity    : 1,
                price       :product.priceAfterOfferNum,
                total       :product.priceAfterOfferNum
            });

           });

           console.log(a2rCart_Product_Array);
           updateCartPAge();
         
}*/

/*3333-----------Getting a2rCart Product Array for calculation--End---*/




/*4444-------Increase Quantity Function---------Start--------*/


function increase(productId){
   
   console.log(cart_Product_Array_Original);
   let productUniqId=productId;
   let search = cart_Product_Array_Original.find((x)=> x.productUniq===productUniqId);
   console.log(search);  
    
    search.quantity =parseInt(search.quantity)+1;//increasing & updating quantity

    search.total=parseInt(search.quantity)*parseFloat(search.price);//updating total

updateCartPAge(productUniqId);   

console.log(search);
console.log(cart_Product_Array_Original);
}


/*4444-------Increase Quantity Function---------End--------*/


/*5555-------Decrease Quantity Function---------Start--------*/
function decrease(productId){
    let productUniqId = productId;
//  console.log(productUniqId);

   let search = cart_Product_Array_Original.find((x)=> x.productUniq===productUniqId);
   //console.log(search); 
if(search.quantity===1){
    return;
}
else{
    search.quantity -=1;
    search.total =search.quantity*search.price;
}
console.log(search);
updateCartPAge(productUniqId); 

}


/*5555-------Decrease Quantity Function---------End--------*/





 

/*6666-------Updating Html Page---------Start--------*/
function updateCartPAge(productUniqId){

if (typeof(productUniqId) == "undefined"){

}
else{
    let search = cart_Product_Array_Original.find((x)=> x.productUniq===productUniqId);


    document.getElementById(productUniqId).innerHTML=search.quantity;//showing updated quantity on cart page

   document.getElementById(`total-${productUniqId}`).innerHTML=search.total+"Rs";//showing updated total price
}
 
localStorage.setItem("MyCartdata",JSON.stringify(cart_Product_Array_Original));


//calculating total price
let totalPrice=0;
cart_Product_Array_Original.map((e)=>{
totalPrice+= parseFloat(e.total); 
});

document.getElementById("totalPrice1").innerHTML=totalPrice+"Rs.";
document.getElementById("totalPrice2").innerHTML=totalPrice+"Rs.";
console.log(a2rCart_Product_Array);
console.log(cart_Product_Array_Original);


let totalItems=cart_Product_Array_Original.length;
console.log(totalItems);

document.getElementById("totalItems1").innerHTML= totalItems+" Items"  ;
document.getElementById("totalItems2").innerHTML= totalItems+" Items"  ;
}
/*6666-------Updating Html Page---------End--------*/




/*7777-------Sending Cart Data to add2cart APi---id="#addToCart------Start--------*/

let addtoCart =document.getElementById('addToCart');

addtoCart.addEventListener("click",function(e){
  //  console.log(e.target);

 //  console.log(JSON.stringify(a2rCart_Product_Array));



console.log("log");
console.log(cart_Product_Array_Original);

let quantity=0;
let totalAmount=0;
 
//now we calculate totalData
for(let i=0;i<cart_Product_Array_Original.length;i++){
console.log(cart_Product_Array_Original[i]);
    quantity=parseInt(quantity)+parseInt(cart_Product_Array_Original[i]['quantity']);
    totalAmount=parseInt(totalAmount)+parseInt(cart_Product_Array_Original[i]['total']);
}

console.log(quantity);
console.log(totalAmount);



let allTotalDataArray=[];//we are storing total data in this array


var allTotalData = {}; // object

allTotalData["subTotal"] = totalAmount;
allTotalData["totalQuantity"] = quantity;
  allTotalData["TotalGstAmount"] = "";
 allTotalData["gstType"] =  "";
 allTotalData["ServiceTax"] = "";
 allTotalData["serviceTaxAmount"] = "";
 allTotalData["serviceTaxPercent"] =  "";
  allTotalData["TotalDiscount"] =  "";
  allTotalData["discountPercent"] =  "";
  allTotalData["totalAmount"] = totalAmount;
  allTotalData["PaymentMode"] = "";
 allTotalData["TotalPaid"] =  "";
 allTotalData["Remaining Amount"] = "";
 allTotalData["action"] =  "";
 allTotalData["restaurantOrderType"] =  "";
 allTotalData["customerFrom"] =  "";
 allTotalData["tableNo"] =  "";
 allTotalData["orderId"] =  "";
 allTotalData["steward"] =  "";
 allTotalData["staffId"] =  "";
 allTotalData["taxPercent"] =  "";
 allTotalData["taxAmount"] =  "";
 allTotalDataArray.push(allTotalData);

 console.log(allTotalDataArray);


var allTotalDataSend = JSON.stringify(allTotalDataArray);//allTotalDataSend we are sending to server












let data=JSON.stringify(cart_Product_Array_Original);
console.log(data);


//sendAddressData();//send address Data to addressApi


/*
let he=[{"productUniq":"619779485d9f7","plistId":"619779485d9f7","plistVariantId":"6197841ab095f","plistPriceId":"6197841ab095f","productName":"Book-1 Computer Fundamental","uid":"63621b7acddec5","sid":"63621b7acddec","quantity":1,"price":"350","total":"350"},{"productUniq":"61498ea8d83b1","plistId":"61498ea8d83b1","plistVariantId":"614b09d9a1c51","plistPriceId":"614b09d9a1c51","productName":"bag pro4","uid":"63621b7acddec5","sid":"63621b7acddec","quantity":1,"price":"258","total":"258"},{"productUniq":"61498e7496c78","plistId":"61498e7496c78","plistVariantId":"614b09f78a314","plistPriceId":"614b09f78a314","productName":"bag pro3","uid":"63621b7acddec5","sid":"63621b7acddec","quantity":1,"price":"43","total":"43"}];
console.log(he);
let hh=JSON.stringify(he);*/


//orderApiurl  placing direct order 
//add2Cart_url we used this for bulk add product to server


// orderBillingSoftwareEcommerceApi.php

let userDataArray=[];






var userData = {};
userData["orderId"] = "";

if(uid.length>0){
    userData["custId"] = uid;
}
else{
    userData["custId"] = "";
}


userData["name"] = document.getElementById('user_name').value;
userData["phone"] = document.getElementById('mobile_no').value;

userData["address"] = document.getElementById('address').value;
userData["landmark"] = document.getElementById('landmark').value;
userData["pincode"] = document.getElementById('pincode').value;
userData["city "] = document.getElementById('city').value;
userData["state"] = document.getElementById('state').value;

 userData["country "] = document.getElementById('country').value;
 

 userDataArray.push(userData);

let sendUserdata=JSON.stringify(userDataArray);
console.log(sendUserdata);



let dataSendUrl=document.getElementById('dataSendUrl').value;

//data   is the productArray we are sending
let sendDataUrl=dataSendUrl+"?productList="+data+"&totalValue="+allTotalDataSend+"&userdata="+sendUserdata+"&action=saveOrder&a2rTokenKey="+a2rTokenKey;
console.log(sendDataUrl);

fetch(sendDataUrl).then((res)=>res.json()).then((data)=>{
    console.log(data);
    
    sendAddressData(data.orderUid,data.userId)


}).catch((err)=>console.log(err));

/*fetch(orderApiurl,{
  method:'post',
  body:data

}).then(res => res.json())
.then(data=>{console.log(data);

if(data.status=="true"){
   




localStorage.clear();
openModal();
const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
  // window.location="my_cart.php";
}

  




}

})
.catch(err=>console.log(err));
*/


})


/*7777-------Sending Cart Data to add2cart APi---------End--------*/



/*8888-----------Delete Product from cart---------Start-----------*/
function onDelete(productId){
    let productIdUniq=productId;
     
     let filteredProductArray=a2rCart_Product_Array.filter((e)=>{
        return e.productUniq!=productIdUniq;
     });
console.log(filteredProductArray);

a2rCart_Product_Array=filteredProductArray;//Updating a2rCart_Product_Array



//Updating localstorage Start

let filteredOriginalProductArray  =cart_Product_Array_Original.filter((e)=>{
        return e.productUniq!=productIdUniq;
     });
//console.log(filteredOriginalProductArray);

cart_Product_Array_Original=filteredOriginalProductArray;//Updating original array

console.log(cart_Product_Array_Original);

localStorage.setItem("Cartdata", JSON.stringify(cart_Product_Array_Original));

//Updating localstorage End


deleteDiv(productIdUniq);//to delete the row (Div) of the deleted item



}

/*8888-----------Delete Product from cart---------End-----------*/


/*9999-----------Delete Div---------start-----------*/
function deleteDiv(productId){

   document.getElementById(`delDiv-${productId}`).remove();

updateCartPAge();//updating cartPage
}

/*9999-----------Delete Div---------End-----------*/






// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function openModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




//for counting nextStep

function nextStep(){
     
  if(step==3){
     showDetail(step);//sending value of step to showDetail function
  }
  else{
    if(step==2){
        // getFormData();//for future Use  --getting form data and storing it into localstorage
    }
    step++;
    showDetail(step);//sending value of step tp showDetail function
  } 



}

//for counting nextStep  end


//function to show which div is going to show on page based on value of CountStep
function  showDetail(CountStep){

//        const formStepCircle = document.querySelector('li[step="' + index + '"]');

let li=document.querySelectorAll('[step]');
console.log(li[0]);


    if(CountStep==1){
       Hide_OR_Show_Div_and_FormStep(CountStep);
       document.querySelector('#confirmOrder').style.display ='block';//making Confirm order Button clickable
       document.querySelector('li[step="1"]').classList.add("form-stepper-active");
       document.querySelector('li[step="2"]').classList.remove("form-stepper-active");
       document.querySelector('li[step="3"]').classList.remove("form-stepper-active");
        document.querySelector('#addToCart').style.display ='none';
    }
    else if(CountStep==2){
      Hide_OR_Show_Div_and_FormStep(CountStep);
       document.querySelector('#confirmOrder').style.display ='block';
     
      document.querySelector('li[step="1"]').classList.add("form-stepper-active");
      document.querySelector('li[step="2"]').classList.add("form-stepper-active");
      document.querySelector('li[step="3"]').classList.remove("form-stepper-active");
      document.querySelector('#addToCart').style.display ='none';
    }
    else if(CountStep==3){
      Hide_OR_Show_Div_and_FormStep(CountStep);
      document.querySelector('#confirmOrder').style.display ='none';
      document.querySelector('li[step="1"]').classList.add("form-stepper-active");
      document.querySelector('li[step="2"]').classList.add("form-stepper-active");
      document.querySelector('li[step="3"]').classList.add("form-stepper-active");
      document.querySelector('#addToCart').style.display ='block';
    }
}

//function to show which div is going to show on page based on value of CountStep  end

//Hide_OR_Show_Div_and_FormStep
function   Hide_OR_Show_Div_and_FormStep(CountStep){
//alert(CountStep);
   let  li=document.querySelectorAll('[step]');
console.log(li[0]);

   const formStepCircle = document.querySelector('div[step="' + CountStep + '"]');
console.log(formStepCircle);
//showing div 
for(let i=1;i<=3;i++){

 

   if(i==CountStep){
    document.querySelector('div[step="' + i + '"]').style.display='block';
    document.querySelector('a[step="' +i+ '"]').style.cursor='pointer';//making form step clickable



   }
   else{
    document.querySelector('div[step="' + i + '"]').style.display='none';
     document.querySelector('a[step="' +i+ '"]').style.pointerEvents ='none';//making form step unclickable
    //  console.log("remove");
     //document.querySelector('li[step="' + i + '"]').classList.remove("form-stepper-active");//removig active color in progress bar 

   }

}
//showing div  end
//alert(CountStep);
//showing progress step
for(let j=1;j<=CountStep;j++){
    console.log("add");
  document.querySelector('li[step="' + CountStep + '"]').classList.add("form-stepper-active");
   document.querySelector('a[step="' +j+ '"]').style.pointerEvents ='auto';//making form step clickable for events
}

//showing progress step end

}
//Hide_OR_Show_Div_and_FormStep end








//********************Going back step by step on clicking the form steo buttons  start***
function goBack(backStep){
    console.log(backStep);
    step=backStep;
     showDetail(backStep);
}





















//setting values of input boxes
function setValue(e){
   e.setAttribute('value',e.value);
}

//setting values of input boxes end














//***sending address data to addressApi*******
function sendAddressData(orderId,userId){
//alert(uid);
if(uid.length>0){
   document.getElementById('userId').value=uid;
   addAddressApiUrl=addAddressApiUrl+uid+"&orderId="+orderId+"&action=addAddress";
}
else{
    document.getElementById('userId').value=userId;
    addAddressApiUrl=addAddressApiUrl+userId+"&orderId="+orderId+"&action=addAddress";
}
document.getElementById('orderId').value=orderId;

  //let addressData =$('#regform').serialize();
//console.log(addressData);

 const form =document.querySelector('#regform');
  const formData=new FormData(form);
        console.log(formData);
        console.log(Object.fromEntries(formData));
let a=Object.fromEntries(formData);//storing form data object
let b=Object.keys(a);//storing only keys in array
console.log(b);
let c=Object.values(a);//storing only values in array
console.log(c);

let serializedData="";//serializing data
for(let i=0;i<b.length;i++){
    
    serializedData=`${serializedData}${b[i]}=${c[i]}&`;
}

console.log(serializedData);
    let   addressData =serializedData.slice(0,-1);
    console.log(addressData);

       
console.log(addAddressApiUrl);
//addressData="action=addAddress&uid=64243e0f8db9f&orderId=64243e0f8db7b261740&user_name=bharat&mobile_no=64738389&address=hebeby&landmark=beybey&pincode=63636&city=heyye&state=yeye&country=india";

fetch(addAddressApiUrl,{
  method:'POST',
  body:addressData,
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
  }

}).then(res => res.json())
.then(data=>{console.log(data);

if(data.status=="true"){
   
console.log("address sent");
let user_name=document.getElementById('user_name').value;
let backPageLink=baseUrl+"a2rCart/order_list.php";
localStorage.clear();
window.location=baseUrl+"a2rAjax/login/success_login.php?uid="+data.uid+"&user_name="+user_name+"&backPageLink="+backPageLink;


}

})
.catch(err=>console.log(err));




}

//***sending address data to addressApi****end***






