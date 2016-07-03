<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/19
 * Time: 0:36
 */

date_default_timezone_set('Asia/Shanghai');
mb_internal_encoding("UTF-8");

define("APP_PATH",  realpath(dirname(dirname(__DIR__)))); /* 指向public的上一级 */
$app = new Yaf\Application(APP_PATH . "/application.ini");
Yaf\Loader::import(APP_PATH . '/vendor/' . 'autoload.php');
$job = new Job();
$method = empty($argv[1]) ? 'main' : $argv[1];
$app->execute([$job, $method], $argc,  $argv);
