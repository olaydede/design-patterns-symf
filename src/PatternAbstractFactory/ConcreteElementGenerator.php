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

    /**
     * @return AbstractElementA|AbstractElementB
     */
    public function generate(): AbstractElementA|AbstractElementB
    {
        return match (rand(1, 2)) {
            1 => $this->factory->createA(),
            default => $this->factory->createB(),
        };
    }
}
