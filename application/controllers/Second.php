<?php


class SecondController extends Yaf\Controller_Abstract {

   public function indexAction() {//默认Action
       Yaf\Dispatcher::getInstance()->disableView();
       $data = \dao\UserDao::getCount();
       var_dump($data);
   }

    public function seAction() {
        Yaf\Dispatcher::getInstance()->disableView();
        echo 'this is seAction';
    }
}
