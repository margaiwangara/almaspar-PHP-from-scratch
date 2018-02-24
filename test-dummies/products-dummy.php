<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--styles for the flexslider plugin-->
    <link rel="stylesheet" href="../flexslider/css/flexslider.css">
    <title>Document</title>
</head>
<body>

<div>
    <div class="flexslider">
        <ul class="slides">
            <li data-thumb="images/si.jpg">
                <div class="thumb-image"> <img src="../images/si.jpg" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="images/si1.jpg">
                <div class="thumb-image"> <img src="../images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="images/si2.jpg">
                <div class="thumb-image"> <img src="../images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
            </li>
        </ul>
    </div>
</div>



<script src="../flexslider/js/jquery.flexslider.js" type="text/javascript"></script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
</body>
</html>

