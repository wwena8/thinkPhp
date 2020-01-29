<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/29
 * Time: 5:23 下午
 */

class Test
{
    public static function __callStatic($name, $arguments)
    {
        dump($name);
        dump($arguments);
    }
}