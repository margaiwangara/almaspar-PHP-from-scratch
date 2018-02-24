$(document).ready(function()
{
    var cart_no_polling = function()
    {
        $.ajax({
        url:"/../almas-parlour/behind-scenes/items-incart.php",
        dataType:"json",

        success:function(data)
        {
            $('.item-count').html(data.items_no);
        }
        /*
        error:function(xhr, ajaxOptions, thrownError)
        {
            alert(xhr.status);
        }
        */
        });

    }

    setInterval(cart_no_polling,500);

});

/******************************************
 /*  <script src="/../almas-parlour/js/cart-erise.js" type="text/javascript"></script>
 <script src="/../almas-parlour/js/cart-display.js" type="text/javascript"></script>
 <script src="/../almas-parlour/js/user-info.js" type="text/javascript"></script>
 <script src="/../almas-parlour/js/fav-item.js" type="text/javascript"></script>
 <script src="/../almas-parlour/js/fav-total.js" type="text/javascript"></script>*/

 /*******************************************/