$(function (){
   $('#button_insert').click(function () {
       var hovaten = $('#hovaten').val();
       var sophone = $('#sophone').val();
       var diachi = $('#diachi').val();
       var email = $('#email').val();
       var ghichu = $('#ghichu').val();

       if (hovaten==''){
           alert("Họ và tên không được bỏ trống");
           $('#hovaten').focus();
       }else if (sophone==''){
           alert("số điện thoại không được bỏ trống");
           $('#sophone').focus();
       }else if (diachi==''){
           alert("địa chỉ không được bỏ trống");
           $('#diachi').focus();
       }else if (email==''){
           alert("Email không được bỏ trống");
           $('#email').focus();
       }else if (ghichu==''){
           alert("ghi chú không được bỏ trống");
           $('#ghichu').focus();
       }else {
           $.ajax({
               url: "ajax_action.php",
               method: "POST",
               data:{hovaten:hovaten,sophone:sophone,diachi:diachi,email:email,ghichu:ghichu},
               success: function (data) {
                       alert("insert thành công");

               }
           });
       }


   });
});