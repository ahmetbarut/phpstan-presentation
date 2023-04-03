<?php

function testLevel0($a) {
    $nonExistentObject = new NonExistentClass();
    // Unknown class NonExistentClass detected
    $result = myFunction($a, $b);
    // Unknown function myFunction detected
    $this->nonExistentMethod($a, $b);
    // Unknown method MyClass::nonExistentMethod() called on $this
    $this->myMethod(1, 2, 3);
    // Parameter #3 $c of method MyClass::myMethod() expects int, string given
    $undefinedVar = $undefinedVar + 1;
    // Undefined variable: undefinedVar
}