<?php
/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/4/30
 * Time: 11:46
 */

class ErrorController extends Yaf\Controller_Abstract {

    public function errorAction($exception) {
        die(json_encode(['status' => $exception->getCode(), 'message'=>$exception->getMessage()]));
    }
}