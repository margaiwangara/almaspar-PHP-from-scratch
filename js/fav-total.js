$(document).ready(function()
{
    var polling = function(){
        $.ajax({
            url:'/../almas-parlour/behind-scenes/fav-total.php',
            dataType:'json',

            success:function(data)
            {
                $('.fav-item-count').html(data.fav_total);
            }
            /*
            error:function(xhr, ajaxOptions, thrownError)
            {
                alert(xhr.status);
            }
            */
        });

    }

    setInterval(polling,500);
});