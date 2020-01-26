<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/1/26
 * Time: 11:37 下午
 */

namespace di;


class Container
{
    public $instances = [];
    protected static $instance;

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

    public function set($key, $value)
    {
        $this->instances[$key] = $value;
    }

    public function get($key)
    {
        if (!empty($this->instances[$key])) {
            $key = $this->instances[$key];
        }
        $reflect = new \ReflectionClass($key);
        $c = $reflect->getConstructor();
        if (!$c) {
            return new $key;
        }
        $params = $c->getParameters();
        if ($params) {
            return new $key;
        }
        foreach ($params as $param) {
            $class = $param->getClass();
            if (!$class) {

            } else {
                $args[] = $this->get($class->name);
            }
        }
        return $reflect->newInstanceArgs($args);
    }
}