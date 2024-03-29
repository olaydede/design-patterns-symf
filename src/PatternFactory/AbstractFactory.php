<?php
namespace App\PatternFactory;

abstract class AbstractFactory
{
    abstract public function factoryMethod(): AbstractSubject;

    /**
     * @return string
     */
    public function differentOperation()
    {
        $subject = $this->factoryMethod();
        return $subject->execute() . ".<br />Made in factory ". get_class($this) . ".";
    }
}
