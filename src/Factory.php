<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/11
 * Time: 23:24
 */

namespace Rebirth;

/**
 * 对象工厂接口
 *
 * @package Rebirth
 */
interface Factory
{
    /**
     * 查询对象
     *
     * @param string $class 获取的类名
     *
     * @return \stdClass
     * @throws Common\Exceptions\NullPointerException
     */
    public function get($class);

    /**
     * 对象注册
     *
     * @param string $class  要注册的类名
     * @param mixed  $object 要注册的对象，留空则使用默认构造器创建class对象
     *
     * @return bool
     */
    public function register($class, $object = null);

    /**
     * 查询是否存在对象
     *
     * @param string $class 对象类名
     *
     * @return bool
     */
    public function has($class);

    /**
     * 查询所有对象
     *
     * @return [] 返回所有对象，格式为 [类名 => 对象]
     */
    public function getAll();

}