<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 00:17
 */

namespace Rebirth\Common\Utils;
use Rebirth\Common\DefaultFactory;

/**
 * 对象工厂
 *
 * @package Rebirth\Common\Utils
 */
trait Factory
{
    /**
     * @var \Rebirth\Factory 对象工厂
     */
    private $_factory;

    /**
     * @return \Rebirth\Factory
     */
    public function getFactory()
    {
        if (empty($this->_factory)) {
            $this->_factory = DefaultFactory::getInstance();
        }
        return $this->_factory;
    }

    /**
     * @param \Rebirth\Factory $factory
     */
    public function setFactory(\Rebirth\Factory $factory)
    {
        $this->_factory = $factory;
    }
}