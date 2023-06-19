

       $('#btn_submit').show();
       $('#btn_uploading').hide();
       $('#btn_uploaded').hide();

  $('#regform').on('submit',function(e){


       $('#btn_submit').hide();
       $('#btn_uploading').show();
       $('#btn_uploaded').hide();
       
//$api_url='regcoded.php';
//var QTY = $("#email").val();

$.ajax({
    url:api_url,
    type:'POST',
    dataType:'json',
    data:$('#regform').serialize(),
    success:function(result){
        $('#regform')[0].reset();
        $('#result').html(result);
        $('#btn_submit').hide();
       $('#btn_uploading').hide();
       $('#btn_uploaded').show();

       //alert("Click To Access");

       if(result.status==true)
       {
        //alert("true");

         var uid=result.uid;
         var sid=result.sid;

         var msg=result.msg;


          var user_name=result.user_name;

          var orderUid=result.orderUid


       


        location.href='order_detail.php?orderId=' + orderUid;

        $('#lblmsg').text(msg);
        $('#btn_submit').hide();
       $('#btn_uploading').hide();
       $('#btn_uploaded').show();
       }
       else if(result.status==false)
       {
        //alert("false");
           var msg=result.msg;
          $('#btn_submit').show();
       $('#btn_uploading').hide();
       $('#btn_uploaded').hide();


       $('#lblmsg').text(msg);
          // alert(msg);

       }
       else{
             var msg='error ';

           alert(msg);

       }

       

       



     // alert("error");

      //$("#addToCartProductNo").text(QTY);
        
    }






});
e.preventDefault();
});


  /*

  $("#regform").on('submit',function(e){
       


        // // jQuery("#btn1").text("Plaese Wait...");
        // // jQuery("#btn1").prop('disabled',true);
        $.ajax({
        url:'https://www.a2rstore.in/oceonicApi/ecommerce/v1/api/orderApi_test.php?a2rTokenKey=a2rhos1234&uid=612c72f32e657253183&action=saveOrder',
        type:'post',
        data:jQuery("#regform").serialize(),
        success:function(result){
        alert(result);

        location.href='../a2rAjax/saveOrder/success_order.php';
        // jQuery("#btn1").text('SIGN IN');
        // jQuery("#btn1").prop('disabled',false);
       
        }
        });
        e.preventDefault();
        });

        */