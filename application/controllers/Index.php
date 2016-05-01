<?php


class IndexController extends Yaf\Controller_Abstract {

   public function indexAction() {//默认Action
       Yaf\Dispatcher::getInstance()->disableView();
        echo 'indexController@indexAction';
   }

    public function seAction() {
        $count = \dao\UserDao::getCount();
        \utils\LogUtil::getInstance()->addInfo('aaaaaa');
        $this->getView()->assign('name', 'name');
        $this->getView()->assign('count', $count);
    }
}
