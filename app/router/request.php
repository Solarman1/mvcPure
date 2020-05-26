<?php


class Request
{
    
    public $request;

    public function __construct()
    {
        $this->request = $_SERVER('REQUEST_URI');
    }
    

}