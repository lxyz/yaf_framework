<?php
namespace plugins;
/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/7/1
 * Time: 14:44
 */
class RequestChecker extends \Yaf\Plugin_Abstract
{
    /**
     * (Yaf >= 2.2.9)
     * 分发之前触发
     *
     * @param \Yaf\Request_Abstract $request 当前请求对象
     * @param \Yaf\Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {
//        echo 'hello';
//        exit;
    }

}