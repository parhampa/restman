<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 11/15/2020
 * Time: 3:37 AM
 */
if (isset($this->setkey) == false) {
    die();
}
$restbl .= '<a href="addone.php?pid=' . $fild[$this->setkey] . '"><input type="button"
                                                                                class="w3-btn w3-green w3-round"
                                                                                value="add-ons"></a>';
?>