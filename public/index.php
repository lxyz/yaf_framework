<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/19
 * Time: 0:36
 */

define("APP_PATH",  realpath(dirname(dirname(__FILE__)))); /* 指向public的上一级 */
$app = new Yaf\Application(APP_PATH . "/application.ini");
Yaf\Loader::import(APP_PATH . '/vendor/' . 'autoload.php');
$app->getDispatcher()->disableView(); //由于是json api， 所有禁用模版自动渲染
$app->bootstrap()->run();