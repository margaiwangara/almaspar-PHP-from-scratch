$(document).ready(function()
{
    $(".sidebar-toggler").on('click',function(e)
    {
        e.preventDefault();

        //class toggle
        $("#admin-wrapper").toggleClass("toggledDisplay");
    });

    $(document).ready(function () {
        var url = window.location;
        // Will only work if string in href matches with location
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');

        // Will also work for relative and absolute hrefs
        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');


    });

});
