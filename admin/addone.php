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
<title>addons</title>
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
        <h5><b><i class="fa fa-dashboard"></i>addons</b></h5>
    </header>
    <div class="w3-white w3-padding-large w3-margin w3-round-medium w3-left" style="width: 80%;">
        <?php
        function checkpid()
        {
            $ml = new mobile_input();
            $pid = $ml->set_name("pid")
                ->set_title("product id")
                ->set_important(true)
                ->get_int(true, false, false, true);
            $db = new database();
            $sql = "select * from `products` where `id`=$pid";
            $db->connect()->query($sql);
            if (mysqli_num_rows($db->res) > 0) {
                $fild = mysqli_fetch_assoc($db->res);
                ?><h4 class="w3-text-green"><?php echo($fild['name']); ?> add-ons</h4><?php
            } else {
                die();
            }
        }

        $pid = 0;
        if (isset($_GET['action']) == true) {
            if ($_GET['action'] == "show" || $_GET['action'] == "addquery" || $_GET['action'] == "addform") {
                checkpid();
            }
            if ($_GET['action'] == "deletequery" || $_GET['action'] == "editform" || $_GET['action'] == "editquery") {
                $ml2 = new mobile_input();
                $id2 = $ml2->set_name("id")
                    ->set_title("id")
                    ->set_important(true)
                    ->get_int();
                $dbd = new database();
                $dbd->connect()->query("select * from `addone` where `id`=$id2");
                if (mysqli_num_rows($dbd->res) > 0) {
                    $fild2 = mysqli_fetch_assoc($dbd->res);
                    $pid = $fild2['pid'];
                }
            }
        } else {
            checkpid();
        }
        $fm = new makeform();
        $fm->after_add_url = "addone.php?pid=" . $pid . "&action=show";
        $fm->after_edit_url = "addone.php?pid=" . $pid . "&action=show";
        $fm->after_delete_url = "addone.php?pid=" . $pid . "&action=show";
        if ($pid != 0) {
            $fm->setwhere("`pid`=$pid");
        }
        $fm->set_tbl_key("addone", "id", 1);
        $fm->set_int_val("pid", $pid, true, true);
        $fm->fast_string_input("title", "title", "title", 1, 1);
        $fm->fast_number_input("price", "price", "price", 1, 1);
        $fm->fast_textarea("more_info", "more_info", "more_info");
        $fm->submit();
        $fm->addform("post", "addone.php?pid=" . $pid . "&action=addquery");
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