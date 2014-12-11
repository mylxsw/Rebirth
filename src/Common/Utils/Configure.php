<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 00:14
 */
namespace Rebirth\Common\Utils;
use Rebirth\Common\DefaultConfigure;

/**
 * 配置管理器
 *
 * @package Rebirth\Common\Utils
 */
trait Configure
{
    /**
     * @var \Rebirth\Configure 配置管理器
     */
    private $_configure;

    /**
     * @return \Rebirth\Configure
     */
    public function getConfigure()
    {
        if (empty($this->_configure)) {
            $this->_configure
                = DefaultConfigure::getInstance();
        }
        return $this->_configure;
    }

    /**
     * @param \Rebirth\Configure $configure
     */
    public function setConfigure(\Rebirth\Configure $configure)
    {
        $this->_configure = $configure;
    }

}