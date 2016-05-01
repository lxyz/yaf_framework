<?php
namespace utils;
use Illuminate\Support\Facades\App;
use Monolog\Handler\BufferHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogHandler;
use Monolog\Logger;

/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/5/1
 * Time: 20:31
 */

class LogUtil {

    public static function getInstance()
    {
        $log = new Logger('log');
        $fileHandler = new RotatingFileHandler(APP_PATH . '/public/log.txt', $log::INFO);
//        $fileHandler = new SyslogHandler(APP_PATH . '/public/log.txt', $log::INFO);
//        $fileHandler = new StreamHandler(APP_PATH . '/public/log.txt', $log::INFO);
        $handler = new BufferHandler($fileHandler);
        $log->pushHandler($handler);
        return $log;
    }
}