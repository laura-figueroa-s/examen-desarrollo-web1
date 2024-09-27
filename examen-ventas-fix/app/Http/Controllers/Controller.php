<?php

namespace App\Http\Controllers;

abstract class Controller
{
    private $_header;
    private $_api_get;
    private $_api_post;
    private $_api_put;
    private $_api_lock;
    private $_api_unlock;
    private $_api_delete;

    public function __construct()
    {
        $this->_header = isset(getallheaders()['Authorization']) ? getallheaders()['Authorization'] : null;
        $this->_api_get = 'Bearer get';
        $this->_api_post = 'Bearer post';
        $this->_api_put = 'Bearer put';
        /* $this->_api_lock = 'Bearer abc123';
        $this->_api_unlock = 'Bearer abc321'; */
        $this->_api_delete = 'Bearer delete';
    }

    public function getHeader()
    {
        return $this->_header;
    }

    public function getAuthBearer($_metodo)
    {
        switch ($_metodo) {
            case 'GET':
                return $this->_api_get == $this->_header;
            case 'POST':
                return $this->_api_post == $this->_header;
            case 'PUT':
                return $this->_api_put == $this->_header;
            case 'DELETE':
                return $this->_api_delete == $this->_header;
            case 'LOCK':
                return $this->_api_lock == $this->_header;
            case 'UNLOCK':
                return $this->_api_unlock == $this->_header;
            default:
                return false;
        }
    }
}
