<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/26
 * Time: 9:03 下午
 */
namespace di;
class Person
{
    /**
     * 依赖：person依赖于¥obj
     * 注入：$obj注入person类
     * @param $obj
     * @return mixed
     */
    public function buy($obj)
    {
        return $obj->pay();
    }
}