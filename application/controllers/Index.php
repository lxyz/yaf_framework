<?php


class IndexController extends Yaf\Controller_Abstract {

    public function indexAction() {//默认Action
        var_dump(\zzk\commons\dao\UserDao::getCount());
    }
}
