//alert($api_url);


/****** sending data to *******/

let productList_Global_Array = [];
let myCartArray = [];
let alreadyStoredArray = [];
let baseUrl="";
let api_url="";//for sending data to server when user is logged in


let itemList = [];//for searching


window.onload = function () {

  baseUrl=document.getElementById('baseUrl').value;//getting base url
//alert(baseUrl);
  api_url=document.getElementById('api_url').value;
  //alert(api_url);
  alreadyStoredArray = JSON.parse(localStorage.getItem("MyCartdata")) || [];//getting data from localstorage on first page reload
  console.log(alreadyStoredArray);

  document.querySelector(".cartCounter").innerHTML = alreadyStoredArray.length;//showing total product in the cart
  document.querySelector(".myCartLink").setAttribute("href", `${baseUrl}a2rCart/myCart_LocalStorage.php`);//changing cart page link

  //showing and hiding Buttons
  document.getElementById('btn_submit').style.display = 'block';//
  document.getElementById('btn_uploading').style.display = 'none';
  document.getElementById('btn_uploaded').style.display = 'none';

  /*******regform button click event* start*****/
  document.getElementById('regform').addEventListener('submit', function (e) {

    e.preventDefault();
    console.log(e.target);



 alreadyStoredArray = JSON.parse(localStorage.getItem("MyCartdata")) || [];//getting data from localstorage 


    document.getElementById('btn_submit').style.display = 'none';
    document.getElementById('btn_uploading').style.display = 'block';
    document.getElementById('btn_uploaded').style.display = 'none';


    const form = document.getElementById('regform');//getting form element
    console.log(form);

    const formData = new FormData(form);
    let cartProductObject = Object.fromEntries(formData);//getting object data on clicking Add to Cart Button
    console.log(cartProductObject);



    let uid = document.getElementById('uid').value;//we use this to check if a user is loggin in
    if (uid.length > 0) {//send data to server here in future

//alert("big");

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
    
   let key="";
   if(b[i]=="productId"){
    key="plistId";
   }
   else{
    key=b[i];
   }

    serializedData=`${serializedData}${key}=${c[i]}&`;
}

console.log(serializedData);
    let   dataToSend =serializedData.slice(0,-1);
    console.log(dataToSend);
    console.log(api_url);
fetch(api_url,{
  method:'POST',
  body:dataToSend,
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
  }

}).then(res => res.json())
.then(data=>{console.log(data);

if(data.status=="true"){
   
console.log("data sent");
//localStorage.clear();
//window.location=baseUrl+"a2rCart/order_list.php";


}

})
.catch(err=>console.log(err));


  


    }//send data to server end********8



  cartProductObject_Keys=Object.keys(cartProductObject);
  console.log(cartProductObject_Keys);
  cartProductObject_Values=Object.values(cartProductObject);
  console.log(cartProductObject_Values);


let cartObject={};//for making new object
let cartArray=[];
for(let i=0;i<cartProductObject_Keys.length;i++){
    cartObject[cartProductObject_Keys[i]]=cartProductObject_Values[i];
}
  cartArray.push(cartObject);
 cartArray[0]['price']=cartArray[0]['price'].replace(/[^0-9]/g, '');//removing strings from digits if it has any
cartArray[0]['total']=parseFloat(cartArray[0]['price'])*parseFloat(cartArray[0]['quantity']);


  console.log(cartArray);

myCartArray=cartArray;



/*    let price = cartProductObject.price.replace(/[^0-9]/g, '');
    //plistId changed to productId
    myCartArray.push({
      productId: cartProductObject.productId,
      plistPriceId: cartProductObject.plistPriceId,
      plistVariantId: cartProductObject.plistPriceId,
      price: price,
      productName: cartProductObject.productName,
      productUniq: cartProductObject.productId,
      quantity: cartProductObject.quantity,
      sid: cartProductObject.sid,
      uid: cartProductObject.uid,
      total: parseFloat(price) * parseFloat(cartProductObject.quantity),
      pImgImg: cartProductObject.pImgImg
    });
    console.log(myCartArray);
*/

   // alreadyStoredArray = JSON.parse(localStorage.getItem("MyCartdata")) || [];//getting data from localstorage on first page reload
    console.log("alreadyStoredArray");
    console.log(alreadyStoredArray);



    if (alreadyStoredArray.length == 0) {
      console.log("empty");
      localStorage.setItem("MyCartdata", JSON.stringify(myCartArray));

      document.querySelector(".cartCounter").innerHTML = myCartArray.length;//showing total product in the cart


    }
    else {
      localStorage.removeItem("MyCartdata");
      console.log("removed");

      let newCartArray = [];

      console.log(cartProductObject);
      let filteredArray = alreadyStoredArray.filter((e) => {
        return e.productId != cartProductObject.productId;//previously plistId was used
      });
      console.log(filteredArray);
   
        newCartArray = [...filteredArray, ...myCartArray];//updated cart array
        console.log(newCartArray);
      



      localStorage.setItem("MyCartdata", JSON.stringify(newCartArray));
      console.log("success");


      document.querySelector(".cartCounter").innerHTML = newCartArray.length;//showing total product in the cart
      
      //alreadyStoredArray=JSON.parse(localStorage.getItem("MyCartdata")) || [];//updating alreadyStoredArray
         alreadyStoredArray=[];
    }

      
    myCartArray = [];//resetting myCartArray

    setTimeout(function () {
      document.getElementById('btn_submit').style.display = 'block';
        document.getElementById('btn_submit').value = 'Added to Cart';
      document.getElementById('btn_uploading').style.display = 'none';
      document.getElementById('btn_uploaded').style.display = 'none';
    }, 1000);


  });/*******regform button click event* end*****/







}

