<?php
namespace App\PatternAbstractFactory;

use JetBrains\PhpStorm\Pure;

class ConcreteFactoryA implements AbstractFactory
{
    /**
     * @return AbstractElementA
     */
    #[Pure] public function createA(): AbstractElementA
    {
        return new ConcreteElementAA();
    }

    /**
     * @return AbstractElementB
     */
    #[Pure] public function createB(): AbstractElementB
    {
        return new ConcreteElementBA();
    }
}
