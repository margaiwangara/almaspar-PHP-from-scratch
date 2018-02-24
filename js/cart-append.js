$(document).ready(function()
{
   $('.append-cart').on('click',function(e)
   {
       e.preventDefault();

       var total_coll = (e.target.id).split("-");

       //alert("id: "+total_coll[0]+" quant: "+total_coll[1]+" price: "+total_coll[2]);
       //get data
       var quantity = total_coll[1];
       var price = total_coll[2];
       var item_id = total_coll[0];

       price = quantity * price;

       //write ajax code
       $.ajax({
           url: "/../almas-parlour/behind-scenes/cart-append.php",
           type: "POST",
           dataType: "json",
           data:{'item_id':item_id,'quantity':quantity,'price':price},

           success:function(data)
           {
               $(".snackbar").html(data.append_message).fadeIn().fadeOut(3000);
           },
           error:function(xhr, ajaxOptions, thrownError)
           {
               alert(xhr.status);
           }

       });
   });

});