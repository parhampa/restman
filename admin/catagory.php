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
<title>food category</title>
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
        <h5><b><i class="fa fa-dashboard"></i>food category</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-left" style="width: 80%;">
        <?php
        $fm = new makeform();
        $fm->set_tbl_key("catagory", "id", 1);
        $fm->label("father")
            ->select()
            ->selectname("fid")
            ->selectid("fid")
            ->selectclasses("w3-select w3-border")
            ->selectaddval("0", "without father")
            ->selectdb("catagory", "name", "id", "", "where `fid`=0")
            ->end()
            ->sndform("fid", 2, 1, "father", 1, 1);
        $fm->fast_string_input("category name", "name", "name", 1, 1, 1);
        $fm->fast_textarea("keywords", "keywords", "keywords", 0);
        $fm->fast_textarea("describ", "describ", "describ", 0);
        $fm->submit();
        $fm->addform();
        $fm->show();
        ?>

    </div>
    <!-- End page content -->
</div>
<?php
include("footer.php");
?>
</body>
</html>