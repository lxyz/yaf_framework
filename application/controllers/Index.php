<?php


class IndexController extends Yaf\Controller_Abstract {

   public function indexAction() {//默认Action
       Yaf\Dispatcher::getInstance()->disableView();
        echo 'indexController@indexAction';
   }

    public function seAction() {
        Yaf\Dispatcher::getInstance()->disableView();
        $data = \dao\UserDao::getCount();
        var_dump($data);
    }
}
