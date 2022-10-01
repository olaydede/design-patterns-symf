<?php
namespace App\PatternFactory;

abstract class AbstractFactory
{
    abstract public function factoryMethod(): AbstractSubject;

    public function differentOperation()
    {
        $subject = $this->factoryMethod();
        return $subject->execute() . ". Made in factory ". get_class($this) . ".";
    }
}