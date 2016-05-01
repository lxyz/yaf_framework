
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/19
 * Time: 0:36
 */
require './console.php';
function main($argc, $argv) {
    var_dump(\dao\UserDao::getCount());
}
