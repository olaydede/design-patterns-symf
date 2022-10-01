<?php
namespace App\PatternAbstractFactory;

class ConcreteFactoryA implements AbstractFactory
{
    public function createA(): AbstractElementA
    {
        return new ConcreteElementAA();
    }

    public function createB(): AbstractElementB
    {
        return new ConcreteElementBA();
    }

}