<?php

class ExampleClass {
    public function __call($name, $arguments) {
        // Bilinmeyen sihirli metot çağrısı
        return [];
    }
    public function __get($name) {
        // Bilinmeyen sihirli özellik çağrısı
        return [];
    }
}

$example = new ExampleClass();
$undefinedVar = $example->nonExistentProperty;
// Possibly undefined variable: nonExistentProperty
$example->nonExistentMethod();
// Call to an undefined method ExampleClass::nonExistentMethod()