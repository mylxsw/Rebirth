<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/11
 * Time: 23:40
 */

namespace Rebirth\Common;

use Rebirth\Configure;

/**
 * 默认配置管理器
 *
 * @package Rebirth\Common
 */
class DefaultConfigure implements Configure
{
    /**
     * @var array 配置信息
     */
    private $_configs = [];

    /**
     * @var self 默认配置实例
     */
    private static $_instance;

    /**
     * 单例获取当前对象实例
     *
     * @return DefaultConfigure
     */
    public static function getInstance()
    {
        if (empty(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * 添加配置信息
     *
     * @param array $configs 配置数组
     *
     * @return void
     */
    public function setConfigs(array $configs)
    {
        $this->_configs = $configs + $this->_configs;
    }

    /**
     * 获取最终的配置信息数组
     *
     * @return array
     */
    public function getConfigs()
    {
        return $this->_configs;
    }

    /**
     * 获取配置信息
     *
     * @param string $key 配置key
     * @param mixed $default 默认值
     *
     * @return mixed
     */
    public function getConfig($key, $default = null)
    {
        if (isset($this->_configs[$key])) {
            return $this->_configs[$key];
        }

        return $default;
    }
}