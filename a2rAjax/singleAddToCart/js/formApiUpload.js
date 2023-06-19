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
    url:$api_url,
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

       if(result.status=='true')
       {

         var uid=result.uid;
         var sid=result.sid;

         var msg=result.msg;


          var user_name=result.user_name;

          var totalNoCartProduct=result.totalNoCartProduct;


          $('#totalNoCartProduct').text(totalNoCartProduct);


        //location.href='../a2rAjax/login/success_login.php?uid=' + uid+'&sid=' +sid +'&user_name='+ user_name;

        $('#lblmsg').text(msg);
        $('#btn_submit').show();
       $('#btn_uploading').hide();
       $('#btn_uploaded').hide();
       }
       else if(result.status=='false')
       {
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