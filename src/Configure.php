<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/11
 * Time: 23:35
 */

namespace Rebirth;

/**
 * 配置管理器
 *
 * @package Rebirth
 */
interface Configure
{

    /**
     * 类名， 用于注册到对象工厂
     */
    const CLASS_NAME = '\Rebirth\Configure';

    /**
     * 添加配置信息
     *
     * @param array $configs 配置数组
     *
     * @return void
     */
    public function setConfigs(array $configs);

    /**
     * 获取最终的配置信息数组
     *
     * @return array
     */
    public function getConfigs();

    /**
     * 获取配置信息
     *
     * @param string $key     配置key
     * @param mixed  $default 默认值
     *
     * @return mixed
     */
    public function getConfig($key, $default = null);
}