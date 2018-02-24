$(document).ready(function ()
{
    //user ajax to get all info
        $.ajax({
            url: '../admin/view-products-backend.php',
            dataType: 'json',
            context: document.body,

            success: function (data) {

                //get all data from php and sort them based on clicked link
                prod_id = data.prod_id;
                prod_code = data.prod_code;
                prod_name = data.prod_name;
                prod_type = data.prod_type;
                prod_descr = data.prod_desc;
                add_info = data.add_info;
                prod_color = data.prod_color;
                img_path = data.prod_img;
                price = data.prod_price;
                prod_date = data.prod_date;
                error_mess = data.error_mess;

                //set a variable to store looping items
                dress_container = ng_container = jp_container = cosm_container = '';

                //run a loop to store files in variable
                for (i = 0; i < prod_id.length; i++) {
                    if (prod_type[i] == 'dress') {
                        dress_container += "<tr><td><img src='../" + img_path[i] + "' alt='item-dress-" + prod_id[i] + "' height='40' width='40'/></td>" +
                            "<td>" + prod_code[i] + "</td><td>" + prod_name[i] + "</td><td>" + prod_descr[i] + "</td><td>Ksh. " + price[i] + "</td>" +
                            "<td>" + prod_date[i] + "</td><td>" +
                            "<div class='input-group-btn'><div class='btn btn-default' type='button' name='btn-"+prod_id[i]+"'><span class='glyphicon glyphicon-plus'></span></div>"
                            "</div><input type='hidden' value='"+prod_id[i]+"' </td></tr>";
                    }
                    else if (prod_type[i] == 'nightgown') {
                        ng_container += "<tr><td><img src='../" + img_path[i] + "' alt='item-dress-" + prod_id[i] + "' height='40' width='40'/></td>" +
                            "<td>" + prod_code[i] + "</td><td>" + prod_name[i] + "</td><td>" + prod_descr[i] + "</td><td>Ksh. " + price[i] + "</td>" +
                            "<td>" + prod_date[i] + "</td></tr>";
                    }
                    else if (prod_type[i] == 'cosmetics') {
                        cosm_container += "<tr><td><img src='../" + img_path[i] + "' alt='item-dress-" + prod_id[i] + "' height='40' width='40'/></td>" +
                            "<td>" + prod_code[i] + "</td><td>" + prod_name[i] + "</td><td>" + prod_descr[i] + "</td><td>Ksh. " + price[i] + "</td>" +
                            "<td>" + prod_date[i] + "</td></tr>";
                    }
                    else if (prod_type[i] == 'jumpsuits') {
                        jp_container += "<tr><td><img src='../" + img_path[i] + "' alt='item-dress-" + prod_id[i] + "' height='40' width='40'/></td>" +
                            "<td>" + prod_code[i] + "</td><td>" + prod_name[i] + "</td><td>" + prod_descr[i] + "</td><td>Ksh. " + price[i] + "</td>" +
                            "<td>" + prod_date[i] + "</td><td style='display:none;'></td></tr>";
                    }
                }

                //default on page load show dresses
                $(".admin_items_view").html(dress_container);

                $(".dresses-view").on('click', function (e) {
                    e.preventDefault();
                    $(".admin_items_view").html(dress_container);
                });
                $(".ng-view").on('click', function (e) {
                    e.preventDefault();
                    $(".admin_items_view").html(ng_container);
                });
                $(".cosmetics-view").on('click', function (e) {
                    e.preventDefault();
                    $(".admin_items_view").html(cosm_container);
                });
                $(".jumpsuits-view").on('click', function (e) {
                    e.preventDefault();
                    $(".admin_items_view").html(jp_container);
                });

            }

        });

});