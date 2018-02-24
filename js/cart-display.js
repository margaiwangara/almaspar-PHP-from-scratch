$(document).ready(function()
{
    //display this to cart on page load
    display_load();

    $("#add-to-cart").on('click',function(e)
    {
        alert("I am a cart appender");
        user_id = $("#user_id").val();
        if(user_id != false)
        {
            $.ajax({
                url:'../almas-parlour/behind-scenes/cart-append.php',
                type:'GET',
                dataType:'html',
                data:{'user_id':user_id},

                success:function(data)
                {
                    $('.item-count').html(data);
                },
                error:function(xhr, ajaxOptions, thrownError)
                {
                    alert(xhr.status);
                }
            });
        }

    });
    function display_load()
    {
        user_id = $("#user_id").val();

        if(user_id != false)
        {
            $.ajax({
                url:'/almas-parlour/behind-scenes/cart-display.php',
                dataType:'html',
                data:{'user_id':user_id},

                success:function(data)
                {
                    //alert(data);
                    $('.item-count').html(data);
                },
                error:function(xhr, ajaxOptions, thrownError)
                {
                    alert(xhr.status);
                }
            });
        }
    }
});