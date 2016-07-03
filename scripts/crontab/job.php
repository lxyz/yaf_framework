
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/19
 * Time: 0:36
 */
require __DIR__ . '/console.php';

class Job {

    /**
     * default method to be executed
     */
    public static function main()
    {
        echo \zzk\commons\dao\UserDao::getCount();
    }

    function test() {
        echo __FUNCTION__;
    }
}

