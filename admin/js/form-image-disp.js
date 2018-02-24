$(document).ready(function()
{
    $("#add-image").on('change',function(e)
    {
        for(var i =0; i< e.originalEvent.srcElement.files.length;i++)
        {
            var file = e.originalEvent.srcElement.files[i];

            var img = document.createElement('img');
            img.setAttribute('style','height:100px;width:100px;');

            var reader = new FileReader();
            reader.onloadend = function()
            {
                img.src = reader.result;
            }
            reader.readAsDataURL(file);
            $(".thumbnails").append("<div class='col-md-3'>"+img+"</div>");
        }
    });
});