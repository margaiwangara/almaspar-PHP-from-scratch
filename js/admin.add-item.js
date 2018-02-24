$(document).ready(function()
{
    //on click button
    $("form#add_item_form").on('submit',function (e)
    {
        e.preventDefault();
        formData = new FormData(this);

        $.ajax({
            url:'../admin/add-item.php',
            type:'POST',
            dataType:'html',
            data:formData,
            processData: false,
            contentType: false,

            success:function(data)
            {
                if(!data.display_error)
                {
                    $(".error-display-access").show();
                    $(".error-display").html("New item added successfully");

                    $("#add_item_form")[0].reset();
                    $(".error-display-access").hide(2000);
                }
                else
                {
                    $(".error-display-access").show();
                    $(".error-display").html(data);
                }

            }
        });
    });
});