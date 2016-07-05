<?php


class ExampleDaoTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $app = new Yaf\Application(APP_PATH . "/application.ini");
        Yaf\Loader::import(APP_PATH . '/vendor/' . 'autoload.php');
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $this->tester->assertEquals(\zzk\commons\dao\UserDao::getCount(), 196847);
    }
}