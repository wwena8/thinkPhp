<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/23
 * Time: 11:48 下午
 */

class Single
{
    public static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}