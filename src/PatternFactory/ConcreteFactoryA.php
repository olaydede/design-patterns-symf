<?php
namespace App\PatternFactory;

use JetBrains\PhpStorm\Pure;

class ConcreteFactoryA extends AbstractFactory
{
    /**
     * @return AbstractSubject
     */
    #[Pure] public function factoryMethod(): AbstractSubject
    {
        return new SubjectA();
    }
}
