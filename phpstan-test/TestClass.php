<?php

namespace App;

class TestClass
{
    public string $message = 'Hello World!';

    public function __construct()
    {
        $this->message = 'Hello World!';
    }

    public function testMethod(string $param1, string $param2)
    {
        if ($param1) {
            return $param2;
        } else {
            return $param1;
        }
    }

    public function test_method(string $param1, string $param2): string
    {
        if ($param1) {
            return $param2;
        } else {
            return $param1;
        }
    }
}
