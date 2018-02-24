$(document).ready(function()
{
    //display append
    $("#display_append").on('click',function(e)
    {
        e.preventDefault();

        //get values
        var item_id = $("#item_id").val();
        var quantity = $("#display_quantity").val();
        var price = $("#item_price").val();

        price = quantity * price;

        //ajax code
        $.ajax({
            url:"/../almas-parlour/behind-scenes/cart-append.php",
            type:"POST",
            dataType:"json",
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