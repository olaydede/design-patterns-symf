<?php
namespace App\PatternFactory;

class ConcreteFactoryA extends AbstractFactory
{
    public function factoryMethod(): AbstractSubject
    {
        return new SubjectA();
    }

}