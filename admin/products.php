<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 8/25/2020
 * Time: 4:01 PM
 */
session_start();
include("../lib/php/lib_include.php");
include("check_admin_session.php");
?>
<!DOCTYPE html>
<html>
<title>products</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include("javascripts.php");
?>
<style>
    html, body, h1, h2, h3, h4, h5 {
        font-family: Tahoma;
    }

    body {
        font-size: 12px;
    }
</style>
<body class="w3-light-grey" style="direction: ltr;">

<!-- Top container -->
<?php
include("top.php");
?>
<!-- Sidebar/menu -->
<?php
include("nav.php");
?>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
     title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px;">
        <h5><b><i class="fa fa-dashboard"></i>products</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-left" style="width: 80%;">
        <script src="js/subcat.js"></script>
        <?php
        $fm = new makeform();
        $fm->set_tbl_key("products", "id", 1);
        $fm->option_td_include = "add_one_btn.php";
        $fm->label("restaurant")
            ->select()
            ->selectname("rest_id")
            ->selectid("rest_id")
            ->selectclasses("w3-input w3-border")
            ->selectdb("restaurant_name", "name", "id")
            ->end()
            ->sndform("rest_id", 2, 1, "restaurant", 1, 1);
        $fm->label("category")
            ->select()
            ->selectname("fcategory")
            ->selectid("fcategory")
            ->selectclasses("w3-select w3-border subcatitem")
            ->select_onchange("loadsubcat()")
            ->selectdb("catagory", "name", "id", "", "where `fid`=0")
            ->end();
        $fm->label("sub category")
            ->select()
            ->selectname("cat_id")
            ->selectid("cat_id")
            ->selectclasses("w3-select w3-border")
            ->selectdb("catagory", "name", "id", "")
            ->end()
            ->sndform("cat_id", 2, 1, "sub category", 1, 1);
        $fm->fast_string_input("food name", "name", "name", 1, 1, 1);
        $fm->fast_textarea("more information", "more_info", "more_info", 0);
        $fm->fileinput("picture 1", "pic1", "w3-input w3-border", "w3-text-green", 0);
        $fm->fileinput("picture 2", "pic2", "w3-input w3-border", "w3-text-green", 0);
        $fm->fileinput("picture 3", "pic3", "w3-input w3-border", "w3-text-green", 0);
        $fm->fast_textarea("keywords", "keywords", "keywords", 0);

        $fm->fast_string_input("size 1 name", "size1name", "size1name", 0);
        $fm->fast_number_input("size 1 price", "size1price", "size1price", 0);

        $fm->fast_string_input("size 2 name", "size2name", "size2name", 0);
        $fm->fast_number_input("size 2 price", "size2price", "size2price", 0);

        $fm->fast_string_input("size 3 name", "size3name", "size3name", 0);
        $fm->fast_number_input("size 3 price", "size3price", "size3price", 0);
        $fm->submit();
        $fm->addform();
        $fm->show();
        ?>

    </div>
    <?php
    if (isset($_GET['action']) == false) {
        ?>
        <script>loadsubcat()</script><?php
    } else {
    if ($_GET['action'] == "addform") {
    ?>
        <script>loadsubcat()</script><?php
    }
    }
    ?>
    <!-- End page content -->
</div>
<?php
include("footer.php");
?>
</body>
</html>