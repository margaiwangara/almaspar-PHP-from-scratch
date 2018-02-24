$(document).ready(function()
{
   $(".solo-delete").on('click',function(e)
   {
       e.preventDefault();

       var item_id = e.target.id;

       $.ajax({
           url:"/../almas-parlour/admin/back-end/product-delete-solo.php",
           type:"POST",
           dataType:"html",
           data:{'prod_id':item_id},

           success:function(data)
           {
               $(".snackbar").html(data).fadeIn().fadeOut(3000);
           },
           error:function(xhr, ajaxOptions, thrownError)
           {
               alert(xhr.status);
           }
       })
   })

});