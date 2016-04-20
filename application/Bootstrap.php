<?php


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 20:02
 */

class Bootstrap extends Yaf\Bootstrap_Abstract{

    /**
     * 自动加载脚本
     */
    public function _initLoader() {
        Yaf\Loader::import(APP_PATH . '/application/library/vendor/' . 'autoload.php');
    }

    /**
     * 配置文件脚本
     */
    public function _initConfig() {
        $config = new Yaf\Config\Ini(APP_PATH . DIRECTORY_SEPARATOR . 'application.ini', 'dev');
        Yaf\Registry::set('config', $config);
    }

    /**
     * 数据库参数初始化
     */
    public function _initDataBase() {
        $capsule = new Illuminate\Database\Capsule\Manager();
        $config = Yaf\Registry::get('config');
        $capsule->addConnection($config->dev->database->master->toArray());
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    public function _initPlugin(Yaf\Dispatcher $dispatcher) {
        
    }
}