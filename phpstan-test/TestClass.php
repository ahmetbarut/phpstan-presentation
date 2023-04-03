<?php

namespace App;

class TestClass{
    public $message = 'Hello World!';

    public function __construct()
    {
        $this->message = 'Hello World!';
    }
    
    public function testMethod($param1, $param2)
    {
        if ($param1) {
            return $param2;
        } else {
            return $param1;
        }
    }

    public function test_method($param1, $param2)
    {
        if ($param1) {
            return $param2;
        } else {
            return $param1;
        }
    }
}
