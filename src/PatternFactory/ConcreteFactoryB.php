<?php
namespace App\PatternFactory;

use JetBrains\PhpStorm\Pure;

class ConcreteFactoryB extends AbstractFactory
{
    /**
     * @return AbstractSubject
     */
    #[Pure] public function factoryMethod(): AbstractSubject
    {
        return new SubjectB();
    }
}
