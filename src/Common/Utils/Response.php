<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 01:11
 */

namespace Rebirth\Common\Utils;


trait Response
{

    /**
     * @var \Rebirth\Response Response对象
     */
    private $_response;

    /**
     * @return \Rebirth\Response
     */
    public function getResponse()
    {
        return $this->_response;
    }

    /**
     * @param \Rebirth\Response $response
     */
    public function setResponse($response)
    {
        $this->_response = $response;
    }

} 