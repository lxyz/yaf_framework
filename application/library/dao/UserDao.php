<?php
namespace dao;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/19
 * Time: 17:06
 */
class UserDao
{
    const TABLE = 'sys_users';

    public static function getAll()
    {
        return Capsule::table(self::TABLE)->get();
    }

    /**
     * 获取总数
     * @return int
     */
    public static function getCount() {
        return Capsule::table(self::TABLE)->count();
    }
}