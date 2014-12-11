<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 01:13
 */

namespace Rebirth\Common\Utils;


trait Router
{

    /**
     * @var \Rebirth\Router 路由
     */
    private $_router;

    /**
     * @return \Rebirth\Router
     */
    public function getRouter()
    {
        return $this->_router;
    }

    /**
     * @param \Rebirth\Router $router
     */
    public function setRouter($router)
    {
        $this->_router = $router;
    }

} 