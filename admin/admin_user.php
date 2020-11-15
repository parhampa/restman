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
<title>System admin</title>
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
        <h5><b><i class="fa fa-dashboard"></i>System admin</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-left" style="width: 80%;">
        <?php
        $fm = new makeform();
        $fm->set_tbl_key("admin_user", "username", 0);
        $fm->label("username", "w3-text-green")
            ->input()
            ->inpname("username")
            ->inpid("username")
            ->inptype("text")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("username", 0, 1, "username", 1, 1);
        $fm->label("password", "w3-text-green")
            ->input()
            ->inptype("password")
            ->inpname("pass")
            ->inpid("pass")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("pass", 0, 1, "password");
        $fm->label("name", "w3-text-green")
            ->input()
            ->inpname("name")
            ->inpid("name")
            ->inptype("text")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("name", 0, 1, "name", 1, 1);
        $fm->label("family", "w3-text-green")
            ->input()
            ->inpname("family")
            ->inpid("family")
            ->inptype("text")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("family", 0, 1, "family", 1, 1);
        $fm->label("tel", "w3-text-green")
            ->input()
            ->inpname("tel")
            ->inpid("tel")
            ->inptype("number")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("tel", 1, 1, "tel", 1, 1);
        $fm->label("email", "w3-text-green")
            ->input()
            ->inpname("email")
            ->inpid("email")
            ->inptype("text")
            ->inpclasses("w3-input w3-border")
            ->end()
            ->sndform("email", 0, 1, "email", 1, 1);
        $fm->label("situation", "w3-text-green")
            ->select()
            ->selectname("active")
            ->selectid("active")
            ->selectaddval(1, "active")
            ->selectaddval(0, "deactive")
            ->selectclasses("w3-select w3-border")
            ->end()
            ->sndform("active", 3, 1, "situation", 1, 1);
        $fm->input()
            ->inptype("submit")
            ->inpval("record")
            ->inpclasses("w3-green w3-btn w3-round")
            ->end();
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