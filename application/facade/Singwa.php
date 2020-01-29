<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/29
 * Time: 11:30 下午
 */

namespace app\facade;


use think\Facade;

class Singwa extends Facade
{
    protected static function getFacadeClass()
    {
        return "\app\common\Singwa";
    }
}