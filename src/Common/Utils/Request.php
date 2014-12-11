<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 01:09
 */
namespace Rebirth\Common\Utils;

trait Request
{
    /**
     * @var \Rebirth\Request Request对象
     */
    private $_request;

    /**
     * @return \Rebirth\Request
     */
    public function getRequest()
    {
        return $this->_request;
    }

    /**
     * @param \Rebirth\Request $request
     */
    public function setRequest($request)
    {
        $this->_request = $request;
    }

}