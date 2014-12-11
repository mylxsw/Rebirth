<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/11
 * Time: 23:43
 */

namespace Rebirth\Common;


use Rebirth\Common\Exceptions\NullPointerException;
use Rebirth\Factory;

/**
 * 默认的对象工厂
 *
 * @package Rebirth\Common
 */
class DefaultFactory implements Factory
{
    /**
     * @var self 对象工厂实例
     */
    private static $_instance;

    /**
     * @var [] 已经加载的对象列表
     */
    private $_loadedObjects = [];

    /**
     * 单例方式获取对象工厂实例
     *
     * @return Factory
     */
    public static function getInstance()
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * 对象注册
     *
     * @param string $class  要注册的类名
     * @param mixed  $object 要注册的对象，留空则使用默认构造器创建class对象
     *
     * @return bool
     */
    public function register($class, $object = null)
    {
        if (empty($object)) {
            $object = new $object;

            // 如果存在setFactory方法，则注入Factory对象
            if (method_exists($object, 'setFactory')) {
                $object->setFactory($this);
            }
        }

        $this->_loadedObjects[$class] = $object;
    }

    /**
     * 查询是否存在对象
     *
     * @param string $class 对象类名
     *
     * @return bool
     */
    public function has($class)
    {
        return isset($this->_loadedObjects[$class]);
    }

    /**
     * 查询所有对象
     *
     * @return array 返回所有对象，格式为 [类名 => 对象]
     */
    public function getAll()
    {
        return $this->_loadedObjects;
    }

    /**
     * 查询对象
     *
     * @param string $class 获取的类名
     *
     * @return \stdClass
     * @throws NullPointerException
     */
    public function get($class)
    {
        if (!isset($this->_loadedObjects[$class])) {
            throw new NullPointerException("对象{$class}没有注册!");
        }

        return $this->_loadedObjects[$class];
    }
}