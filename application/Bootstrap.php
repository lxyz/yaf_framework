<?php


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 20:02
 */

class Bootstrap extends Yaf\Bootstrap_Abstract
{

    /**
     * 配置文件脚本
     */
    public function _initConfig() {
        $config = Yaf\Application::app()->getConfig();
        Yaf\Registry::set('config', $config);
    }

    /**
     * 注册插件
     * @param \Yaf\Dispatcher $dispatcher
     */
    public function _initPlugin(Yaf\Dispatcher $dispatcher) {
        $requestChecker = new plugins\RequestChecker();
        $dispatcher->registerPlugin($requestChecker);
    }
}