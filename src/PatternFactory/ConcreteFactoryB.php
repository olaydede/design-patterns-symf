<?php
namespace App\PatternFactory;

class ConcreteFactoryB extends AbstractFactory
{
    public function factoryMethod(): AbstractSubject
    {
        return new SubjectB();
    }

}