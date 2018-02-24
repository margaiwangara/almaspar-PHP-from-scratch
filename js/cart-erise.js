$(document).ready(function()
{

   $("#add-to-cart").on('click',function(e)
   {
       e.preventDefault();

       item_id = $("#item_id").val();
       user_id = $("#user_id").val();
       quantity = $("#item-quantity-id").val();
       price = $("#item_price").val();

       price = quantity*price;

       if(user_id == false)
           alert("You must be logged in to add an item to cart");
       else
       {
           $.ajax({
               url:'../almas-parlour/behind-scenes/cart-append.php',
               type:'GET',
               dataType:'html',
               data:{'user_id':user_id,'item_id':item_id,'quantity':quantity,'price':price},

               success:function (data)
               {
                   //alert("Breakpoint 2")
                   //add items here
                   alert(data);

               },
               error:function(xhr, ajaxOptions, thrownError)
               {
                   alert(xhr.status);
               }
           });
       }

   });
});