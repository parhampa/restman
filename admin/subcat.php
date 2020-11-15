<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 11/14/2020
 * Time: 1:50 PM
 */
include("../lib/php/lib_include.php");
$ml = new mobile_input();
$fid = $ml->set_name("fcategory")
    ->set_title("father category")
    ->set_important(true)
    ->post_int();
$sql = "select * from `catagory` where `fid`=$fid";
$db = new database();
$db->connect()->query($sql);
while ($fild = mysqli_fetch_assoc($db->res)) {
    ?>
    <option value="<?php echo($fild['id']); ?>"><?php echo($fild['name']); ?></option><?php
}
?>