$(document).ready(function()
{
    //get_favs();

   $("#fav-button").on('click',function (e)
   {
       e.preventDefault();

       item_id = $("#fav_item_id").val();

       if(item_id != false)
       {
           $.ajax({
               url:'/../almas-parlour/behind-scenes/favs-process.php',
               type:'POST',
               dataType:'json',
               data:{'fav_item_id':item_id},

               success: function(data)
               {
                   var result = data.fav_sd;
                   var result2 = data.identifier;

                   $(".snackbar").html(result).fadeIn().fadeOut(3000);
               },
               error:function(xhr, ajaxOptions, thrownError)
               {
                   alert(xhr.status);
               }

           })
       }
   });

});