<?php
namespace App\PatternAbstractFactory;

class ConcreteFactoryB implements AbstractFactory
{
    public function createA(): AbstractElementA
    {
        return new ConcreteElementAB();
    }

    public function createB(): AbstractElementB
    {
        return new ConcreteElementBB();
    }

}