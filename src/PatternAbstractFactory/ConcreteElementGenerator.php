<?php
namespace App\PatternAbstractFactory;

class ConcreteElementGenerator
{
    public AbstractFactory $factory;

    /**
     * @param AbstractFactory $factory
     */
    public function __construct(AbstractFactory $factory)
    {
        $this->factory = $factory;
    }

    public function generate()
    {
        $randomTypeSelector = rand(1,2);
        switch ($randomTypeSelector) {
            case 1:
                return $this->factory->createA();
                break;
            default:
                return $this->factory->createB();
                break;
        }
    }
}