<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 11/16/2020
 * Time: 3:59 AM
 */
include("../lib/php/lib_include.php");
$ml = new mobile_input();
$id = $ml->set_name("rest_id")
    ->set_title("rest_id")
    ->set_important(true)
    ->post_int();
$sql = "select * from `package` where `rest_id`=$id";
$db = new database();
$db->connect()->query($sql);
while ($fild = mysqli_fetch_assoc($db->res)) {
    ?>
    <option value="<?php echo($fild['id']); ?>"><?php echo($fild['pack_name']); ?></option><?php
}
?>