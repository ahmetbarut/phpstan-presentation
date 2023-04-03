<?php

class ExampleClass
{
    private int $number;

    /**
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}

$example = new ExampleClass(10);
echo $example->getNumber() . "\n";
