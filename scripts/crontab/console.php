<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/19
 * Time: 0:36
 */

date_default_timezone_set('Asia/Shanghai');
mb_internal_encoding("UTF-8");

define("APP_PATH",  realpath(dirname(__FILE__) . '/../../')); /* 指向public的上一级 */
$app  = new Yaf\Application(APP_PATH . "/application.ini");
$app->bootstrap();
$app->execute('main', $argc,  $argv);
