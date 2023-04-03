<?php

class ExampleClass {
    private $number;

    /**
     * @param int $number
     */
    public function __construct($number) {
        $this->number = $number;
    }

    public function getNumber() {
        return $this->number;
    }
}

$example = new ExampleClass("10");
echo $example->getNumber() . "\n";
