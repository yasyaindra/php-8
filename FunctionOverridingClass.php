<?php

class ParentClass {

    private function method(string $name){

    }
}

class Child extends ParentClass {
    public function method(string $name) {
        parent::method($name);
    }
}